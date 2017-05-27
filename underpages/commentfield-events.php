<div id="info-msg-add">
    <form method="GET" action="underpages/comment-added.php">
        <input type="text" name="event_id" value="<?php echo $eventvar ?>" class="hidestuff">
        <input type="text" name="comment" placeholder="KOMMENTAR" required>
        <button type="submit">POST</button>
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