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
$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['project_title'];
    $desc = $_POST['project_desc'];

    $database->query(
        'INSERT INTO tbl_case_studies (project_title, project_desc) VALUES (:title, :desc)',
        ['title' => $title, 'desc' => $desc]
    );

    $message = 'Added a project title and description';
    $title = '';
    $desc = '';
}

?>