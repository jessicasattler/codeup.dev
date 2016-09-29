<?php
// $errors = [];

// function throwsError()
// {
// 	throw new Exception("this is a bad function");

// }
// function doesStuff()
// {
// 	throwsErrors();
// }
// try {
// 	doesStuff();
// } catch (Exception $exception){

// }


// doesStuff();
// try {
// 	throwsErrors();
// }catch (Exception $exception){
// 	var_dump($exception->getTrace);
// }

$errors = [];

try {
	throw new Exception('$key needs to be a number');
}catch (Exception $exception){
	$errors[] = $exception->getMessage();
}

var_dump($errors);