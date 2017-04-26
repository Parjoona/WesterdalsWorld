<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>NETTSIDENAVN innlogging</title>

</head>

<body>


    <form action="login.php" method="post">
        <table>
            <tr>
                <th></th>
                <th>
                    <h2>Innlogging</h2>
                </th>
            </tr>

            <tr>
                <td>Brukernavn :</td>
                <td><input type="text" name="bruker"></td>
            </tr>

            <tr>
                <td>Passord :</td>
                <td><input type="password" name="pass"></td>
            </tr>


            <td></td>
            <td><input type="submit" value="Logg inn"></td>
        </table>
    </form>



    <a href="new_user.php">Registrer deg!</a>
</body>

</html>
