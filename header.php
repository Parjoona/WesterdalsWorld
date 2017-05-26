<?php session_start(); ?>
<header>
    <!-- knappar venstre -->
    <a id="about-btn" href="/~joopar16/Westerwhat/underpages/contactoform.php">About us</a>
    <!-- LOGO -->
    <a href="/~joopar16/Westerwhat/index.php" id="logo"><img id="lg-pic" src="/~joopar16/Westerwhat/imgbin/logo/23.png"></a>
    <!-- knappar hoyre -->
    <?php
    // If logged in or not
    if (isset($_SESSION['username'])) {
        echo '<p id="username_session">';
        echo $_SESSION['username'];
        echo '</p>';
        echo '<a id="profile-btn" href="/~joopar16/Westerwhat/bruker_system/user_settings.php">Profile</a>';
        echo '<a id="logout-btn" href="/~joopar16/Westerwhat/bruker_system/logout.php">Log Out</a>';
    } else if (!isset($_SESSION['username'])) {
        echo '<a id="login-btn" href="/~joopar16/Westerwhat/bruker_system/logon.php">Log In</a>';
        echo '<a id="settings-btn" href="/~joopar16/Westerwhat/bruker_system/new_user.php">Register</a>';
    }
    ?>
</header>