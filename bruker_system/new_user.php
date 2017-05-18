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
    <div id="centerRelative">
<form action="new_user.php" method="get">
    <table>
        <tr>
            <th></th>
            <th>
                <h2>Lag ny bruker</h2>
            </th>
        </tr>

        <tr>
            <td>Brukernavn :</td>
            <td><input type="text" name="username"></td>
        </tr>

        <tr>
            <td>Passord :</td>
            <td><input type="password" name="password"></td>
        </tr>

        <tr>
            <td>Epost:</td>
            <td><input type="text" name="email"></td>
        </tr>

        <tr>
            <td>Fornavn :</td>
            <td><input type="text" name="first_name"></td>
        </tr>
        <tr>
            <td>Etternavn :</td>
            <td><input type="text" name="last_name"></td>
        </tr>
        <td></td>
        <td><input type="submit" value="Registrer"></td>
    </table>
</form>
</div>
</main>
</wrapper>
</body>
</html>
