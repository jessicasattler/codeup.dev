<?php 
session_start();
require_once "../Auth.php";
require_once "../Input.php";

Auth::logout();

header("Location: /login.php");
die();
?>
