<?php
require '../headunderpages.php';
?>
<body>
<?php require '../header.php'; ?>
<main id="content">
    <div id="logreg">
        <form action="add_user.php" method="get">
            <h2>Lag ny bruker</h2>
            Brukernavn :
            <input type="text" name="username">
            Passord :
            <input type="password" name="password">
            Epost:
            <input type="text" name="email">
            Fornavn :
            <input type="text" name="first_name">
            Etternavn :
            <input type="text" name="last_name">
            <input type="submit" value="Registrer">
        </form>
    </div>
</main>
</wrapper>
</body>
</html>
