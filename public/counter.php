<?php 
// Counter

// In this exercise we will be experimenting with sending single data values to a page. This will allow us to gain a better understanding of how data will be transmitted to our web-applications. Follow the specifications below to get started:

function pageController(){
	//this makes the counter continue
	$counter = isset($_GET['count']) ? $_GET['count'] : 0;
	//null coalesce 
	if(isset($_GET['key'])) {
    	$counter += $_GET['key'];
	} else {
    	$counter = 0;
	}
var_dump($_GET);

	return ['counter'=>$counter];
}

extract(pageController());
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 <!-- In your HTML, you will need two links. One that says up and another that says down.
Add a heading that shows a number representing the current counter value. This value will start at zero. When up is clicked, the counter value should increase; when down is clicked, it should decrease.
The up and down links will send GET requests back to the counter page itself.
 -->
 	<h3>The value is <?= $counter; ?> </h3>
 	<a href="counter.php?key=1&count=<?=$counter?>">Up</a>
 	<br>
 	<a href="counter.php?key=-1&count=<?=$counter?>">Down</a>

 





 
 </body>
 </html>