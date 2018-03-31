<?php

require_once("../env.php");
require_once("../Database.php");
require_once("jsonwrapper/jsonwrapper.php");
require_once("haversine.php");

$_CONNECT=dbconnect($GLOBALS['_DBSERVER'], $GLOBALS['_DBUSER'], $GLOBALS['_DBPASS'], $GLOBALS['_DBBASENAME']);
$error="Impossible de récupérer les messages";
$messages = ""; //chaine de caracteres du resultat

if($_GET) {

	if (isset($_GET["lat"]) && isset($_GET["long"]) && isset($_GET["r"])) {
		$location["latitude"] = $_GET["lat"];
		$location["longitude"] = $_GET["long"];
		$location["rayon"] = $_GET["r"];

		/* Selection des messages */		
		$q = "SELECT idMessage, body, date, latitude, longitude, idUser, login FROM messages MSG LEFT JOIN users USR ON MSG.fidUser=USR.idUser ORDER BY date DESC;";
		$request = $_CONNECT->query($q) or die ($error);
		while($resultat = $request->fetch_object()) {
			//encodage a la volee des valeurs retournees par la requete sql
			$distance = distFrom($location["latitude"],$location["longitude"], $resultat->latitude, $resultat->longitude);
			$resultat->distance = "".$distance."";

			if($location["rayon"]>$distance) {
				$messages .= json_encode($resultat).",";
			}

		}
		
		echo "{\"messages\":[".$messages."]}";
		//Encodage et affichage
		// if(strlen($messages)>0) {
			// echo "{\"messages\":[".$messages."]}";
		// } else {
			// echo $noMsg;
		// }
	}
} 

dbclose($_CONNECT); //deconnexion de la bdd

?>

