<?php  
// <!-- Use require to include db_connect.php. -->
require ('db_connect.php');

// <!-- Echo the PDO connection status -->
echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";