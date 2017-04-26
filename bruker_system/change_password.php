<?php
    $username = "root";
    $password = '';
    $hostname = "localhost";

    $dbhandle = mysql_connect($hostname, $username, $password) or die("Kunne ikke koble til databasen.");

    $selected = mysql_select_db("login", $dbhandle);
    
    if(isset($_POST['bruker']) && isset($_POST['pass']))
        {
            $gammeltPass = $_POST['gammeltPass'];
            $nyttPass1 = $_POST['nyttPass1'];
            $nyttPass2 = $_POST['nyttPass2'];

            $query = "UPDATE brukere SET `passord`='".md5($_POST['passwordnew1'])."' WHERE usr='{$_SESSION['usr']}'";
            if(mysql_num_rows($query) > 0)
            {
                echo 'test';
            }
            else
            {
                
            }
        }

?>
