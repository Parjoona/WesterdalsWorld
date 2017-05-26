<?php
require '../headunderpages.php';
?>
<?php require '../header.php'; ?>
<main id="content">
    <div id="logreg">
        <form action="add_user.php" method="get">
            <h2>Lag ny bruker</h2>
            Brukernavn :
            <input type="text" name="username" required>
            Passord :
            <input type="password" name="password" required>
            Epost:
            <input type="text" name="email" required>
            Fornavn :
            <input type="text" name="first_name" required>
            Etternavn :
            <input type="text" name="last_name" required>
            <input type="submit" value="Registrer">
        </form>
    </div>
</main>
</wrapper>
</body>
</html>
