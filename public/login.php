<?php 
session_start();
require_once "../Auth.php";
require_once "../Input.php";

// require_once "functions.php";
// Add some PHP code to the top of the login page that checks the POST'ed username and password. If the username is equal to "guest" and the password is equal to "password" then redirect to the authorized.php. If the username and password do not match those values, show a login failed message on the login page.
function pageController(){

	if(Auth::check()){
		header("Location: /authorized.php");
		//die is just for the header, always have a die if you have a header
		die();
	}
	$showLogin = true;


//if the username field is equal to 'guest' and the password field is equal to 'password', then redirect the page to /authorized.php and exit, else, display login  failed
		Auth::attempt(Input::get('username'),Input::get('password'));
		
		if(Auth::check()){
			header("Location: /authorized.php");
			die();
		}

}

pageController();
?>


<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
	<title>Login</title>
	    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	    <link href="/css/form.css" rel="stylesheet">
</head>
<body>
	
	<div class="container">
<!-- Create a file named login.php in your codeup.dev site. Add a form that accepts a username and password and have the form submit to the same page (login.php). -->
		<form class= "form" method="POST">
			<div class= "form-group">
				<label>Username</label>
				<input type="text" name="username" class="form-control"><br>

			<label>Password</label>
			<input type="password" name="password" class="form-control"><br>
			<input type="submit" class="btn btn-block btn-primary">

			</div>
		</form>
</div>

</body>
</html>