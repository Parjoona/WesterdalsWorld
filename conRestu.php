<?php

foreach ($places as $place) {
    $place_id = $place['id'];
    echo ('<div class="placeContainer" onClick="openMessage(\'' . $place_id . '\')"><div class="verticalLine"></div><div class="placeName">');
    echo $place['place_name'];
    echo '</div><div class="placeType">';
    echo $place['place_type'];
    echo '</div><div class="placeDistance">';
    echo $place['distance'];
    echo 'm</div><div class="imgHolder">';
    echo "<img srcset=\"{$place['img_url']}\" src='imgbin/alt_place.png'/>";
    echo '</div></div>';
}
