<?php
require '../config.php';
session_start();
$comment = $_GET['comment'];
$username_comment = $_SESSION['username'];
$placeid = $_GET['place_id'];
$eventid = $_GET['event_id'];

try {
    $sql = "INSERT INTO msg ( comment, username_comment, event_id, place_id ) VALUES ( :comment, :username_comment, :event_id, :place_id )";
    $query = $conn->prepare($sql);
    $query->execute(array(':comment' => $comment, ':username_comment' => $username_comment, ':event_id' => $eventid, ':place_id' => $placeid));

    echo "New records created successfully";
} catch (PDOException $e) {
    echo $e->getMessage();
}

header('Location: '.'../index.php');