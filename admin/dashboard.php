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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio CMS - Zeran Lu</title>
</head>
<body>
    <h1>The Portfolio Dashboard</h1>
    
    <p>Welcome,  <?php echo $_SESSION['admin_user']['username']; ?>!

    <a href='login.php?logout=1'>Logout</a></p>

    <p><a href='add.php'>Add a new project!</a></p>

    <?php

    $projects = $database->query('SELECT * FROM tbl_case_studies ORDER BY case_study_id DESC');

    if (!empty($projects)) {
        echo "<h2>Total Projects: " . count($projects) . "</h2>";

        foreach ($projects as $project) {
            echo "<div style='border: 1px solid black; margin: 1rem; padding: 1rem;'>";
            echo "<h3>" . $project['project_title'] . "</h3>";
            echo "<p>" . $project['project_desc'] . "</p>";
            echo "<a href='edit.php?id=" . $project['case_study_id'] . "'>Edit this project</a>";
            echo "</div>";
        } 
    } else {
            echo "<p>Empty projects section. <a href='add.php'>Please add some more here</a></p>";
        }
    ?>
    
</body>
</html>