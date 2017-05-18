<?php
require '../config.php';
session_start();

$myusername = $_GET['bruker'];
$mypassword = $_GET['pass'];

$query = "SELECT * FROM login WHERE username = :username AND password = :password";
$statement = $conn->prepare($query);
$statement->execute(
    array(
        'username' => $myusername,
        'password' => $mypassword
    )
);
$count = $statement->rowCount();

    if ($count > 0) {
        $_SESSION['username'] = $_GET['bruker'];
        header("location:../index.php");
    } else {
        $message = '<label>Wrong Data</label>';
    }
