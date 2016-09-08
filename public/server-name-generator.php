<?php 

function RandomElement($array){
	//returns random $key (or index) from an array 
	$key = array_rand($array);
	//inputs result of key to return the value stored in that key
	$word = $array[$key];
	return $word;
}

function pageController(){
	//create two arrays: one containing 10 adjectives, another containing 10 nouns

	$adjectives = ['elegant','splendid','marvelous','pleasing','stunning','angelic','cute','dazzling','fascinating', 'charming'];

	$nouns = ['bird','cat','dog','castle','house','truck','grape','apple','grandmother','park'];

	//create a function that will return a random element from an array


	//stores random adjective


	$describe = RandomElement($adjectives);
	//stores random noun
	$personPlaceThing = RandomElement($nouns);

	$serverName = ucfirst($describe)." ".ucfirst($personPlaceThing);






	//Add data to be used in the html view.

	return ['serverName'=> $serverName];

}

extract(pageController());
 ?>

<!--  Create a function that returns the string value of our new server name made by combining a random adjective with a random noun. -->
<!-- Each time you refresh the page a different result should be displayed.
Make sure you have fun with it. Add CSS to make it fancy. -->
<!DOCTYPE html>
<html>
<head>
	<title>Server Name Generator</title>
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
	<link href="css/serverstyle.css" rel="stylesheet">

</head>
<body>
	<div id="container">
		<h1><?php echo $serverName ?></h1>
	</div>
</body>
</html>