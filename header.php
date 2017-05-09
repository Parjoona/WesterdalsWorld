<header>
    <!-- knappar venstre -->
    <a id="about-btn" href="index.php">About us</a>
    <!-- LOGO -->
    <a href="index.php" id="logo"><h1>Studenterdals</h1></a>
    <!-- knappar hoyre -->
    <?php
    // If logged in or not
    if (1==0) {
        echo '<a id="profile-btn">Profile</a>';
        echo '<a id="logout-btn">Log Out</a>';
    } else if (1==1) {
        echo '<a id="login-btn">Log In</a>';
        echo '<a id="settings-btn">Register</a>';
    }
    ?>
</header>