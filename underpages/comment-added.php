<?php
require '../config.php';
$comment = $_GET['comment'];
$name_connect = $_GET['place_name'];

try {
    $sql = "INSERT INTO msg ( comment, name_connect ) VALUES ( :comment, :name_connect )";

    $query = $conn->prepare($sql);
    $query->execute(array(':comment' => $comment, ':name_connect' => $name_connect));

    echo "New records created successfully";
} catch (PDOException $e) {
    echo $e->getMessage();
}

header('Location: '.'../index.php');