<?php  
// <!-- Use require to include db_connect.php. -->

define ("DB_HOST", "127.0.0.1");
define ("DB_NAME", "employees");
define ("DB_USER", "vagrant");
define ("DB_PASS", "vagrant");

require ('db_connect.php');

// <!-- Echo the PDO connection status -->
echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";