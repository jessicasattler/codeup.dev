<?php

// how to set key=>value pairs in the GET request
// GET request == download
// with a query string in an href
// literally type in the query string into the URL bar in your browser
// submit a form with the method attribute set to GET
// AJAX sending a GET request

$queryString = "city=san%20antonio&&min_price=60000&&max_price=80000";

$city = (isset($_GET['city'])) ? $_GET['city'] : 'no city provided';
$minPrice = (isset($_GET['min_price'])) ? $_GET['min_price'] : 0;

$counter = isset($_GET['count']) ? $_GET['count'] : 0;

// null coalesce
if(isset($_GET['something'])) {
    $value = $_GET['something'];
} else {
    $value = 'not defined';
}

var_dump($_GET);
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="">
</head>
<body>
    <h1><?= $value; ?></h1>

    <p>Searching for homes in <?= $city; ?> above the min price of <?= $minPrice; ?></p>
    <a href="get.php?city=las%20vegas&&min_price=2000000&&property_type=casino">Search for casinos in Las Vegas above 2,000,000</a>
    <br>
    <a href="get.php?city=<?= $city; ?>&min_price=<?= $minPrice; ?>&something=some_value">Example Anchor Tag with lots of PHP values in the href</a>
    <form action="#" method="GET">

        <input type="text" name="city" placeholder="input your city">
    </form>
</body>
</html>
