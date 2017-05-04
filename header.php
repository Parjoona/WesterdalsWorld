<header>
    <!-- knappar venstre -->
    <a id="about" href="index.php">About us</a>
    <!-- LOGO -->
    <a href="index.php" id="logo"><h1>Studenterdals</h1></a>
    <!-- knappar hoyre -->
    <?php
    // If logged in or not
    if (1==0) {
        echo '<a id="profileButton">Profile</a>';
        echo '<a id="logOut">Log Out</a>';
    } else if (1==1) {
        echo '<a id="logIn">Log In</a>';
        echo '<a id="settings">Register</a>';
    }
    ?>
</header>