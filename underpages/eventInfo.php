<?php
include '../config.php';

$num = isset($_GET['data']) ? $_GET['data'] : '404 could not find page';

foreach ($events as $event) {
    if ($num == $event['id']) {
        echo $event['event_name'];
    }
}