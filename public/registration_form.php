<?php
    var_dump($_GET);
    var_dump($_POST);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>
	<!-- - build a registration form, name it registration_form.php
    - first name and last name inputs
    - email input
    - username
    - password
    - password confirmation
    - sign me up for the newsletter option, make sure this is checked by default
 -->
 	<h2>Registration Form</h2>

 	<form method="POST" action="/registration_form.php">
 	<p>
 		<label for="firstname">First name
 		</label>
 		<input id="firstname" name="firstname" type="text"
 			id="firstname" placeholder="Please type first name">
 	</p>
 	<p>
 		<label for="lastname">Last name
 		</label>
 		<input id="lastname" name="lastname" type="text" id="lastname" placeholder="Please type last name">
 	</p>
 	<p>
 		<label for="email input">Email
 		</label>
 		<input id="email input" name="email input" type="text" id="email input" placeholder="Please type email">
 	</p>
 	<p>
 		<label for="password">Password
 		</label>
 		<input id="password" name="password" type="text" id="password" placeholder="Please type password">
 	</p>
 	<p>
 		<label for="password confirmation">Password Confirmation
 		</label>
 		<input id="password confirmation" name="password confirmation" type="text" id="password confirmation" placeholder="Please confirm password">
 	</p>
 		<label for="newsletter">Sign me up for the newsletter!</label>
 		<input type="checkbox" id="newsletter" name="newsletter" value="yes" checked>
 		
 	</form>


</body>
</html>