<?php
$connect=mysqli_connect('localhost','root','','westerproject');
 
if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}
 
?>