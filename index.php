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
    <h1 id="logo">WesterHood</h1>
    <!-- knappar hoyre -->
    <?php
    // If logged in or not
    if (1==0) {
        echo '<a id="profileButton">Profile</a>';
        echo '<a id="logOut">Log Out</a>';
    } else if (1==1) {
        echo '<a id="logIn">Log In</a>';
        echo '<a id="settings">Register</a>';
    }
    ?>
</header>
<!-- Split med menu inni -->
<div id="menu">
    <div class="menuElement"><p>Alla typer</p></div>
    <div class="menuElement"><p>Barer</p></div>
    <div class="menuElement"><p>Utested</p></div>
    <div class="menuElement"><p>Resturanger</p></div>
</div>
<!-- Får allt under header til att vara centrert -->
<main id="mainWindow">
    <!-- Håller på resturanger/barer "objects" -->
    <div id="content">
        <?php require 'contentRestaurant.php'?>
    </div>
    <!-- Object som åker ut, håller på "messages" som folk skriver -->
    <div id="messageWindow">
        <!-- Closing knapp för message fönster -->
        <div id="closeButton" onClick="closeMessage()"><p>CLOSE</p></div>
        <div id="messInformation">

        </div>
    </div>
</main>
</body>
</html>
