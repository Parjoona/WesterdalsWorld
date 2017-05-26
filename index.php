<!-- Kallar på html, css & andra taggar -->
 <?php require 'head.php'; ?>
<body>
<?php require 'header.php' ?>

<!-- Split med menu inni -->
<div id="menu">
    <ul id="ulmenu">
        <a href="place.php"><li>Places</li></a>
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
        if (!isset($_SESSION['welcome'])) {
            $_SESSION['welcome'] = 'value';
            require 'underpages/welcomesplash.php';
        }
        ?>
        <p style="left: 0; right: 0; text-align: center; top: 50px;">Trykk for å starte</p>
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

