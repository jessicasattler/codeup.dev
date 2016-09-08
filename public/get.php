<?php  

echo $_SERVER['QUERY_STRING'];

$queryString = "city=san%20antonio&&min_price=600000&&max_price=80000"
//the previous code is essentially saying this
// $_GET['city'] = "san antonio";
// $_GET['min_price'] = "60000";
// $_GET['min_price'] = "80000";

$city = (isset($_GET['city'])) ? $_GET['city'] : 'no city provided';
// $minPrice= (isset($_GET['min_price'])) ? $_GET

 //how to set key=> value pairs in the GET request
//with a query string in an href
//literally type in the query string into the URL bar in your browser
//submit a form with the method attribute set to GET
//AJAX sending a GET request

//nul coalesce is needed for the counter and the ping pong
//is there a value there? give me a value to assign there, or else default to another message
if(isset($_GET['something'])){
	$value = $_GET['something'];
}else{
	$value = 'not defined';
}

var_dump($_GET);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1><?= $value; ?></h1>
	<p>Searching for homes in <?= $city;?> above the min price of <?=$minPrice; ?></p>

</body>
</html>