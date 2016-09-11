<?php 
//Add a logout.php file. Use the clearSession() function from the examples in this lesson to perform a logout when that page is accessed and then redirect the user to the login page.
function clearSession(){
	//clear $_SESSION array
	session_unset();

	//delete session data on the server and send the client a new cookie
	session_regenerate_id(true);
}
session_start();

clearSession();

header("Location: /login.php");
die;
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 
 </body>
 </html>