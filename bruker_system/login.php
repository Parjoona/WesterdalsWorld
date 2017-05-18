<?php
require '../config.php';

$myusername = $_GET['bruker'];
$mypassword = $_GET['pass'];

$sql = "SELECT * FROM login WHERE username='$myusername' and password='$mypassword'";
$query = $conn->prepare($sql);
$query->execute(array(':username' => $myusername, ':password' => $mypassword));

if ($query->fetchColumn()) {
    $seconds = 120 + time();
    setcookie(loggedin, date("F jS - g:i a"), $seconds);
    header("location:../index.php");
} else {
    echo 'Incorrect Username or password. You will be redirected within 5 seconds.';
    header("refresh:5; url=../index.php");
}
