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
<html lang="sv">
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
    <!-- Venster del av header i et felt-->
    <div id="headerLeft">
        <div id="profilePicture"></div>
        <h1 id="profileName">First Name <br> Last Name</h1>
    </div>
    <!-- Håller produktnavn centrert -->
    <div id="headerCenter">
        <h1 id="productName">Product Name</h1>
    </div>
    <!-- Håller logout/settings till höyre -->
    <div id="headerRight">
        <a href="#">
            <div id="logOut"><h1>Log Out</h1></div>
        </a>
        <a href="#">
            <div id="settings"><h1>Settings</h1></div>
        </a>
    </div>
</header>
<!-- Split med menu inni -->
<div id="menuSpacer">


</div>
<!-- Får allt under header til att vara centrert -->
<main id="mainWindow">
    <!-- Håller på resturanger/barer "objects" -->
    <div id="content">
        <?php
        foreach ($places as $place) {
            echo '<div id="placeContainer" onClick="openMessage()"><div id="verticalLine"></div><div id="placeName">';
            echo $place['place_name'];
            echo '</div><div id="placeType">';
            echo $place['place_type'];
            echo '</div><div id="placeDistance">';
            echo $place['distance'];
            echo 'm</div><div id="imgHolder">';
            echo "<img srcset=\"{$place['img_url']}\" src='imgbin/alt_place.png'/>";
            echo '</div></div>';
        }
        ?>
    </div>
    <!-- Object som åker ut, håller på "messages" som folk skriver -->
    <div id="messageWindow">
        <!-- Closing knapp för message fönster -->
        <div id="closeButton" onClick="closeMessage()"><p>CLOSE</p></div>
    </div>
</main>
</body>
</html>
