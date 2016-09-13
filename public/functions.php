<?php 
//returns true or false based on wether the key is available
function inputHas($key){
	//check if $_REQUEST['key'] isset
	//checks to see if $_REQUEST has a key/value pair
	//return true if the $key is set on $_REQUEST
	//else return if it isn't
	if(isset($_REQUEST[$key])){
		return true;
	}else{
		return false;
	}
};

//returns the value specified by the key, or null if they key is not set
function inputGet($key){
	if (inputHas($key)) {
		return $_REQUEST[$key];
	}else{
		return NULL;
	}
	//return the value specified by the key
	//or return null if the key is not set

};

//returns the input as a safely escaped string
function escape($input){
	return htmlspecialchars(strip_tags($input));

};

//require the functions I created in place of accessing $_GET or $_POST directly in ping/pong and user login lessons from PHP with HTML. Also use the escape function anywhere you need the echo user input. 

 ?>