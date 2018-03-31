<?php

require_once("../env.php");
require_once("../Database.php");
require_once("jsonwrapper/jsonwrapper.php");

$_CONNECT=dbconnect($GLOBALS['_DBSERVER'], $GLOBALS['_DBUSER'], $GLOBALS['_DBPASS'], $GLOBALS['_DBBASENAME']);
$refused = '{"idUser":"0"}';

if($_GET) {
	if (isset($_GET["login"]) && isset($_GET["password"])) {
		$login = $_GET["login"];
		$password = $_GET["password"];
		$tab;
		/* Selection des messages */		
		$q = "SELECT * FROM users WHERE login='".$login."' AND password='".$password."';";
		$request = $_CONNECT->query($q) or die ($refused);
		if($request->num_rows>0) {
			$user = $request->fetch_object();
			echo json_encode($user);
		} else {
			echo $refused;
		}
	} else {
		echo $refused;
	}
} else {
	echo $refused;
}

dbclose($_CONNECT); //deconnexion de la bdd

?>

