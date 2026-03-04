<?php
    // turn this off for future, only okay for dev
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

    $db_host = 'localhost';
    // $db_user = 'root';
    $db_user = 'zeran195_zeranlu';
    // $db_pass = '';
    $db_pass = 'databasepass';
    // $db_name = 'db_portfolio_0225';
    $db_name = 'zeran195_db_portfolio_0225';

    $connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
    $errors = array();

    $fname = mysqli_real_escape_string($connection, $_POST['fname']);
    if ($fname == NULL) {
        $errors[] = "First name field is empty.";
    }

    $lname = mysqli_real_escape_string($connection, $_POST['lname']);
    if ($lname == NULL) {
        $errors[] = "Last name field is empty.";
    }

    $email = $_POST['email'];
    if ($email == NULL) {
        $errors[] = "Email field is empty.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "\"" . $email . "\" is not a valid email address.";
    }

    $message = mysqli_real_escape_string($connection, $_POST['message']);
    if ($message == NULL) {
        $errors[] = "Please type out a message.";
    }

    $errcount = count($errors);
    if ($errcount > 0) {
        $errmsg = array();
        for ($i = 0; $i < $errcount; $i++) {
            $errmsg[] = $errors[$i];
        }
        echo json_encode(array("errors" => $errmsg));
    } else {

    // combining fname and lname for db column

    $fullname = $fname . ' ' . $lname;

        $querystring = "INSERT INTO tbl_contact_form(contact_name, contact_email, contact_message) VALUES('$fullname', '$email', '$message')";

        $qpartner = mysqli_query($connection, $querystring);
        
        echo json_encode(array("message" => "Form submitted. Thank you for your interest!"));
    }
?>