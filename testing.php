<?php require_once 'includes/connect.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Case Studies - Zeran Lu Portfolio</title>
    <link type="text/css" href="css/main.css" rel="stylesheet">
    <link type="text/css" href="css/grid.css" rel="stylesheet">

    <!--GreenSock Connections-->
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.14.1/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.14.1/dist/SplitText.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.14.1/dist/ScrollToPlugin.min.js"></script>
        
    <!--JS Modules-->
    <script type="module" defer src="js/main.js"></script>
</head>
<body data-page="case-study">

    <main>
        <h1>Case Study of Projects</h1>


        <?php

        $projects = $pdo->query("SELECT * FROM tbl_case_studies ORDER BY case_study_id DESC");

        while ($project = $projects->fetch(PDO::FETCH_ASSOC)) {
            echo "<h2>" . $project['project_title'] . "</h2>";

            echo "<p>" . $project['project_desc'] . "</p>";
        }
        ?>
        
    </main>
</body>
</html>