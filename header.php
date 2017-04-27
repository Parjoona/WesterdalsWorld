<header>
    <!-- knappar venstre -->
    <a id="eventBtn">Eventer</a>
    <a id="restBtn">Resturanger</a>
    <!-- LOGO -->
    <h1 id="logo">WesterHood</h1>
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