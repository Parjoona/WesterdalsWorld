<?php
foreach ($events as $event) {
    $event_id = json_decode($event['id']);
    echo ('<div class="eventCon" id="boxContainer" data-id="' . $event_id . '"><div class="placeName">');
    echo $event['event_name'];
    echo '</div><div class="placeType">';
    echo $event['event_type'];
    echo '</div></div>';

}