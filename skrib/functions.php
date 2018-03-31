<?php
header('Content-Type: text/html; charset=utf-8');

/*
 * ENVIRONMENT
 */
require_once("./env.php");
include_once("./Database.php");
$DEBUG = false; /* ALLOW DEBUGGING */

/* 
 * SERVICES 
 */
include_once("service_utils.php");
include_once("service_msg.php");
include_once("service_user.php");

/*
 * POST ACTIONS
 */
if(isset($_POST["getMessages"]))
	getMessages($_POST["getMessages"]);
else if(isset($_POST["userLogin"]))
	userLogin($_POST["userLogin"]);
else if(isset($_POST['saveMessage']))
	saveMessage($_POST['saveMessage']);
else if(isset($_POST['register']))
	register($_POST['register']);
	
/*
 * GET ACTIONS
 */
if(isset($_GET['action'])) {
	switch($_GET['action']) {
		case "logout" :
			logout();
		break;
	}
}

?>