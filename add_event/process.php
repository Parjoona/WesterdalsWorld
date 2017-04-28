<?php include "database.php"; ?>
 
<?php
 
// create a variable
$event_name=$_POST['event_name'];
$description=$_POST['description'];
$cost=$_POST['cost'];
//$image=$_POST['image'];
$when=$_POST['date_time'];
$venue=$_POST['venue'];
 
//Execute the query
 
 
mysqli_query($connect,"INSERT INTO events (title,description,cost,starts_at,venue_id)
		        VALUES ('$event_name','$description','$cost','$when','$venue')");
				
	if(mysqli_affected_rows($connect) > 0){
	echo '<p>Employee Added</p>';
	echo '<a href="add_event.php">Go Back</a>';
} else {
	echo 'Employee NOT Added<br />';
	echo mysqli_error ($connect);
}