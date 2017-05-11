<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../cssbin/style.css" type="text/css"/>
    <title>Add Event</title>
</head>

<body>
<!-- La till den php require + main taggen -->
<?php require '../header.php' ?>
<main id="content">
    <div id="addEvDiv">
        <form id="form" method="post" action="process.php">
            <label for="event_name">Event name:</label>
            <input type="text" name="event_name" placeholder="Navn på eventet"/>
            <label for="addevTxt">Description</label>:
            <textarea id="addevTxt" name="description">Beskrivelse...</textarea>
            <label for="cost">Cost:</label>
            <input type="number" name="cost" placeholder="Hvor mye koster det?"/>
            <!--<label>Image</label>
    <input type="image" name="image" />
    <br>-->
            <label for="date_time">When:</label>
            <input type="datetime-local" name="date_time" title="date_time"/>
            <label for="venue">Venue:</label>
            <input type="text" name="venue" placeholder="Utested"/>
            <input type="submit" id="addEvSubmit" value="Add event">
        </form>
    </div>
</main>
</body>
</html>
