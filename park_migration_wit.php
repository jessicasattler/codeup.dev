<?php 

// Set up the connection parameters for parks_db and parks_user.- we do this when we require (db_connect.php);

define ("DB_HOST", "127.0.0.1");
define ("DB_NAME", "parks_db");
define ("DB_USER", "vagrant");
define ("DB_PASS", "vagrant");

require 'db_connect.php';

// Use exec() to delete a table named national_parks using DROP TABLE IF EXISTS

$query = "DROP TABLE IF EXISTS national_porks";

$dbc->exec($query);

// After the DROP TABLE command, add another exec() to create the table national_parks with the following fields:

$query2 = 'CREATE TABLE national_porks (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  	name VARCHAR(50) NOT NULL,
  	location VARCHAR (100),
  	date_established date,
  	area_in_acres double,
    PRIMARY KEY (id)
)';

$dbc->exec($query2);