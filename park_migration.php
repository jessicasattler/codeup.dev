<?php 
	define ("DB_HOST", "127.0.0.1");
	define ("DB_NAME", "parks_db");
	define ("DB_USER", "vagrant");
	define ("DB_PASS", "vagrant");
// Set up the connection parameters for parks_db and parks_user.- we do this when we require (db_connect.php);
require 'db_connect.php';

// Use exec() to delete a table named national_parks using DROP TABLE IF EXISTS

$query = "DROP TABLE IF EXISTS national_parks";

$dbc->exec($query);

// After the DROP TABLE command, add another exec() to create the table national_parks with the following fields:

//Update park_migration.php to include an additional column named description in the national_parks table (you may still use exec() for this step).

$query2 = 'CREATE TABLE national_parks (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  	name VARCHAR(50) NOT NULL,
  	location VARCHAR (100),
  	date_established date,
  	area_in_acres double,
  	description text NOT NULL,
    PRIMARY KEY (id)
)';

$dbc->exec($query2);