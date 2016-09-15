<?php 
// Add a check to the authorized.php page to redirect to the login.php page if a user is not logged in. If they are, display their username after the authorized message.

//session_start() goes at the top of all pages
session_start();
require_once "../Auth.php";
require_once "../Input.php";
// require_once "functions.php";

function pageController(){	
//check to see if the user is not logged in
	if(!Auth::check()){
		header("Location: /login.php");
		die();
	}

}

pageController();
// require "session_auth.php";
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Authorized</title>
</head>
<body>
<h1>Authorized</h1>
<h2>Welcome <?php echo  htmlspecialchars(strip_tags(Auth::user())) ?></h2>
<!-- Add a link to the authorized.php page that goes to logout.php. -->
<a href="/logout.php"><button>Logout Please</button></a>
</body>
</html>