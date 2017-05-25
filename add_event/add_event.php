<?php require '../config.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../cssbin/style.css" type="text/css"/>
    <title>Add Event</title>
</head>

<body>
<wrapper>
    <!-- La till den php require + main taggen -->
    <?php require '../header.php' ?>
    <main id="content">
        <div id="addEvDiv">
            <form id="form" method="get" action="process.php">

                <label for="event_name">Event name:</label>
                <input type="text" name="event_name" placeholder="Navn på eventet"/>

                <label for="addevType">Event type</label>:
                <input id="addevType" name="event_type">

                <label for="date_time">Når</label>
                <input type="datetime-local" name="date_time" title="date_time"/>

                <select name="placested">
                    <?php
                    foreach ($places as $place) {
                        echo "<option value=" . $place['id'] . ">" . $place['place_name'] . "</option>";
                    }

                    ?></select>

                <input type="submit" id="addEvSubmit" value="Add event">
            </form>
        </div>
    </main>
</wrapper>
</body>
</html>
