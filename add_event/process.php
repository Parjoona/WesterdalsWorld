<?php

require '../config.php';
error_log(print_r($_POST,true));


	$title = $_POST['event_name'];
	$description = $_POST['description'];
	$cost = $_POST['cost'];
	$date_time = $_POST['date_time'];
	$venue_id = $_POST['venue'];

	try{
		$sql='INSERT INTO events(title,description,cost,starts_at,venue_id) VALUES(:event_name,:description,:cost,:date_time,:venue)';
		$stmt = $conn->prepare($sql);
		$stmt->bindValue(':event_name', $title, PDO::PARAM_STR);
		$stmt->bindValue(':description', $description, PDO::PARAM_STR);
		$stmt->bindValue(':cost', $cost, PDO::PARAM_INT);
		$stmt->bindValue(':date_time', $date_time, PDO::PARAM_STR);
		$stmt->bindValue(':venue', $venue_id, PDO::PARAM_INT);
        if (isset($stmt)) {
            $stmt->execute(array(':event_name' => $title, ':description' => $description, ':cost' => $cost, ':starts_at' => $date_time, ':venue' => $venue_id));
        }
		//$stmt->execute();
		$affected_rows = $stmt->rowCount();
	}
	catch(PDOException $e) {
		echo $e->getMessage();
}