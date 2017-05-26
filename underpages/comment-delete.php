<?php
require '../config.php';

$num = isset($_GET['data']) ? $_GET['data'] : '404 could not find page';

foreach ($msgs as $msg) {
    if ($num == $msg['id']) {
        $sql = "DELETE FROM msg WHERE id=$num";
        $conn->exec($sql);
    }
}

header('Location: '.'../place.php');