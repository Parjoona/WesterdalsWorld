<?php
include '../config.php';

$num = isset($_GET['data']) ? $_GET['data'] : '404 could not find page';

foreach ($places as $place) {
    if ($num == $place['id']) {
        echo $place['place_name'];
    }
}