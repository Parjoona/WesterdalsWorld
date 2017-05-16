<?php
include '../config.php';
$num = isset($_GET['data']) ? $_GET['data'] : '404 could not find page';

foreach ($places as $place) {
    if ($num == $place['id']) {
        //Sätter in placevar för senare bruk
        $placevar = $place['place_name']
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
        </div>
        <!-- Message window till höger -->
        <div class="info-msg">
            <div id="info-msg-add">
                <form method="GET" action="underpages/comment-added.php">
                    <input type="text" name="place_name" value="<?php echo $placevar ?>" class="hidestuff">
                    <input type="text" name="comment" placeholder="COMMENT">
                    <button type="submit">ADD</button>
                </form>
            </div>
            <?php
            foreach ($msgs as $msg) {
                // Kopplar främmandenyckel till främmandenyckel för att få fram kommentarer för rätt knapp
                if ($msg['name_connect'] == $place['place_name']) {
                    echo '<div class="info-msg-box">';
                    echo '<div class="info-msg-name">Person name</div>';
                    echo '<div class="info-msg-comment">';
                    echo $msg['comment'];
                    echo '</div>';
                    if (1 == 0) {
                    } else if (1 == 1) {
                        echo '<div class="delete-comment-btn" data-id="' . $msg['id'] . '">🗑</div>';
                    }
                    echo '</div>';
                }
            }
            ?>
        </div>
        <?php
    }
}
?>