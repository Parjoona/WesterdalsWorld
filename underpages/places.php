
<?php
foreach ($places as $place) {
    $place_id = json_decode($place['id']);
    echo ('<div class="placeContainer" data-id="' . $place_id . '"><div class="placeName">');
    echo $place['place_name'];
    echo '</div><div class="placeImg">';
    echo "<img srcset=\"{$place['img_url']}\" src='../imgbin/alt_place.png'/>";
    echo '</div><div class="placeType">';
    echo $place['place_type'];
    echo '</div></div>';
}


