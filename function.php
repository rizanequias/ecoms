
<?php 
include 'db.php';

//for showing database in table 
		
function adminUser(){
	global $connection;

	$admintb = "SELECT admin_id,admin_lastname,admin_firstname,admin_middlename,admin_email,admin_username,admin_password,admin_delete FROM admin";
	$query = mysqli_query($connection,$admintb);


	$query = "SELECT * FROM admin";
	$result = mysqli_query($connection, $query);

	if(!$query){
		die("not connected" . mysqli_error($connection));
	}
	while ($row = mysqli_fetch_array($result)){
		$admin_id = $row ['admin_id'];
		$admin_lastname = $row ['admin_lastname'];
		$admin_firstname = $row ['admin_firstname'];
		$admin_email = $row ['admin_email'];
		$admin_username = $row ['admin_username'];
		$admin_password = $row ['admin_password'];
		$admin_delete = $row['admin_delete'];


		echo "
			
			  <tr>
			  	<td>{$admin_id}</th>
				<td>{$row['admin_lastname']}</td>
				<td>{$row['admin_firstname']}</td>
				<td>{$row['admin_email']}</td>
				<td>{$row['admin_username']}</td>
				<td>{$row['admin_password']}</td>
				<td>{$row['admin_delete']}</td>
	
			  </tr>
			  ";
	}
}

//create button 
	function adminCrt(){
		global $connection;
		
		
			$Lastname = $_POST["Lastname"];
			$Firstname = $_POST["Firstname"];
			$Email = $_POST["Email"];
			$UserName = $_POST["UserName"];
			$Password = $_POST["Password"];

		$query = "INSERT INTO admin(admin_lastname,admin_firstname,admin_email,admin_username,admin_password) 
		VALUES ('$Lastname','$Firstname','$Email','$UserName','$Password')";
		$result =mysqli_query($connection,$query);
		if($result){
			header ("location:admin.php");
		}else{
			die("query Failed");
		}
		
		
	}


	// //for delete button
	// function deleteAd(){
	// 	global $connection;

	// 	$query = 



	// }




	
?>





