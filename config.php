<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'db_username');
define('DB_PASSWORD', 'db_password');
define('DB_NAME', 'db_name');
 
/* Attempt to connect to MySQL database */
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if(!$conn){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
