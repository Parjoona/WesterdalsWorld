<?php
foreach ($events as $event) {
    $event_id = json_decode($event['id']);
    echo('<div class="eventCon" id="box-con" data-id="' . $event_id . '"><div class="box-name">');
    echo $event['event_name'];

    foreach ($places as $place) {
        if ($place['id'] == $event['place_id']) {
            echo '</div><div class="box-img">';
            echo "<img srcset=\"{$place['img_url']}\" src='imgbin/alt_place.png'/>";
            echo '</div><div class="box-type">';
        }
    }
    echo '</div><div class="box-type">';
    echo $event['event_type'];
    echo '</div></div>';

}