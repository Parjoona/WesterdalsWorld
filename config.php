<?php

$host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'westerproject';
$db_port = 3306;

// $conn = mysqli_connect("$host",$db_user,$db_pass,$db_name,$db_port);
try {
    $conn = new PDO('mysql:host=localhost;dbname=westerproject',$db_user,$db_pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $ex) {
    echo 'Not connected'.$ex->getMessage();
}
// Sätter igång databasen vid namn westerproject,
// använder sig av kollonen places.

$stmt = $conn->prepare('SELECT * FROM places');
$stmt->execute();
$places = $stmt->fetchAll();