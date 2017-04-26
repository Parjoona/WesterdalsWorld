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
    <!-- CSS stylesheet -->
    <link rel="stylesheet" href="cssbin/style.css">

</head>
<body>
<header>
    <!-- knappar venstre -->
    <a id="eventBtn">Eventer</a>
    <a id="restBtn">Resturanger</a>
    <!-- LOGO -->
    <h1 id="logo">Productname</h1>
    <!-- knappar hoyre -->
    <a id="settings">Settings</a>
    <a id="logOut">Log Out</a>
</header>
<!-- Split med menu inni -->
<div id="menu">
    <div class="menuElement"></div>
    <div class="menuElement"></div>
    <div class="menuElement"></div>
    <div class="menuElement"></div>
</div>
<!-- Får allt under header til att vara centrert -->
<main id="mainWindow">
    <!-- Håller på resturanger/barer "objects" -->
    <div id="content">
        <?php require 'contentRestaurant.php' ?>
    </div>
    <!-- Object som åker ut, håller på "messages" som folk skriver -->
    <div id="messageWindow">
        <!-- Closing knapp för message fönster -->
        <div id="closeButton" onClick="closeMessage()"><p>CLOSE</p></div>
        <div id="messInformation">
            <?php
                echo '<div id="messInfoName">';
                echo $place['place_name'];
                echo '</div>';
                echo "<img id='messInfoImg' srcset=\"{$place['img_url']}\" src='imgbin/alt_place.png'/>";
            ?>
        </div>
    </div>
</main>
</body>
</html>
