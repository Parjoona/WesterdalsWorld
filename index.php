<!-- Kallar på html, css & andra taggar -->
<?php
require 'head.php';
require 'header.php'
?>
<!-- Får allt under header til att vara centrert -->
<main id="mainContent">
    <!-- Håller på resturanger/barer "objects" -->
    <div id="content">
        <?php require 'underpages/welcomesplash.php'; ?>
    </div>
    <!-- Object som åker ut, håller på "messages" som folk skriver -->
    <?php require 'footer.php' ?>
