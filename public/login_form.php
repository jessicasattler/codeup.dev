<?php
    var_dump($_GET);
    var_dump($_POST);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
</head>
<body>


<!-- - build a login form, call it login_form.php
    - username or email input with placeholder
    - password input type
    - remember me check box -->
	<h2>Login Form</h2>

	<form method="GET" action="/login_form.php">
	<p>

		<label for="usernameoremail">Username or Email
		</label>
		<input id="usernameoremail" name="Username or Email" placeholder="Type username or email here">
	</p>
	<p>
		<label for="password">Password
		</label>
		<input id="password" name="password" placeholder="Type password here">

	</p>
		<label for="rememberme">Remember me?</label>
	<p>
		<button type="submit">Submit</button>
	</p>
	<p>
		<input type="checkbox" id="rememberme" name="rememberme" value="yes" checked>

	
		<label for="rememberme">Remember me?</label>

	</p>

	</form>
</body>
</html>


