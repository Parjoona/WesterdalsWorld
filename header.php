<?php
session_start(); ?>
<header>
    <!-- knappar venstre -->
    <a id="about-btn" href="/~joopar16/Westerwhat/underpages/contactoform.php">Om oss</a>
    <!-- LOGO -->
    <a href="/~joopar16/Westerwhat/place.php" id="logo"><img id="lg-pic" class="img-1" src="/~joopar16/Westerwhat/imgbin/logo/23.png">
        <img id="lg-pic" class="rotationPicture img-2" src="/~joopar16/Westerwhat/imgbin/logo/23-1.png">
        <img id="lg-pic" class="rotationPicture img-3" src="/~joopar16/Westerwhat/imgbin/logo/23-2.png">
        <img id="lg-pic" class="rotationPicture img-4" src="/~joopar16/Westerwhat/imgbin/logo/23-3.png">
    </a>
    <!-- knappar hoyre -->
    <?php
    // If logged in or not
    if (isset($_SESSION['username'])) {
        echo '<p id="username_session">';
        echo $_SESSION['username'];
        echo '</p>';
        echo '<a id="profile-btn" href="/~joopar16/Westerwhat/bruker_system/user_settings.php">Passord</a>';
        echo '<a id="logout-btn" href="/~joopar16/Westerwhat/bruker_system/logout.php">Logg ut</a>';
    } else if (!isset($_SESSION['username'])) {
        echo '<a id="login-btn" href="/~joopar16/Westerwhat/bruker_system/logon.php">Logg inn</a>';
        echo '<a id="settings-btn" href="/~joopar16/Westerwhat/bruker_system/new_user.php">Registrer</a>';
    }
    ?>
</header>