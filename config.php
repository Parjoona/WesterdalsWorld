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

$stmtplaces = $conn->prepare('SELECT * FROM places');
$stmtplaces->execute();
$places = $stmtplaces->fetchAll();

$stmtevents = $conn->prepare('SELECT * FROM events');
$stmtevents->execute();
$events = $stmtevents->fetchAll();