<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'includes/classes/Database.php';
use ZeranPortfolio\Database;

$database = new Database();

$case_study_id = $_GET['case_study_id'];

$project = $database->query(
    "SELECT * FROM tbl_case_studies WHERE case_study_id = :id", ['id' => $case_study_id]
)[0];

?>