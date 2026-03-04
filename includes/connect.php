<?php
$db_host = 'localhost';
// $db_user = 'root';  
$db_user = 'zeran195_zeranlu';
// $db_pass = ''; 
$db_pass = 'databasepass';     
// $db_name = 'db_portfolio_0225';
$db_name = 'zeran195_db_portfolio_0225';

$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

<!-- zeran195_zeranlu -->
<!-- databasepass -->