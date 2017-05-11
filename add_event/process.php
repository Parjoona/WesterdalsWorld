<?php

require '../config.php';
error_log(print_r($_GET,true));

    //var_dump($_GET);

	$title = $_GET['event_name'];
	$description = $_GET['description'];
	$cost = $_GET['cost'];
	$date_time = $_GET['date_time'];
	$venue_id = $_GET['venue'];

	try{
		$sql='INSERT INTO events(title,description,cost,starts_at,venue_id) VALUES(:event_name,:description,:cost,:date_time,:venue)';
		$stmt = $conn->prepare($sql);
		$stmt->bindValue(':event_name', $title, PDO::PARAM_STR);
		$stmt->bindValue(':description', $description, PDO::PARAM_STR);
		$stmt->bindValue(':cost', $cost, PDO::PARAM_INT);
		$stmt->bindValue(':date_time', $date_time, PDO::PARAM_STR);
		$stmt->bindValue(':venue', $venue_id, PDO::PARAM_INT);
		$stmt->execute();
		$affected_rows = $stmt->rowCount();
	}
	catch(PDOException $e) {
		echo $e->getMessage();
}

header('Location: '.'add_event.php');