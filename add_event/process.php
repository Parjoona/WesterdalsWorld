<?php
require '../config.php';
error_log(print_r($_GET, true));
session_start();

var_dump($_GET);

$placenum = $_GET['placested'];
$title = $_GET['event_name'];
$type = $_GET['event_type'];
$time = $_GET['date_time'];
$bruker = $_SESSION['username'];
$descri = $_GET['description'];
$imgr = null;

try {
    $sql = 'INSERT INTO events(event_name,place_id,event_type,event_time,username_event,description,img_url) VALUES(:event_name,:place_id,:event_type,:event_time,:username_event,:description,:img_url)';
    $stmt = $conn->prepare($sql);
    $stmt->execute(array(':event_name' => $title,
        ':place_id' => $placenum,
        ':event_type' => $type,
        ':event_time' => $time,
        ':username_event' => $bruker,
        ':description' => $descri,
        ':img_url'=> $imgr));
} catch (PDOException $e) {
    echo $e->getMessage();
}

//header('Location: ' . '../event.php');