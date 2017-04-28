<!DOCTYPE html>
<html>

<head>
<!-- la till link till css -->
    <link rel="stylesheet" href="../cssbin/style.css">
	<style>
		label {
			display: inline-block;
			width: 100px;
			margin-bottom: 10px;
		}

	</style>


	<title>Add Event</title>
</head>

<body>
<!-- La till den php require + main taggen -->
<?php require '../header.php' ?>
<main id="content">
	<form method="post" action="process.php">
		<label>Event name</label>
		<input type="text" name="event_name" />
		<br />
		<label>Description</label>
		<input type="text" name="description" />
		<br />
		<label>Cost</label>
		<input type="number" name="cost" />
		<br />
		<!--<label>Image</label>
		<input type="image" name="image" />
		<br />-->
		<label>When</label>
		<input type="datetime-local" name="date_time" />
		<br />
		<label>Venue</label>
		<input type="text" name="venue" />
		<br />
		<input type="submit" value="Add event">
	</form>
</main>


</body>

</html>
