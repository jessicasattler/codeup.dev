<?php 
// Add a check to the authorized.php page to redirect to the login.php page if a user is not logged in. If they are, display their username after the authorized message.

//session_start() goes at the top of all pages
session_start();
require_once "functions.php";

function pageController(){	
//check to see if the user is not logged in
	if(!isset($_SESSION['logged_in_user'])){
		header("Location: /login.php");
		die();
	}
	$data = [];

	$data['logged_in_user'] = $_SESSION['logged_in_user'];

	return $data;
}

extract(pageController());
// require "session_auth.php";
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Authorized</title>
</head>
<body>
<h1>Authorized</h1>
<h2>Welcome <?php echo  escape($_SESSION['logged_in_user']) ?></h2>
<!-- Add a link to the authorized.php page that goes to logout.php. -->
<a href="/logout.php"><button>Logout Please</button></a>
</body>
</html>