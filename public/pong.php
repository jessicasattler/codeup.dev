<?php 
// require_once "functions.php";
require_once '../Input.php';

function pageController(){
	//this makes the counter continue
	$random = mt_rand (0,1);
	$counter = Input::get('count');
	//zach's way
	// function pageController(){
	// 	$count = Input::get ('count', 0);
	// 	return [
	// 	'count'=> $count,
	// 	];
	// }

	//null coalesce 
		if($random==1){
    		$counter += 1;
    		$currentStatus = "Current Hits: {$counter}";
		}else{
			$counter = 0;
			$currentStatus = "You Missed. GAME OVER!";
		}

// var_dump($_GET);

	return ['counter'=>$counter,
			'currentStatus'=>$currentStatus,
			];
}

extract(pageController());

 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title>Pong</title>
 	<link href="https://fonts.googleapis.com/css?family=Bungee+Shade" rel="stylesheet">
 	<link href="css/pong.css" rel="stylesheet">
 </head>
 <body>
 	<div class = "container">
 	<h1>PONG!</h1>
 	<h3><?= $currentStatus; ?> </h3>
 	<button><a href="ping.php?count=<?=$counter?>">SWING!</a></button>
 	</div>
 </body>
 </html>