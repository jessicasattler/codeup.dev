<?php

$errors = [];

try {
	throw new Exception('$key needs to be a number');
}catch (Exception $exception){
	$errors[$key] = $exception->getMessage();
}

var_dump($errors);