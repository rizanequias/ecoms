
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<?php 
include 'db.php';

//for showing database in table 
		
function adminUser(){
	global $connection;


	if(isset($_GET['adminDelete'])){
		$delAdmin = "DELETE FROM admin where admin_id = {$_GET["adminDelete"]}";
		$connection->query($delAdmin);
	}


	$admintb = "SELECT admin_id,admin_lastname,admin_firstname,admin_middlename,admin_email,admin_username,admin_password, FROM admin";
	$query = mysqli_query($connection,$admintb);


	$query = "SELECT * FROM admin";
	$result = mysqli_query($connection, $query);

	if(!$query){
		die("not connected" . mysqli_error($connection));
	}
	while ($row = mysqli_fetch_array($result)){
		
		$admin_lastname = $row ['admin_lastname'];
		$admin_firstname = $row ['admin_firstname'];
		$admin_email = $row ['admin_email'];
		$admin_username = $row ['admin_username'];
		$admin_password = $row ['admin_password'];
		$admin_id = $row ['admin_id'];
		
	
		

		echo "
			<tr>
			<td>
				<form>
					<input type = \"hidden\" name = \"adminDelete\" value = \"{$admin_id}\" />
					<input type = 'submit' value='DELETE' class='btn btn btn-outline-danger'></input>
				</form>
			</td>
			
			
				<td>{$admin_lastname}</td>
				<td>{$admin_firstname}</td>
				<td>{$admin_email}</td>
				<td>{$admin_username}</td>
				<td>{$admin_password}</td>
				
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

	// function adminDel(){
	// 	global $connection;

	// 	if(isset($_REQUEST['admindelete'])){

	// 		$query = "DELETE FROM admin WHERE id='$id' ";
	// 		$result = mysqli_query($connection, $query);

	// 	if(!$result) {
	// 	die("Query Failed" . mysqli_error());
	// }
	// 	}
	// }



	

 
	


	// //for delete button
	// function deleteAd(){
	// 	global $connection;

	// 	$query = 




	// }




	
?>





