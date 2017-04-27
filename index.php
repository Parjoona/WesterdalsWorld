<?php
/**
 * Created by PhpStorm.
 * User: Pauma
 * Date: 2017-03-30
 * Time: 12:01
 */

include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>This is a title</title>
    <!-- Javascript -->
    <script type="text/javascript" src="jsbin/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <!-- CSS stylesheet -->
    <link rel="stylesheet" href="cssbin/style.css">
</head>
<body>
<?php require 'header.php' ?>
<!-- Split med menu inni -->
<div id="menu">
    <ul id="ulmenu">
        <li class="menuSelected">All types</li>
        <li class="">Restaurants</li>
        <li class="">Hotels</li>
        <li class="">Bars</li>
    </ul>
</div>
<!-- Får allt under header til att vara centrert -->
<main id="mainWindow">
    <!-- Håller på resturanger/barer "objects" -->
    <div id="content">
        <?php require 'conRestu.php' ?>
    </div>
    <!-- Object som åker ut, håller på "messages" som folk skriver -->
    <div id="messageWindow">
        <!-- Closing knapp för message fönster -->
        <div id="closeButton" onClick="closeMessage()"><p>CLOSE</p></div>
        <div id="messInfo">
            <?php require 'conInfo.php' ?>
        </div>
    </div>
</main>
</body>
</html>
