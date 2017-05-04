<header>
    <!-- knappar venstre -->
    <a id="placeBtn" href="index.php">Places</a>
    <a id="eventBtn" href="event.php">Eventer</a>
    <!-- LOGO -->
    <h1 id="logo">Studenterdals</h1>
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