<?php
    require '../config.php';
    if(isset($_POST['bruker']) && isset($_POST['pass']))
        {
            $gammeltPass = $_POST['gammeltPass'];
            $nyttPass1 = $_POST['nyttPass1'];
            $nyttPass2 = $_POST['nyttPass2'];

            $query = "UPDATE brukere SET `passord`='".md5($_POST['passwordnew1'])."' WHERE usr='{$_SESSION['usr']}'";
            if($query->fetchColumn())
            {
                echo 'test';
            }
            else
            {
                
            }
        }

?>
