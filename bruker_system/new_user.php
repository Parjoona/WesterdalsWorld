<?php
require '../config.php';

if (isset($_GET['username']) && isset($_GET['password'])) {
    $bruker = $_GET['username'];
    $pass = $_GET['password'];
    $epost = $_GET['email'];
    $fornavn = $_GET['first_name'];
    $etternavn = $_GET['last_name'];

    $sql = "INSERT INTO login ( username, password, email, first_name, last_name ) VALUES ( :username, :password, :email, :first_name, :last_name )";
    $query = $conn->prepare($sql);
    $query->execute(array(':username' => $bruker, ':password' => $password, ':email' => $epost, ':first_name' => $fornavn, ':last_name' => $etternavn));
    header("location:index.php");
}

require '../headunderpages.php';
?>
<body>
<?php require '../header.php'; ?>
<main id="content">
    <div id="addEvDiv">
        <form action="new_user.php" method="get">

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
