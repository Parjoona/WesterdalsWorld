<?php
include '../config.php';

$num = isset($_GET['data']) ? $_GET['data'] : '404 could not find page';

foreach ($places as $place) {
    if ($num == $place['id']) {
        ?>
        <div class="info-container">
            <div class="info-name"><?php echo $place['place_name']; ?></div>
            <div class="info-place">DISTANCE: <?php echo $place['distance']; ?></div>
            <div class="info-type">STED TYPE: <?php echo $place['place_type']; ?></div>
            <div class="info-address">ADRESS: <?php echo $place['place_adress']; ?></div>
            <div class="info-time">OPENED AT:
                <?php echo $place['open_at']; ?>-<?php echo $place['closes_at']; ?></div>
            <div class="info-img">
                <?php echo "<img srcset=\"{$place['img_url']}\" src='imgbin/alt_place.png'/>"; ?>
            </div>
            <div class="info-description"><?php echo $place['description']; ?></div>
        </div>
        <div class="info-msg">
            <?php
            if ($place['place_name'] == $place['name_connect']) {
                echo '<div class="info-msg-box">';
                echo $place['comment'];
                echo '</div>';
            } else {
                echo "NOPE";
            }
            ?>
        </div>
        <?php
    }
}
?>