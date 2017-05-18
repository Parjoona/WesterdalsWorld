<?php

require '../config.php';
$bruker = $_GET['username'];
$pass = $_GET['password'];
//$pass = password_hash($plainpassword, PASSWORD_DEFAULT);
$epost = $_GET['email'];
$fornavn = $_GET['first_name'];
$etternavn = $_GET['last_name'];

try {
    $thesql = "INSERT INTO login ( username, password, email, first_name, last_name ) VALUES ( :username, :password, :email, :first_name, :last_name )";
    $thequery = $conn->prepare($thesql);
    $thequery->execute(array(':username' => $bruker, ':password' => $pass, ':email' => $epost, ':first_name' => $fornavn, ':last_name' => $etternavn));
    header('location:logon.php');
} catch (Exception $ex) {
    echo 'Not connected' . $ex->getMessage();
}
