<?php session_start(); ?>
<header>
    <!-- knappar venstre -->
    <a id="about-btn" href="/WesterdalsWorld/underpages/contactoform.php">About us</a>
    <!-- LOGO -->
    <a href="/WesterdalsWorld/index.php" id="logo"><h1>WesterWhat</h1></a>
    <!-- knappar hoyre -->
    <?php
    // If logged in or not
    if (isset($_SESSION['username'])) {
        echo '<a id="username_session">User : ';
        echo $_SESSION['username'];
        echo '</a>';
        echo '<a id="profile-btn" href="#">Profile</a>';
        echo '<a id="logout-btn" href="/WesterdalsWorld/bruker_system/logout.php">Log Out</a>';
    } else if (!isset($_SESSION['username'])) {
        echo '<a id="login-btn" href="/WesterdalsWorld/bruker_system/logon.php">Log In</a>';
        echo '<a id="settings-btn" href="/WesterdalsWorld/bruker_system/new_user.php">Register</a>';
    }
    ?>
</header>