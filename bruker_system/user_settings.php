<!DOCTYPE html>
<html>
<?php require '../headunderpages.php' ?>
<body>
<?php require '../header.php' ?>

<main id="content">
    <div id="logreg">
<form action="change_passsword.php" method="post">
    <h2>Bytt Passord</h2>
    Gammelt passord :<input type="text" name="gammeltPass">
    Nytt Passord :
    <input type="password" name="nyttPass1">
    Nytt Passord :
    <input type="password" name="nyttPass2">
    <input type="submit" value="Logg inn">
</form>
    </div>
</main>
</wrapper>
</body>

</html>
