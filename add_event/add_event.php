<!DOCTYPE html>
<html>

<head>
	<!-- la till link till css -->


	<title>Add Event</title>
</head>

<body>
	<!-- La till den php require + main taggen -->
	<?php require '../header.php' ?>
	<main id="content">

			<label for="event_name">Event name:</label>
			<br>
			<br>
			<input type="text" name="event_name" placeholder="Navn på eventet" />
			<br>
			<br>
			<label for="description">Description</label>:
			<br>
			<br>
			<textarea name="description">Beskrivelse...</textarea>
			<br>
			<br>
			<label for="cost">Cost:</label>
			<br>
			<br>
			<input type="number" name="cost" placeholder="Hvor mye koster det?" />
			<!--<label>Image</label>
		<input type="image" name="image" />
		<br>-->
			<br>
			<br>
			<label for="date_time">When:</label>
			<br>
			<br>
			<input type="datetime-local" name="date_time" />
			<br>
			<br>
			<label for="venue">Venue:</label>
			<br>
			<br>
			<input type="text" name="venue" placeholder="Utested" />
			<br>
			<br>
			<br>
			<input type="submit" value="Add event">
		</form>

	</main>


</body>

</html>
