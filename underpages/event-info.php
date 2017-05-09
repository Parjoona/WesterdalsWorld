<?php
include '../config.php';

$num = isset($_GET['data']) ? $_GET['data'] : '404 could not find page';

foreach ($events as $event) {
    if ($num == $event['id']) {
?>
<div class="info-container">
    <div class="info-name"><?php echo $event['event_name']; ?></div>
    <div class="info-place">STED: <?php echo $event['event_place']; ?></div>
    <div class="info-type">EVENT TYPE: <?php echo $event['event_type']; ?></div>
    <div class="info-address">ADRESS: <?php echo $event['place_adress']; ?></div>
    <div class="info-time">START kl: <?php echo $event['event_time']; ?></div>
</div>
    <div class="info-msg">

    </div>
<?php
}}
?>