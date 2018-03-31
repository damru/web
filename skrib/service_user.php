<?php

function register($fields) {
	global $DEBUG;
	$_CONNECT=dbconnect($GLOBALS['_DBSERVER'], $GLOBALS['_DBUSER'], $GLOBALS['_DBPASS'], $GLOBALS['_DBBASENAME']);
	
	$return = array();
	$return["results"] = array();
	
	if(!empty($fields)) {
		$ok=false;
		
		$fields = str_replace('\\"', '"', $fields);
		$fieldsArray = json_decode($fields);
		
		if(!empty($fieldsArray->nom) && !empty($fieldsArray->prenom) && !empty($fieldsArray->email) && !empty($fieldsArray->login) && !empty($fieldsArray->password) && !empty($fieldsArray->password2)) {
			if(isset($fieldsArray->verbose)) {
				$nom = $fieldsArray->nom;
				$prenom = $fieldsArray->prenom;
				$email = $fieldsArray->email;
				$login = $fieldsArray->login;
				$password = $fieldsArray->password;
				$password2 = $fieldsArray->password2;	
			} else {
				$nom = htmlspecialchars($fieldsArray->nom);
				$prenom = htmlspecialchars($fieldsArray->prenom);
				$email = htmlspecialchars($fieldsArray->email);
				$login = htmlspecialchars($fieldsArray->login);
				$password = htmlspecialchars($fieldsArray->password);
				$password2 = htmlspecialchars($fieldsArray->password2);
			}
			
			if($password==$password2 && isEmail($email)){
				$ok = true;
			} else {
				if($password!=$password2) {
					$return["error"]= "Les mots de passe doivent être identiques";
					if(!isset($fieldsArray->verbose)) 
						$_SESSION['comm']['error'] = "Les mots de passe doivent être identiques";
				}
				if(!isEmail($email)) {
					$return["error"]= "Adresse mail incorrecte";		
					if(!isset($fieldsArray->verbose)) 
						$_SESSION['comm']['error'] = "Email incorrect";					
				}
				$ok = false;
			}
			
		} else {
			$ok = false;
			$return["error"]= "Veuillez remplir tous les champs";
			if(!isset($fieldsArray->verbose)) 
				$_SESSION['comm']['error'] = "Veuillez remplir tous les champs";
		}
		
		if($ok) {
			$sql = "INSERT INTO users (nom,prenom,email,login,password) VALUES ('$nom','$prenom','$email','$login','".md5($password)."')";
			$q = $_CONNECT->query($sql);
			
			if($q) {
				$id = mysqli_insert_id($_CONNECT);
				$_SESSION['idUser'] = $id;
				getUserInfos();
				$return['success'] = 1;
			} else {
				$return['error'] = "L'inscription a échoué<br />Veuillez reessayer";
				if(!isset($fieldsArray->verbose)) 
					$_SESSION['comm']['error'] = "L'inscription a échoué<br />Veuillez reessayer";
			}
		}
		
		if(isset($fieldsArray->verbose))
			echo json_encode($return);
		else {
			//header("location: /");
			return $return;
		}
	}
}

function userLogin($fields) {
	global $DEBUG;
	$_CONNECT=dbconnect($GLOBALS['_DBSERVER'], $GLOBALS['_DBUSER'], $GLOBALS['_DBPASS'], $GLOBALS['_DBBASENAME']);
	$return = array();
	$return["results"] = array();
	
	if(!empty($fields)) {
		
		$fields = str_replace('\\"', '"', $fields);
		$fieldsArray = json_decode($fields);

		if(isset($fieldsArray->login) && isset($fieldsArray->password) && isset($fieldsArray->rememberMe)) {
			$login = $fieldsArray->login;
			$password = $fieldsArray->password;
			$rememberMe = $fieldsArray->rememberMe;
			$sql = " SELECT 
				idUser, login, password 
				FROM users 
				WHERE login='$login' AND password='".md5($password)."'";
			$result = $_CONNECT->query($sql);

			if ($DEBUG) echo $sql; 					/* DEBUGGING */
			if ($DEBUG) echo sql_error($_CONNECT);	/* DEBUGGING */
			
			if(num_rows($result)>0) {
				$return["success"] = 1;
				$user = $result->fetch_assoc();
				$_SESSION['idUser'] = $user['idUser'];
			}
			else 
				$return["error"]= "Identifiants incorrects";
		} else
			$return["error"]= "Identifiants incomplets";

		if(isset($fieldsArray->verbose))
			echo json_encode($return);
		else {
			//header("location: /");
			return $return;			
		}
	}
}

function userLogged() {
	global $DEBUG;
	if(!isset($_SESSION['idUser'])) header("location:login");
	else {
		try {
			getUserInfos();
		} catch(Exception $e) {
			$_SESSION['comm']['error'] = $e;
			unset($_SESSION["userInfos"]);
			unset($_SESSION["idUser"]);
			//logout();
		}
	}
}
function logout() {
	global $DEBUG;
	session_destroy();
	header("location:login");
}

function getUserInfos() {
	global $DEBUG;
	$_CONNECT=dbconnect($GLOBALS['_DBSERVER'], $GLOBALS['_DBUSER'], $GLOBALS['_DBPASS'], $GLOBALS['_DBBASENAME']);
	
	$return = array();
	$return["results"] = array();

	$sql = " SELECT 
		idUser, nom, prenom, email, login, age, sexe, rayon
		FROM users 
		WHERE idUser='".$_SESSION['idUser']."'";
	$result = $_CONNECT->query($sql);

	if ($DEBUG) echo $sql;					/* DEBUGGING */
	if ($DEBUG) echo sql_error($_CONNECT);	/* DEBUGGING */
	if ($DEBUG) echo "NumRows of previous request : ".$result->num_rows;
	if(num_rows($result)>0) {
		$return["success"] = 1;
			$user = $result->fetch_assoc();
			$_SESSION['userInfos'] = $user;
	} else {
		$return["error"] = "Identification incorrecte";
	}
	if ($DEBUG) print_r($return);	/* DEBUGGING */
}
?>