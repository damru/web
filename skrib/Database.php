<?php

function dbconnect($_DBSERVER, $_DBUSER, $_DBPASS, $_DBBASENAME) {
	$_CONNECT = new mysqli($_DBSERVER, $_DBUSER, $_DBPASS, $_DBBASENAME) or die('There was a problem connecting to the database');
	$_CONNECT->query("SET NAMES utf8"); // ! NE PAS ENLEVER : force l'utilisation d'UTF8 pour la requete en base ! //
	return $_CONNECT;
}

function dbclose($_CONNECT) {
	return $_CONNECT->close();
}

function sql_error($sqlObject) {
	return mysqli_error($sqlObject);
}

function num_rows($sqlResults) {
	return $sqlResults->num_rows;
}
?>