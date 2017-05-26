<?php
foreach ($places as $place) {
    $place_id = json_decode($place['id']);
    echo ('<div class="placeCon" id="box-con" data-id="' . $place_id . '"><div class="box-name">');
    echo $place['place_name'];
    echo '</div><div class="box-img">';
    echo "<img srcset=\"{$place['img_thumbnail']}\" src='imgbin/alt_place.png'/>";
    echo '</div><div class="box-type">';
    echo $place['place_type'];
    echo '</div>';
    echo '<div class="box-distance">';
    echo $place['distance'];
    echo 'm</div>';
    echo '</div>';
}
