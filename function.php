
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
		
		$admin_id = $row ['admin_id'];
		$admin_lastname = $row ['admin_lastname'];
		$admin_firstname = $row ['admin_firstname'];
		$admin_email = $row ['admin_email'];
		$admin_username = $row ['admin_username'];
		$admin_password = $row ['admin_password'];
		
		echo "<tr>
			<td>
				<form>
					<input type = \"hidden\" name = \"adminDelete\" value = \"{$admin_id}\" >
					<input type = 'submit' value='DELETE' class='btn btn btn-outline-danger'>
				</form>
			</td>
				<td>{$admin_id}</td>
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
			$upsval = mysqli_fetch_array($result, MYSQLI_ASSOC);
			header ("location:admin.php");
		}else{
			die("query Failed");
		}
			}
		
		function showData1(){
	global $connection;
	$query = "SELECT * FROM admin";
	$result = mysqli_query($connection, $query);

	if(!$query){
		die("Query Failed" . mysqli_error());
	
	}
		
	while($row = mysqli_fetch_assoc($result)) {
		$admin_id = $row ['admin_id'];
		$admin_lastname = $row ['admin_lastname'];
		$admin_firstname = $row ['admin_firstname'];
		$admin_email = $row ['admin_email'];
		$admin_username = $row ['admin_username'];
		$admin_password = $row ['admin_password'];
		$text = "{$admin_id} - {$admin_username}";
		
		echo "<option value='{$admin_id}'>{$text}</option>";
		}	
	} 
		

	function AdminUP(){
		global $connection;

		$admin_id = $_POST['admin_id'];
		$admin_lastname = $_POST['admin_lastname'];
		$admin_firstname = $_POST['admin_firstname'];
		$admin_email = $_POST['admin_email'];
		$admin_username = $_POST['admin_username'];
		$admin_password = $_POST['admin_password'];
		$text = "{$admin_id} - {$admin_username}";

		$query = "UPDATE admin SET admin_lastname = '$admin_lastname', admin_firstname = '$admin_firstname', admin_email = '$admin_email', admin_username = '$admin_username', admin_password = '$admin_password' WHERE admin_id = '$admin_id'"; 
		


		$result =mysqli_query($connection,$query);
		if($result){
			$upsval = mysqli_fetch_array($result, MYSQLI_ASSOC);

			header ("location:admin.php");
		}else{
			die("query Failed");
		}
			}


	function signup(){
		global $connection;

	
			$custom_lastname = $_POST["custom_lastname"];
			$custom_firstname = $_POST["custom_firstname"];
			$custom_middlename = $_POST["custom_middlename"];
			$custom_email = $_POST["custom_email"];
			$custom_username = $_POST["custom_username"];
			$custome_password = $_POST["custom_password"];

		$query = "INSERT INTO customer(custom_lastname,custom_firstname,custom_middlename,custom_email,custom_username,custome_password) 
		VALUES ('$custom_lastname','$custom_firstname', '$custom_middlename' ,'$custom_email','$custom_username','$custome_password')";
		$result =mysqli_query($connection,$query);
		$upsval = mysqli_fetch_array($result, MYSQLI_ASSOC);

			header ("location:mensecction.php");
		
		

		if($result){
			echo "connected";
		}else{
		die("not connected" . mysqli_error($connection));
		}

		}
		



	function CustomAd(){
	global $connection;

		if(isset($_GET['customDelete'])){
		$delAdmin = "DELETE FROM customer where customer_id = {$_GET["customDelete"]}";
		$connection->query($delAdmin);
	}


	$admintb = "SELECT custom_id,custom_lastname,custom_firstname,custom_middlename,custom_email,custom_username,custome_password FROM customer";
	$query = mysqli_query($connection,$admintb);

	
	$query = "SELECT * FROM customer";
	$result = mysqli_query($connection, $query);

	if(!$query){
		die("not connected" . mysqli_error($connection));
	}
	while ($row = mysqli_fetch_array($result)){
		
		$custom_id = $row ['custom_id'];
		$custom_lastname = $row ['custom_lastname'];
		$custom_firstname = $row ['custom_firstname'];
		$custom_middlename = $row ['custom_middlename'];
		$custom_email = $row ['custom_email'];
		$custom_username = $row ['custom_username'];
		$custome_password = $row ['custome_password'];
		
		echo "<tr>
			<td>
				<form>
					<input type = \"hidden\" name = \"customDelete\" value = \"{$custom_id}\" >
					<input type = 'submit' value='DELETE' class='btn btn btn-outline-danger'>
				</form>
			</td>
				<td>{$custom_id}</td>
				<td>{$custom_lastname}</td>
				<td>{$custom_firstname}</td>
				<td>{$custom_middlename}</td>
				<td>{$custom_email}</td>
				<td>{$custom_username}</td>
				<td>{$custome_password}</td>
			  </tr>
			  ";
	}
}

	
?>





