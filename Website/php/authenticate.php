<?php

include "login_info.php"; // include Admin Login Info 

if (session_status() == PHP_SESSION_NONE) {
    session_start();
} // starts a session and creates a session variable

$username = $_POST["username"];		// get username
$password  = $_POST["password"];	// get password
$remember = isset($_POST["remember"]);		// get rememberMe 

// check if login info is valid
if(!($username&&$password))			
{
	header("Location: ../login.html"); /* Redirect browser */
	exit();
}
else
{
	if(($username == $GLOBALS["admin_usr"]) && ($password == $GLOBALS["admin_pwd"])) {
		$_SESSION["username"] = $username;
		$_SESSION["password"] = $password; 
		header("Location: ../timetrack_admin.html");
		exit();
	}
	else if(($username == $GLOBALS["user_usr"]) && ($password == $GLOBALS["user_pwd"])) {
		$_SESSION["username"] = $username;
		$_SESSION["password"] = $password; 
		header("Location: ../timetrack_user.html");
		exit();
	}
	else{
		header("Location: ../login.html"); /* Redirect browser */
		exit();
	}
}

?>