<?php
include '../config.php';

$num = isset($_GET['data']) ? $_GET['data'] : '404 could not find page';

foreach ($events as $event) {
    if ($num == $event['id']) {
        $eventvar = $event['event_name'];
        ?>
        <div class="info-container">
            <div class="info-name"><?php echo $event['event_name']; ?></div>
            <div class="info-place">STED: <?php echo $event['event_place']; ?></div>
            <div class="info-type">EVENT TYPE: <?php echo $event['event_type']; ?></div>
            <div class="info-address">ADRESS: <?php echo $event['place_adress']; ?></div>
            <div class="info-time">START kl: <?php echo $event['event_time']; ?></div>
        </div>
        <div class="info-msg">
        <div id="info-msg-add">
            <form method="GET" action="underpages/comment-added.php">
                <input type="text" name="place_name" value="<?php echo $eventvar ?>" class="hidestuff">
                <input type="text" name="comment" placeholder="COMMENT">
                <button type="submit">ADD</button>
            </form>
        </div>
            <?php
            foreach ($msgs as $msg) {
                // Kopplar främmandenyckel till främmandenyckel för att få fram kommentarer för rätt knapp
                if ($msg['name_connect'] == $event['event_name']) {
                    echo '<div class="info-msg-box">';
                    echo $msg['comment'];
                    echo '</div>';
                }
            }
            ?>
        </div>
        <?php
    }
}
?>