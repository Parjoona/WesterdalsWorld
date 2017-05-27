<?php include '../config.php';
session_start();

$num = isset($_GET['data']) ? $_GET['data'] : '404 could not find page';

foreach ($places as $place) {
    if ($num == $place['id']) {
        //Sätter in placevar för senare bruk
        $placevar = $place['id']
        ?>

        <script type="text/javascript" src="jsbin/script.js"></script>

        <!-- container för vänster information-->
        <div class="info-container" class="infoOutAnim">
            <div class="info-img">
                <?php echo "<img srcset=\"{$place['img_url']}\" src='imgbin/alt_place.png'/>"; ?>
            </div>
            <div class="info-name"><?php echo $place['place_name']; ?></div>
            <div class="info-place">Distanse: <?php echo $place['distance']; ?>m</div>
            <div class="info-type">Kategori: <?php echo $place['place_type']; ?></div>
            <div class="info-address">Adresse: <?php echo $place['place_adress']; ?></div>
            <div class="info-time">Åpningstider:
                <?php echo $place['open_at']; ?>-<?php echo $place['closes_at']; ?></div>
            <div class="info-description"><?php echo $place['description']; ?></div>
            <div class="event-i-places"><h1>Events here:</h1>

                <!-- Event koppling till places-->
                <?php foreach ($events as $event) {
                    if ($place['id'] == $event['place_id']) {

                        $time = strtotime($event['event_time']);
                        $timeformated = date("m/d g:i A", $time);


                        echo '<div class="place-event">';
                        echo "<div class='place-event-img'><img srcset=\"{$place['img_url']}\" src='imgbin/alt_place.png'/></div>";
                        echo '<div class="place-event-name"><p>';
                        echo $event['event_name'];
                        echo '</p></div><div class="place-event-time"><p>';
                        echo $timeformated;
                        echo '</p></div></div>';
                    }
                } ?>
            </div>
        </div>
        <!-- Message window till höger -->
        <div class="info-msg">
            <?php
            if (empty($_SESSION['username'])) {
                echo '<div class="must-login-txt">';
                echo 'Du må være logget inn for å se kommentarer.';
                echo '</div>';
            } else if (!empty($_SESSION['username'])) {
                require 'commentfield-places.php';
            }
            ?>
        </div>
        <?php
    }
}
?>