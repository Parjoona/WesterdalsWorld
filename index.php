<?php
/**
 * Created by PhpStorm.
 * User: Pauma
 * Date: 2017-03-30
 * Time: 12:01
 */
session_start();
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>This is a title</title>
    <!-- Javascript -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="jsbin/script.js"></script>
    <!-- CSS stylesheet -->
    <link rel="stylesheet" href="cssbin/style.css">
</head>
<body>
<?php require 'header.php' ?>
<!-- Split med menu inni -->
<div id="menu">
    <ul id="ulmenu">
        <li class="active">All types</li>
        <li>Restaurants</li>
        <li>Hotels</li>
        <li>Bars</li>
    </ul>
</div>
<!-- Får allt under header til att vara centrert -->
<main id="mainContent">
    <!-- Håller på resturanger/barer "objects" -->
    <div id="content">
        <?php
        // if first time open welcome splash
        if (!isset($_COOKIE['welcome'])) {
            require 'underpages/welcomesplash.php';
            setcookie("welcome", "value", time() + 60 * 60 * 24 * 100, "/");
        }
        require 'underpages/places.php' ?>
    </div>
    <!-- Object som åker ut, håller på "messages" som folk skriver -->
    <div id="infoWindow">
        <!-- Closing knapp för message fönster -->
        <div id="closeButton"><p>CLOSE</p></div>
        <div id="infoContent">
        </div>
    </div>
    </div>
</main>
</body>
</html>
