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

$database = new Database();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
</head>
<body data-page="CMS">

    <h1>Admin Login</h1>

    <?php

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $results = $database->query('SELECT * FROM tbl_admins WHERE username = :username', ['username' => $username]);
        $user = $results[0] ?? null;

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['admin_logged_in'] = true;
            $_SESSION['admin_user'] = $user;
            header('Location: dashboard.php');
            exit;
        } else {
            $error = "Invalid login information";
        }
    }
    ?>


    <?php if (isset($error)): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>


    <form method="POST">
        <div>
            Username: <input type="text" name="username" value="zeranlu" required>
        </div>
        <div>
            Password: <input type="password" name="password" required>
        </div>
        <button type="submit">Login to Dashboard</button>
    </form>
    
</body>
</html>