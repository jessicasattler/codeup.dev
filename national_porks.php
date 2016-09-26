<?php 
// function pageController(){
	// <!-- Use require to include db_connect.php. -->

	define ("DB_HOST", "127.0.0.1");
	define ("DB_NAME", "parks_db");
	define ("DB_USER", "vagrant");
	define ("DB_PASS", "vagrant");


	require_once 'db_connect.php';

	//give us PDOStatement instance with all the information from national_parks table, this is the command we want to pass to MySQL
	$infoToGet = 'SELECT * FROM national_parks'

	//We store the information from the query method where we're getting back the PDOStatement so we return an instance of the PDOStatement class (different data type)

	//$dbc is like the mail man
	//$statement is the actual mail, we can open the mail, not the mail mans
	$statement = $dbc->query($infoToGet);

	//The FETCH_ASSOC returns a two dimensional associative array
	$allColumns = $statement-> fetchAll(PDO::FETCH_ASSOC);

	print_r ($allColumns);

	// return ['egg' => $allColumns];

// }
// extract(pageController());
?>
 <!-- <!DOCTYPE html>
 <html>
 <head>
 	<title>National Parks</title>
 </head>
 <body>
 		<?= $allColumns ?>
 </body>
 </html> -->