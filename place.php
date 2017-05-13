<?php
session_start();
require 'config.php'; ?>
<!-- Kallar på html, css & andra taggar -->
<?php require 'head.php' ?>
<body>
<?php require 'header.php' ?>

<!-- Split med menu inni -->
<div id="menu">
    <ul id="ulmenu">
        <a href="place.php"><li class="active">Places</li></a>
        <a href="event.php"><li>Events</li></a>
    </ul>
</div>
<!-- Får allt under header til att vara centrert -->
<main id="mainContent">
    <blur></blur>
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
    <div id="info-win">
        <!-- Closing knapp för message fönster -->
        <div id="info-close-btn"><p>CLOSE</p></div>
        <div id="info-content">
        </div>
    </div>
    </div>
    </wrapper>
</main>
</body>