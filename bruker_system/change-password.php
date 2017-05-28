<?php
require '../config.php';
session_start();


$name = $_SESSION['username'];
$stment = $conn->prepare("SELECT username FROM login WHERE username='{$name}'");
$stment->execute();
$row = $stment->fetch();
try {
    $gammeltPass = $_GET['gammeltPass'];
    $nyttPass1 = $_GET['nyttPass1'];
    $nyttPass2 = $_GET['nyttPass2'];

    $sqlupdate = "UPDATE login SET password='{$nyttPass1}' WHERE username='{$name}'";
    $sqlquery = $conn->prepare($sqlupdate);
    $sqlquery->execute();
    header('Location: '.'../place.php');

} catch (PDOException $e) {
    echo $e->getMessage();
}
