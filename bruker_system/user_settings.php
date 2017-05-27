<?php
require '../headunderpages.php';
require '../header.php';
?>

<main id="content">
    <div id="logreg">
        <form action="change_passsword.php" method="post">
            <h2>Bytt passord</h2>
            Gammelt passord :<input type="text" name="gammeltPass">
            Nytt passord :
            <input type="password" name="nyttPass1">
            Nytt Passord :
            <input type="password" name="nyttPass2">
            <input type="submit" value="Endre">
        </form>
    </div>
    <?php require '../footer.php' ?>
