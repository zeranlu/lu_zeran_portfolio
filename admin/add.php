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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adding a New Project</title>
</head>
<body data-page="CMS">
    <h1>Add a New Project to Your Case Studies!</h1>
    
    <p><a href='dashboard.php'>Dashboard</a></p>

    <?php if ($message): ?>
        <p><?php echo $message; ?></p>
    <?php endif; ?>

    <form method="POST">
        <div>
            <label>
                Project Title:
            </label>
            <input type="text" name="project_title" value="<?php echo htmlspecialchars($title ?? ''); ?>" required>
        </div>

        <div>
            <label>
                Project Description:
            </label>
            <textarea name="project_desc" required><?php echo htmlspecialchars($desc ?? ''); ?></textarea>
        </div>

        <button class="btn" type="submit">Add Project</button>
    </form>
</body>
</html>