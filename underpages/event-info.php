<?php
include '../config.php';
session_start();
$num = isset($_GET['data']) ? $_GET['data'] : '404 could not find page';

foreach ($events as $event) {
    if ($num == $event['id']) {
        $eventvar = $event['id'];
        ?>
        <div class="info-container">
            <div class="event-i-event">Info</div>
            <div class="info-name"><?php echo $event['event_name']; ?></div>
            <div class="info-type">Kategori: <?php echo $event['event_type']; ?></div>
            <div class="info-time">Start: <?php echo $event['event_time']; ?></div>
            <div>Sted: <?php
                foreach ($places as $place) {
                    if ($place['id'] == $event['place_id']) {
                        echo $place['place_name'];
                    }
                }
                ?>
            </div>
            <div>Vert: <?php echo $event['username_event']; ?></div>
            <div>Beskrivelse: <?php echo $event['description']; ?></div>

        </div>

        <div class="info-msg">
            <?php if (empty($_SESSION['username'])) {
                echo '<div class="must-login-txt">';
                echo 'Du må være logget inn for å se kommentarer.';
                echo '</div>';
            } else if (!empty($_SESSION['username'])) {
                require 'commentfield-events.php';
            }
            ?>
        </div>
        <?php
    }
}
?>