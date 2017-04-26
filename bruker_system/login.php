<?php
    $username = "root";
    $password = '';
    $hostname = "localhost";

    $dbhandle = mysql_connect($hostname, $username, $password) or die("Kunne ikke koble til databasen.");

    $selected = mysql_select_db("login", $dbhandle);

    $myusername = $_POST['bruker'];
    $mypassword = $_POST['pass'];
    
    $myusername = stripslashes($myusername);
    $mypassword = stripslashes($mypassword);

    $query = "SELECT * FROM brukere WHERE brukernavn='$myusername' and passord='$mypassword'";
    $result = mysql_query($query);
    $count = mysql_num_rows($result);

    mysql_close();
    
    if($count==1)
    {
        $seconds = 120 + time();
        setcookie(loggedin, date("F jS - g:i a"), $seconds);
        header("location:login_success.php");
    }
    else
    {
        echo 'Incorrect Username or password. You will be redirected within 5 seconds.';
        header("refresh:5; url=index.php");
    }
?>
