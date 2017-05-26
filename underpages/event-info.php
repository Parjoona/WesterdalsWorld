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
            <div class="info-type">Type: <?php echo $event['event_type']; ?></div>
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
            } else if (!empty($_SESSION['username'])) { ?>
                <div id="info-msg-add">
                    <form method="GET" action="underpages/comment-added.php">
                        <input type="text" name="event_id" value="<?php echo $eventvar ?>" class="hidestuff">
                        <input type="text" name="comment" placeholder="KOMMENTAR">
                        <button type="submit">DEL</button>
                    </form>
                </div>
                <?php


                foreach ($msgs as $msg) {
                    // Kopplar främmandenyckel till främmandenyckel för att få fram kommentarer för rätt knapp
                    if ($msg['event_id'] == $event['id']) {
                        echo '<div class="info-msg-box">';
                        echo '<div class="info-msg-name">';
                        echo $msg['username_comment'];
                        echo '</div>';
                        echo '<div class="info-msg-comment">';
                        echo $msg['comment'];
                        echo '</div>';
                        if (empty($_SESSION)) { // Do nothing
                        } else if (
                            // Shows delete button if right user
                            $_SESSION['username'] == $msg['username_comment']
                        ) {
                            echo '<div class="delete-comment-btn" data-id="' . $msg['id'] . '">🗑</div>';
                        }
                        echo '</div>';
                    }
                }
            }
            ?>
        </div>
        <?php
    }
}
?>