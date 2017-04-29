
<?php
foreach ($places as $place) {
    // if (class of div contains[value=placeType]) == place_type) { pick out only this place_type }
    $place_id = json_decode($place['id']);
    echo ('<div class="placeContainer" data-id="' . $place_id . '"><div class="verticalLine"></div><div class="placeName">');
    echo $place['place_name'];
    echo '</div><div class="placeType">';
    echo $place['place_type'];
    echo '</div><div class="placeDistance">';
    echo $place['distance'];
    echo 'm</div><div class="imgHolder">';
    echo "<img srcset=\"{$place['img_url']}\" src='imgbin/alt_place.png'/>";
    echo '</div></div>';
}

/*

foreach ($places as $place) {
    if ($place_id == $place['id']) {
        echo '<div class="placeContainer"></div>';
        echo '<div id="imgHolder">';
        echo "<img srcset=\"{$place['img_url']}\" src='imgbin/alt_place.png'/>";
        echo '</div></div></div>';
    }
}
*/



