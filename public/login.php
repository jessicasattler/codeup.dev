<?php 
session_start();
require_once "functions.php";
// Add some PHP code to the top of the login page that checks the POST'ed username and password. If the username is equal to "guest" and the password is equal to "password" then redirect to the authorized.php. If the username and password do not match those values, show a login failed message on the login page.
function pageController(){

	if(isset($_SESSION['logged_in_user'])){
		header("Location: /authorized.php");
		//die is just for the header, always have a die if you have a header
		die();
	}
	$showLogin = true;
//if the username field doesn't exist, then set them equal to empty strings so we don't get an error message saying this value doesn't exist when we load the page
	if(!(inputHas('username'))){
		$_POST['username']="";

		$showLogin = false;
	}
//if the password field doesn't exist, then set them equal to empty strings so we don't get an error message saying this value doesn't exist when we load the page
	if(!(inputHas('password'))){
		$_POST['password']="";
	}
//if the username field is equal to 'guest' and the password field is equal to 'password', then redirect the page to /authorized.php and exit, else, display login  failed
	if((inputGet('username') === 'guest') && (inputGet('password') === 'password')){
		$_SESSION['logged_in_user']= inputGet('username');
		header("Location: /authorized.php");
		die;
	}else{

		if($showLogin){
			echo "LOGIN FAILED";	
		}
	}

	return [];

}

extract(pageController());
?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
<!-- Create a file named login.php in your codeup.dev site. Add a form that accepts a username and password and have the form submit to the same page (login.php). -->
<form method="POST">
	<label>Username</label>
	<input type="text" name="username"><br>
	<label>Password</label>
	<input type="password" name="password"><br>
	<input type="submit">
</form>

</body>
</html>