
<link rel="stylesheet" type="text/css" href="custmenstyle.css">
<link rel="stylesheet" href="https://cdn.rawgit.com/creativetimofficial/now-ui-kit/2e8e665f/assets/css/bootstrap.min.css">
  <link href="https://cdn.rawgit.com/creativetimofficial/now-ui-kit/2e8e665f/assets/css/now-ui-kit.min.css?v1.2.0" rel="stylesheet"/>
  <link href="https://cdn.rawgit.com/creativetimofficial/now-ui-kit/2e8e665f/assets/demo/demo.css" rel="customstyle.css">
  <link rel="stylesheet" type="text/css" href="add2cart.js">


<?php  
include "db.php";



function showCusWoData(){
	global $connection;

	$query = "SELECT womenitem_id ,womenitem_code, womenitem_name, womenitem_color, womenitem_type, womenitem_img FROM womenitem ";
	$result = mysqli_query($connection,$query);
	


	if(!$query){
		die("not connected"). mysql_error(($connection));
	}
	while ($row = mysqli_fetch_array($result)){
		
		$itemID = $row ['womenitem_id'];
		$itemcode = $row ['womenitem_code'];
		$itemname = $row ['womenitem_name'];
		$itemcolor = $row ['womenitem_color'];
		$itemtype = $row ['womenitem_type'];
		$itemimg = $row ['womenitem_img'];

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


?>

