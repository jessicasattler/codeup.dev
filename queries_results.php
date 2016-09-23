<?php  

//fer's example

define("DB_HOST", "localhost"); //The IP address to connect to
define("DB_NAME", "parks_db");//The database to connect to
define("DB_USER", "parks_user");//The MySQL user to use
define("DB_PASS", "parks_user");//Password for the MySQL user

require_once("db_connect");

//create functions to call pageController use MVC

$stm = $dbc->query("SELECT * FROM national_parks;");

echo "Number of cols".$stm->columnCount()."<br>";
echo "Number of rows".$stm->rowCount()."<br>";

function getParks(){
	$stm = $dbc->query("SELECT * FROM national_parks;");
	$rows = $stm->fetchAll(PDO::FETCH_ASSOC);
	return $rows;
}

function getLocation($dbc){
		$stm = $dbc->query("SELECT location FROM national_parks");
		$rows = $stm->fetchAll(PDO::FETCH_ASSOC);
		return $rows;
}

	$parks = getParks($dbc);

	foreach($parks as $park){
		print_r($park);
		echo $park['name']." ".$park['location']." ".$park['date_established']." ".$park['area_in_acres'];
		echo "<br>";
	}

	//we will need to create a formula to do pagination so every time a button is clicked we get the next results

	extract (pageController($));

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
   <?= $var?>
</body>
</html>
