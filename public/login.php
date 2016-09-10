<?php 
// Add some PHP code to the top of the login page that checks the POST'ed username and password. If the username is equal to "guest" and the password is equal to "password" then redirect to the authorized.php. If the username and password do not match those values, show a login failed message on the login page.


var_dump($_POST);
$showLogin = true;
//if the username field doesn't exist, then set them equal to empty strings so we don't get an error message saying this value doesn't exist when we load the page
if(!(isset($_POST['username']))){
	$_POST['username']="";

	$showLogin = false;
}
//if the password field doesn't exist, then set them equal to empty strings so we don't get an error message saying this value doesn't exist when we load the page
if(!(isset($_POST['password']))){
	$_POST['password']="";
}
//if the username field is equal to 'guest' and the password field is equal to 'password', then redirect the page to /authorized.php and exit, else, display login  failed
if(($_POST['username'] == 'guest')&& ($_POST['password'] == 'password')){
	header("Location: /authorized.php");
	//why do we "die"?
	die;
}else{

	if($showLogin){
		echo "LOGIN FAILED";	
	}
}
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