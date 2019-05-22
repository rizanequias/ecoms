<?php 
include "function.php"; 
require "db.php";

?>



<!DOCTYPE html>
<html>
<head>

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="custmad.css">
		

		<title>Admin</title>
</head>	
<body>

		<div>	
			<nav class="navbar navbar-expand-lg border border-primary" id="adminnavbar">	
				<a class="navbar-brand" href="#">Ecoms</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#adminnav">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="adminnav">
					<ul class="navbar-nav mr-auto">
						<div class="d-flex justify-content-between">	
						<li class="	nav-item active">
							<a class="nav-link" href="admin.php"><span=>	ADMIN</span></a>
						</li>
						<li class="	nav-item active">
							<a class="nav-link" href="customad.php">COSTUMER</a>
						</li>
						<li class="	nav-item active">
							<a class="nav-link" href="#">PRODUCT</a>
						</li>
						</div>
					</ul>
				</div>
			</nav>
		</div>

		<div class="container" >
			<div class="row d-flex justify-content-center" id="admincon">
			
		<table class="adminTable table d-flex justify-content-center table table-border table-hover col-lg-6">	
			<tr>

				<th></th>

				<th>Costumer ID</th>
				<th>Costumer Lastname</th>
				<th>Costumer Firstname</th>
				<th>Costumer Middlename</th>
				<th>Costumer Email</th>
				<th>Costumer Username</th>
				<th>Costumer Password</th>
				
				<?php
						CustomAd();
	
					?>

			</tr>
		</table>
		</div>
	</div>
</div>
		

















<link rel="stylesheet" type="text/css" href="deleteAd.js">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>