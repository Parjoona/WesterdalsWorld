<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>NETTSIDENAVN - Endre brukerdetlajer</title>

</head>

<body>

    <form action="change_passsword.php" method="post">
        <table>
            <tr>
                <th></th>
                <th>
                    <h2>Bytt Passord</h2>
                </th>
            </tr>

            <tr>
                <td>Gammelt passord :</td>
                <td><input type="text" name="gammeltPass"></td>
            </tr>

            <tr>
                <td>Nytt Passord :</td>
                <td><input type="password" name="nyttPass1"></td>
            </tr>
            <tr>
                <td>Nytt Passord :</td>
                <td><input type="password" name="nyttPass2"></td>
            </tr>


            <td></td>
            <td><input type="submit" value="Logg inn"></td>
        </table>
    </form>

</body>

</html>
