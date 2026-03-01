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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editing a Case Study</title>

    <link rel="stylesheet" href="CMSstyle.css">
</head>
<body data-page="CMS">
    <h1>Case Study Editor</h1>
    <p><a href='dashboard.php'>Dashboard</a></p>

    <h2>Editing Current Project: <?php echo htmlspecialchars($project['project_title']); ?></h2>

    <form method="POST">
        <div>
            <label>
                Updated Project Title: 
            </label>
            <input type="text" name="project_title" value="<?php echo htmlspecialchars($title); ?>" required>
        </div>

        <div>
            <label>
                Updated Project Description: 
            </label>
            <textarea name="project_desc" required><?php echo htmlspecialchars($desc); ?></textarea>
        </div>

        <button class="btn" type="submit">Update the Project</button>
    </form>
</body>
</html>