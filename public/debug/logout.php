<?php
require_once "functions.php";
session_start();

function pageController() {
    clearSession();
    redirect("login.php");
}
pageController();