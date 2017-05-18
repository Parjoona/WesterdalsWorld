<?php
require '../config.php';
session_start();
$comment = $_GET['comment'];
$name_connect = $_GET['place_name'];
$username_comment = $_SESSION['username'];

try {
    $sql = "INSERT INTO msg ( comment, name_connect, username_comment ) VALUES ( :comment, :name_connect, :username_comment )";
    $query = $conn->prepare($sql);
    $query->execute(array(':comment' => $comment, ':name_connect' => $name_connect, ':username_comment' => $username_comment));

    echo "New records created successfully";
} catch (PDOException $e) {
    echo $e->getMessage();
}

header('Location: '.'../index.php');