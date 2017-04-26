<?php
foreach ($places as $place) {
    $place_id = $place['id'];
    echo "<div id='placeContainer' onClick='openMessage()'><div id='verticalLine'></div><div id='placeName'>";
    echo $place['place_name'];
    echo '</div><div id="placeType">';
    echo $place['place_type'];
    echo '</div><div id="placeDistance">';
    echo $place['distance'];
    echo 'm</div><div id="imgHolder">';
    echo "<img srcset=\"{$place['img_url']}\" src='imgbin/alt_place.png'/>";
    echo '</div></div>';
}