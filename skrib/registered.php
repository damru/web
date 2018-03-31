<?php
	session_start();

	//common functions
	require_once("./resources/database.php");
	require_once("./resources/functions.php");
	login();
	logout();
	
	//header html
	require_once "./resources/page_variables.php";
	setTitle("Inscription");
	addCss("./resources/styles.css");
	require_once("./header.php");
?>
 
<body>
	<div id="content-header">
<?php
	$active_page="registered";	
	require_once("content-header.php");
?>
	</div>
	<div id="content-body">
		<div id="content">
<?php
	$error; //verification du formulaire complet
	if(isset($_POST['form-new-user']) && $_POST['login']!=='' && $_POST['nom']!=='' && $_POST['prenom']!=='' && $_POST['password']!=='') {
		$error = false;
		$login = ($_POST['login']);
		$nom = ($_POST['nom']);
		$prenom = ($_POST['prenom']);
		$password = ($_POST['password']);

		//Enregistrement en BDD
		$db = dbconnect();
		$req = "INSERT INTO drubio.users (last_name, first_name, login, password) VALUES ('" . mysql_real_escape_string($nom) . "', '" . mysql_real_escape_string($prenom) . "', '" . mysql_real_escape_string($login) . "', '" . md5(mysql_real_escape_string($password)) . "');";
		if (!mysql_query($req)) $error = true ;
		dbdisconnect($db);

		} else {
		$error = true;
	}
?>
<?php
	if (!$error) {
?>
		<h1>Compte crée</h1>
		<p>
			Bienvenue,<br />
			Tu es désormais inscris sur ce site !<br />
			<br />Tes informations sont les suivantes :
		</p>

		<form action="#">
			<label for="prenom" >Prénom : </label><input disabled="disabled" type="text" name="prenom" id="prenom" value="<?php echo "$prenom"; ?>"/><br />
			<label for="nom" >Nom : </label><input disabled="disabled" type="text" name="nom" id="nom" value="<?php echo "$nom"; ?>"/><br />
			<label for="login" >Login : </label><input disabled="disabled" type="text" name="login" id="login" value="<?php echo "$login"; ?>"/><br />
			<label for="password" >Password : </label><input disabled="disabled" type="text" id="password" name="password" value="<?php echo "$password"; ?>"/><br />
		</form>
		<p>
			Tu peux maintenant te connecter en utilisant ton login et ton mot de passe.<br />
			<br />À bientôt!
		</p>
<?php
	} else {
?>
		<h1>Echec de l'inscription</h1><div>Vous devez renseigner tous les champs pour vous inscrire.<br /><a href="register.php">Reessayer</a></div>
<?php
	}
?>
	</div>
		</div>
	</div>
	<div id="content-footer">
<?php
		require_once("content-footer.php");
?>
	</div>
</body>
</html>