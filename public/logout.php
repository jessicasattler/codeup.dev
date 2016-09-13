<?php 
session_start();
require_once "functions.php";
//Add a logout.php file. Use the clearSession() function from the examples in this lesson to perform a logout when that page is accessed and then redirect the user to the login page.
function clearSession(){
	//don't use the shortcut to log out, just do the whole process

	// clear $_SESSION array
    session_unset();

    // delete session data on the server
    session_destroy();

    // ensure client is sent a new session cookie
    session_regenerate_id();

    // start a new session - session_destroy() ended our previous session so
    // if we want to store any new data in $_SESSION we must start a new one
    session_start();
}

clearSession();

header("Location: /login.php");
die();
?>
