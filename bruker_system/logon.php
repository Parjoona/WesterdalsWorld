<?php
require '../headunderpages.php';
require '../header.php';
?>
<main id="content">
    <div id="logreg">
        <form action="login.php" method="get">
            <h2>Innlogging</h2>
            Brukernavn :
            <input type="text" name="bruker" required>
            Passord :
            <input type="password" name="pass" required>
            <input type="submit" value="Logg inn">
        </form>
    </div>
<?php require '../footer.php' ?>