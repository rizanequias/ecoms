
<link rel="stylesheet" type="text/css" href="custmenstyle.css">
<link rel="stylesheet" href="https://cdn.rawgit.com/creativetimofficial/now-ui-kit/2e8e665f/assets/css/bootstrap.min.css">
  <link href="https://cdn.rawgit.com/creativetimofficial/now-ui-kit/2e8e665f/assets/css/now-ui-kit.min.css?v1.2.0" rel="stylesheet"/>
  <link href="https://cdn.rawgit.com/creativetimofficial/now-ui-kit/2e8e665f/assets/demo/demo.css" rel="customstyle.css">
  <link rel="stylesheet" type="text/css" href="add2cart.js">


<?php  
include "db.php";



function showCusData(){
	global $connection;

	$query = "SELECT menitem_id ,menitem_code, menitem_name, menitem_color, menitem_type, menitem_img FROM menitem ";
	$result = mysqli_query($connection,$query);
	


	if(!$query){
		die("not connected"). mysql_error(($connection));
	}
	while ($row = mysqli_fetch_array($result)){
		
		$itemID = $row ['menitem_id'];
		$itemcode = $row ['menitem_code'];
		$itemname = $row ['menitem_name'];
		$itemcolor = $row ['menitem_color'];
		$itemtype = $row ['menitem_type'];
		$itemimg = $row ['menitem_img'];

		echo "
		

		
	
			<div class='card border border-default bg-transparent text-white ' style='width:200px; height:250px;'>
 		 		<img class='img-responsive' id='imgitm' src='{$itemimg}'; alt=''>
 		 		
 		 		<div class='col-lg-12' >
 		 			<div class='row  ' id='rowitem' >
 		 				<p class='card-tile' id='itemtext'>N A M E </p><br><p id='datatext'>: {$itemname}</p></p>
 		 			</div>
 		 			<div class='row  ' id='rowitem'>
 		 				<p class='card-tile' id='itemtext'>C O L O R</p><p id='datatext'>: {$itemcolor}</p></p>
 		 			</div>
 		 			<div class='row ' id='rowitem'>
 		 				<p class='card-tile' id='itemtext'>T Y P E</p><p id='datatext'>: {$itemtype}</p></p>	 			
						
 		 	</div> 	
 		 	</div>
 		 	</div>
 		 		
			  ";
		}
	}


	// LOGIN Button Function

	function login(){
		global $connection;

		$username = $_POST['c_username'];
		$password = $_POST['c_pass'];

		if($username == username ){
		$query = "SELECT custom_id FROM customer WHERE custom_username ='username' , custom_password ='password' ";
		$result= mysqli_query($connection,$query);
		$x = mysqli_fetch_array($result,MYSQLI_ASSOC);
		$num = mysqli_num_rows($result);


		if($num == 1) {
 		 $_SESSION['username'] = $username;
 		 header('location:customelogin.php');

		} else {
  header('location:login.php');
  
}

}


	}


?>

