<?php 
include 'db.php';

function showData(){
	global $connection;
	$query = "SELECT * FROM admin";
	$result = mysqli_query($connection, $query);

	if(!$query){
		die("Query Failed" . mysqli_error());
	
	}
		
	while($row = mysqli_fetch_assoc($result)) {
		$id = $row['id'];
		$name = $row['username'];
		$text = "{$id} - {$name}";
		echo "<option value='{$id}'>{$text}</option>";
		}	
	}
 ?>

 