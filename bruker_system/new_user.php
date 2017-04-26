<?php
    $username = "root";
    $password = '';
    $hostname = "localhost";

    $dbhandle = mysql_connect($hostname, $username, $password) or die("Kunne ikke koble til databasen.");

    $selected = mysql_select_db("login", $dbhandle);
    
    if(isset($_POST['bruker']) && isset($_POST['pass']))
    {
        $bruker = $_POST['bruker'];
        $pass = $_POST['pass'];
        $epost = $_POST['epost'];
        $fornavn = $_POST['fornavn'];
        $etternavn = $_POST['etternavn'];
        
        $query = mysql_query("SELECT * FROM brukere WHERE brukernavn='$bruker'");
        if(mysql_num_rows($query) > 0)
        {
            echo 'Brukernavnet er allerede i bruk.';
        }
        else
        {
            mysql_query("INSERT INTO brukere (brukernavn, passord, epost, fornavn, etternavn) VALUES ('$bruker', '$pass', '$epost', '$fornavn', '$etternavn')");
            header("location:index.php");
        }
    }

    mysql_close();
?>

    <html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>NETTSIDENAVN - Lag ny bruker</title>

    </head>

    <body>


        <form action="new_user.php" method="post">
            <table>
                <tr>
                    <th></th>
                    <th>
                        <h2>Lag ny bruker</h2>
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

                <tr>
                    <td>Epost:</td>
                    <td><input type="text" name="epost"></td>
                </tr>

                <tr>
                    <td>Fornavn :</td>
                    <td><input type="text" name="fornavn"></td>
                </tr>
                <tr>
                    <td>Etternavn :</td>
                    <td><input type="text" name="etternavn"></td>
                </tr>
                <td></td>
                <td><input type="submit" value="Registrer"></td> 
            </table>
        </form>
        <a href="index.php">Tilbake til forsiden</a>
    </body>

    </html>
