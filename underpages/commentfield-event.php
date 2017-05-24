
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
                if ($msg['name_connect'] == $event['place_name']) {
                    echo '<div class="info-msg-box">';
                    echo '<div class="info-msg-name">';
                    echo $msg['username_comment'];
                    echo '</div>';
                    echo '<div class="info-msg-comment">';
                    echo $msg['comment'];
                    echo '</div>';

                    if (empty($_SESSION)) {
                    } else if ($_SESSION['username'] == $msg['username_comment']) {
                        echo '<div class="delete-comment-btn" data-id="' . $msg['id'] . '">🗑</div>';
                    }
                    echo '</div>';
                }
            }
            ?>
