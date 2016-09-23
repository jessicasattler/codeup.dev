<?php 
//this is the file that stays the same
//  be careful with spaces (no extra spaces)


// Get new instance of PDO object , configures to employees database:

$dbc = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME,DB_USER,DB_PASS);

// Tell PDO to throw exceptions on error
$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// echo out connection status
echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

//we should get 127.0.0.1 via TCP/IP if it connected succesfully



