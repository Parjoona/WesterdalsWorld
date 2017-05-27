<?php
require 'config.php';
require 'head.php';
require 'header.php'
?>

<!-- Split med menu inni -->
<div id="menu">
    <ul id="ulmenu">
        <a href="place.php"><li class="active">Hvor</li></a>
        <a href="event.php"><li>Hva</li></a>
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
<?php require 'footer.php' ?>