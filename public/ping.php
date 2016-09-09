<?php 

function pageController(){
	//this makes the counter continue
	$random = mt_rand (0,1);
	$counter = isset($_GET['count']) ? $_GET['count'] : 0;
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
 	<title>Ping</title>
 	<link href="https://fonts.googleapis.com/css?family=Bungee+Shade" rel="stylesheet">
 	<link href="css/ping.css" rel="stylesheet">
 </head>
 <body>
 	<div class = "container">
 	<h1>PING!</h1>
 	<h3><?= $currentStatus; ?> </h3>
 	<button><a href="pong.php?count=<?=$counter?>">SWING!</a></button>
 	</div>
 </body>
 </html>