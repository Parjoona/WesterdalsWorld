<?php
include '../config.php';
session_start();

$num = isset($_GET['data']) ? $_GET['data'] : '404 could not find page';

foreach ($places as $place) {
    if ($num == $place['id']) {
        //Sätter in placevar för senare bruk
        $placevar = $place['id']
        ?>

        <script src="https://code.jquery.com/jquery-3.2.1.min.js"
                integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
                crossorigin="anonymous">
        </script>
        <script type="text/javascript" src="jsbin/script.js"></script>

        <!-- container för vänster information-->
        <div class="info-container">
            <div class="info-img">
                <?php echo "<img srcset=\"{$place['img_url']}\" src='imgbin/alt_place.png'/>"; ?>
            </div>
            <div class="info-name"><?php echo $place['place_name']; ?></div>
            <div class="info-place">DISTANCE: <?php echo $place['distance']; ?></div>
            <div class="info-type">STED TYPE: <?php echo $place['place_type']; ?></div>
            <div class="info-address">ADRESS: <?php echo $place['place_adress']; ?></div>
            <div class="info-time">OPENED AT:
                <?php echo $place['open_at']; ?>-<?php echo $place['closes_at']; ?></div>
            <div class="info-description"><?php echo $place['description']; ?></div>
<hr class="oneliner">
        <div class="event-i-places">
        <h1>EVENTS happening here:</h1>
            <!-- Event koppling till places-->
            <?php foreach ($events as $event) {
                if ($place['id'] == $event['place_id']) {
                    echo '<p>';
                    echo $event['event_name'];
                    echo ' : ';
                    echo $event['event_time'];
                    echo ':00';
                    echo '</p>';
                }
            } ?>
        </div>
        </div>
        <!-- Message window till höger -->
        <div class="info-msg">
            <?php
            if (empty($_SESSION)) {
                echo 'You need to be logged in to see comments on this post';
            } else if (!empty($_SESSION)) {
                require 'commentfield-places.php';
            }
            ?>
        </div>
        <?php
    }
}
?>