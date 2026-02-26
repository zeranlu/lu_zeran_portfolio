<?php

$host = 'localhost';
$username = 'root';
$password = '';
// '' For windows
// 'root'; if you're on a MAC
$db = 'db_portfolio_0225';

try {
    
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $username, $password);
    
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $error) {
    die("Connection error, reason for failure: " . $error->getMessage());
}

?>