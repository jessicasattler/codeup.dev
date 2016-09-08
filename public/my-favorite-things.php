<?php 

function pageController(){
//Create an array of your favorite things. This array should contain at least five things.
// $favoriteThings = ['family','pets','ice cream','fridays','movie nights'];

	//Initialize an empty data array.
	$data = array();

	//Add data to be used in the html view.
	$data['favoriteThings'] = [
	'family',
	'pets',
	'ice cream',
	'fridays',
	'movie nights'
	];


	//Return the completed data array.
	return $data;

}

//Call the pageController function and extract all the returned array as local variables. 
extract(pageController());

//only use echo, conditionals, and loops anywhere within the HTML
 ?>



 <!DOCTYPE html>
 <html>
 <head>
 	<title>My Favorite Things</title>
 	<style>
 		.striped{
 			background-color: grey;
 			color: white;
 		}
 	</style>
 </head>
 <body>
 	<h3>My Favorite Things</h3>
 	<ul>
 <!-- 	make every other item list be grey -->

 	<?php foreach($favoriteThings as $key => $thing): ?>
 		<?php if($key % 2 == 0): ?>
 		<!-- echoes in the things -->
			<li class = "striped"><?=ucfirst($thing);?></li>
		<?php else : ?>
			<li><?= ucfirst($thing); ?></li>
		<?php endif; ?>
	<?php endforeach; ?>

 	</ul>

 </body>
 </html>

