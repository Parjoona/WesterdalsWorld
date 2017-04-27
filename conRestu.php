<?php
foreach ($places as $place) {
    $place_id = $place['id'];
    echo '<div class="placeContainer">';
    ?>
    <script>var phpvar = <?php echo json_encode($place_id) ?></script>
    <?php
    echo '<div class="verticalLine"></div><div class="placeName">';
    echo $place['place_name'];
    echo '</div><div class="placeType">';
    echo $place['place_type'];
    echo '</div><div class="placeDistance">';
    echo $place['distance'];
    echo 'm</div><div class="imgHolder">';
    echo "<img srcset=\"{$place['img_url']}\" src='imgbin/alt_place.png'/>";
    echo '</div></div>';
    ?>
<?php }
//('<div class="placeContainer" onClick="pass(\'' . $place_id . '\')">

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
?>


