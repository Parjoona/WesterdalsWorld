<?php
include 'config.php';

$numphp = isset($_GET['data']) ? $_GET['data'] : 'Nope';

foreach ($places as $place) {
    if ($numphp == $place['id']) {
        echo $place['place_name'];
    }
}