<?php
$db_host = 'localhost';
$db_user = 'root';  
$db_pass = '';      
$db_name = 'db_portfolio_0225';

$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
?>