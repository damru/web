<?php
session_start();
$_SESSION['language'] = 'fr_FR.utf8'; /* unix */
$_SESSION['language'] = 'french'; /* windows */

//header('Content-Type: text/html; charset=utf-8');
setlocale (LC_ALL, $_SESSION['language']);

/********
 * VARIABLES
 ********/
if((substr($_SERVER['HTTP_HOST'],0,2)=='f.') || (strpos($_SERVER['HTTP_HOST'],'skrib') !== false))
	$_BASEURL = "http://".$_SERVER["HTTP_HOST"]."";
else 
	$_BASEURL = "http://".$_SERVER["HTTP_HOST"]."/df";
	
$_CSSURL=$_BASEURL."/css/";
$_IMGURL=$_BASEURL."/img/";
$_JSURL=$_BASEURL."/js/";
$_FONTURL=$_BASEURL."/fonts/";

/********
 * SQL
 ********/
$_DBSERVER="localhost";
$_DBUSER="drubio";
$_DBPASS="UGFkvzqhev86!";
$_DBBASENAME="df";

?>