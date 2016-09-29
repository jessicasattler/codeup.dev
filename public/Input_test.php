<?php 
require_once "../Input.php";

$_REQUEST = [
	'somenumber' => '42',
	'notanumber' => 'forty two',
	'notastring' => ['1','2','3'],

];

var_dump(Input::getString('notanumber'));

var_dump(Input::getNumber('notanumber'));