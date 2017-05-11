<?php
foreach ($events as $event) {
    $event_id = json_decode($event['id']);
    echo ('<div class="eventCon" id="box-con" data-id="' . $event_id . '"><div class="box-name">');
    echo $event['event_name'];
    echo '</div><div class="box-type">';
    echo $event['event_type'];
    echo '</div></div>';

}