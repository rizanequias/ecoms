<?php 
$connection = mysqli_connect("localhost", "root", "", "ecoms");
if(!$connection){

	die('Failed to connect to MySQL: ' . mysqli_error());
} ?> 