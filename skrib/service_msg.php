<?php

/*
 *	$fields = {"latitude":"","longitude":"", "rayon":""}
 */
function getMessages($fields){
	//global $DEBUG;
	$DEBUG = true;
	
	$_CONNECT=dbconnect($GLOBALS['_DBSERVER'], $GLOBALS['_DBUSER'], $GLOBALS['_DBPASS'], $GLOBALS['_DBBASENAME']);

	$rayonMax = 15000;
	$rayonMin = 1;
	
	$return = array();
	$return["results"] = array();

	if(!empty($fields)) {
		
		$fields = str_replace('\\"', '"', $fields);
		$fieldsArray = json_decode($fields);

		if(!empty($fieldsArray->latitude) && !empty($fieldsArray->longitude) && !empty($fieldsArray->rayon)) {
			$latitude = $fieldsArray->latitude;
			$longitude = $fieldsArray->longitude;
			$rayon = $fieldsArray->rayon;

			if($rayon>$rayonMax) $rayon=$rayonMax;
			if($rayon<$rayonMin) $rayon=$rayonMin;
			
			//update rayon
			$_SESSION['userInfos']['rayon'] = $rayon;
			$updateRayon = "UPDATE users SET rayon=".$_SESSION['userInfos']['rayon']." WHERE idUser=".$_SESSION['userInfos']['idUser'].""; 
			$_CONNECT->query($updateRayon);
			
			$sql = " SELECT 
				messages.*, users.login
				, P_GetDistance($latitude,$longitude,messages.latitude,messages.longitude) AS distance 
				FROM messages
				LEFT JOIN users ON messages.fidUser=users.idUser 
				HAVING distance<=$rayon 
				ORDER BY distance ASC, date DESC ";
			$result = $_CONNECT->query($sql);
			
			if ($DEBUG) echo "SQL : ".$sql."\n"; 	/* DEBUGGING */
			
			if (num_rows($result)>0) {
				$return["success"] = 1;
				while($r = $result->fetch_array(MYSQLI_ASSOC)) {
					$r['date'] = ago($r['date']);
					$r['body']= htmlspecialchars_decode($r['body']);
					$return["results"][] = $r;
				}	
			} else
				$return["error"]= "Aucun message aux alentours ...<br />Y'a un début à tout ! ;)";
		} else
			$return["error"]= "Oops, impossible de récupérer les messages pour le moment ...";

		if ($DEBUG) print_r($return); 	/* DEBUGGING */
		if ($DEBUG) echo "json : ".json_encode($return)."\n"; 	/* DEBUGGING */
		
		if(isset($fieldsArray->verbose))
			echo json_encode($return);
		else 
			return $return;
	}
}
/*
 * $fields = {body, latitude, longitude}
 */
function saveMessage($fields) {
	global $DEBUG;
	$_CONNECT=dbconnect($GLOBALS['_DBSERVER'], $GLOBALS['_DBUSER'], $GLOBALS['_DBPASS'], $GLOBALS['_DBBASENAME']);

	$return = array();
	$return["results"] = array();

	if(!empty($fields)) {
		
		$fields = str_replace('\\"', '"', $fields);
		$fieldsArray = json_decode($fields);

		if(isset($fieldsArray->body) && isset($fieldsArray->latitude) && isset($fieldsArray->longitude) && isset($_SESSION['idUser'])) {
			if(isset($fieldsArray->verbose)) {
				$body = nl2br(htmlspecialchars($fieldsArray->body));
			}
			else {
				$body = nl2br(htmlspecialchars($fieldsArray->body));
			}
							
			$latitude = $fieldsArray->latitude;
			$longitude = $fieldsArray->longitude;
			$idUser = $_SESSION['idUser'];

			$sql = " INSERT INTO messages (fidUser, body, latitude, longitude)
				VALUES ($idUser, '$body', $latitude, $longitude)";

			if ($DEBUG) echo $sql; 					/* DEBUGGING */
			if ($DEBUG) echo sql_error($_CONNECT); 	/* DEBUGGING */
			
			if($_CONNECT->query($sql)) {
				$return["success"] = 1;
			}
			else 			
				$return["error"]= "Oops, impossible de sauvegarder le message. Veuillez reessayer";
			
			if ($DEBUG) echo sql_error($_CONNECT); 	/* DEBUGGING */

		} else
			$return["error"]= "Vous devriez compléter votre message avant de l'envoyer ...";

		if(isset($fieldsArray->verbose))
			echo json_encode($return);
		else 
			return $return;
	}
}

?>