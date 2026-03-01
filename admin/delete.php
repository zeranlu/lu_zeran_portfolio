<?php

spl_autoload_register(function ($class) {
    $class = str_replace('ZeranPortfolio\\', '', $class);
    $class = str_replace("\\", DIRECTORY_SEPARATOR, $class);
    $filepath = __DIR__ . '/../includes/classes/' . $class . '.php';
    $filepath = str_replace("/", DIRECTORY_SEPARATOR, $filepath);

    if (file_exists($filepath)) {
        require_once $filepath;
    }
});

use ZeranPortfolio\Database;
session_start();

if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: login.php');
    exit;
}

$database = new Database();
$id = $_GET['id'] ?? null;

// safety check and redirection
if (!$id) {
    header('Location: dashboard.php');
    exit;
}

// project deletion query code
$database->query('DELETE FROM tbl_case_studies WHERE case_study_id = :id', ['id' => $id]);

header('Location: dashboard.php');
exit;
?>