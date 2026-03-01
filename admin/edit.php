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

if (!$id) {
    header('Location: dashboard.php');
    exit;
}

// query for current selected project
$projects = $database->query('SELECT * FROM tbl_case_studies WHERE case_study_id = :id', ['id' => $id]);
$project = $projects[0] ?? null;

if (!$project) {
    header('Location: dashboard.php');
    exit;
}

$title = $project['project_title'];
$desc = $project['project_desc'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = trim($_POST['project_title']);
    $desc = trim($_POST['project_desc']);

    // SQL code for updating title and description depending on specified ID
    $database->query('UPDATE tbl_case_studies SET project_title = :title, project_desc = :desc WHERE case_study_id = :id', ['title' => $title, 'desc' => $desc, 'id' => $id]);

    header('Location: dashboard.php');
    exit;
}
?>
