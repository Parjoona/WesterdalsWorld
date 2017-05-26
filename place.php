<?php
require 'config.php'; ?>
<!-- Kallar på html, css & andra taggar -->
<?php require 'head.php' ?>
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
    <!-- Håller på resturanger/barer "objects" -->
    <div id="content">
        <?php require 'underpages/places.php' ?>
    </div>
    <!-- Object som åker ut, håller på "messages" som folk skriver -->
    <div id="info-win">
        <!-- Closing knapp för message fönster -->
        <div id="info-close-btn"><p>LUKK</p></div>
        <div id="info-content"></div>
    </div>
</main>
</wrapper>
</body>