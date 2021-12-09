<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '12345678');
define('DB_NAME', 'demo_car');
 

$conn1 = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($conn1 === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
else
//echo "connect succress";
?>