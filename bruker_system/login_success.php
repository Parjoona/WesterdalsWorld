<?php
    if(!isset($_COOKIE['loggedin']))
    {
        header("location:index.php");
    }
?>

    <html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>New HMTL document by NewJect</title>

    </head>

    <body>
        <h2>Velkommen!</h2>
        <p>Denne nettsiden kan kun besøkes om man har logget inn. <br/>Man er logget inn i 2 minutter.</p>
        <a href="logout.php">Logout</a>
    </body>

    </html>
