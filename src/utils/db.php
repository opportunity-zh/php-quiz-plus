<?php

$db_host = getenv("DB_HOST");
$db_name = getenv("DB_NAME");
$db_user = getenv("DB_USER");
$db_pass = getenv("DB_PASSWORD");

$errorMessages = [];
$successMessages = [];

try {

    $dbConnection = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
    $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
    $msg = "Connected successfully";
    array_push($successMessages, $msg);
} catch (PDOException $e) {
    // echo $e->getMessage();
    $msg = $e->getMessage();
    array_push($errorMessages, $msg);
}
