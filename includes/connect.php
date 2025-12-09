<?php

// create our connection to the database

$enviro = 'localhost';
$uname = 'root';
$password = ''; // For windows
// $password = 'root'; if you're on a MAC

$db = '#'; /* make sure to change to proper database name */

$connect = new mysqli($enviro, $uname, $password, $db); /*MySQLi is outdated right now, you will use a more up to date one next term */

if(mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error()); /* This is like an echo, except it's expecting certain placeholder value to be placed into it */
    exit();
} /*this check if everything is correctly called */



?>