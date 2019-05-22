<?php 
include "function.php"; 
require "db.php";

if(isset($_POST['Create'])){

	adminCrt();
}


if(isset($_POST['update'])){

	AdminUP();
}
?>



<!DOCTYPE html>
<html>
<head>

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="adminstyle.css">


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
							<a class="nav-link" href="customad.php">COUSTUMER</a>
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
			<div class="row d-flex justify-content-lg-between" id="admincon">
			
		<table class="adminTable table d-flex justify-content-center table table-border table-hover col-lg-6">	
			<tr>

				<th></th>

				<th>Admin ID</th>
				<th>Admin Lastname</th>
				<th>Admin Firstname</th>
				<th>Admin Email</th>
				<th>Admin Username</th>
				<th>Admin Password</th>
				
				<?php
						adminUser();
	
					?>

			</tr>
		</table>
		
		<div class="col-lg-6">
		<form method="post" id="adminform">
			<h5>CREATE</h5>

			<div class="row form-group"  >

				<div class="col-sm-6">
					<label for="Lastname" class="col-sm-2 col-form-label">Lastname</label>
					<br>
					<input type="text"  class="form-control" name="Lastname"  id="Lastname" required>
				</div>

				<div class="col-sm-6" >
					<label class="col-sm-2 col-form-label">Firstname</label>
					<input type="text"  class="form-control " name="Firstname" id="Firstname" required>
				</div>

				</div>

				<div>
					<label class="col-sm-2 col-form-label">Email</label>
					<input type="Email"  class="form-control " name="Email" id="Email" required>

					<label class="col-form-label">Username</label>
					<input type="text" class="form-control " name="UserName"id="UserName" required>	
							
					<label class="col-sm-2 col-form-label">Password</label>
					<input type="text"  class="form-control " name="Password" id="Password" required>
				</div>

				<div class="container" id="butcon">
				<div class="row d-flex justify-content-around">
					<input  type="submit" name="Create" value="CREATE" class="btn btn-primary"> 
				 
				 
				</div>
				</div>			

		</form>

		<!-- //UPDATE -->
		<form method="post" id="adminform">
			<h5>UPDATE</h5>
			<h6>Select ID to Update</h6>
			<select name="admin_id" id=""> <?php showData1(); ?></select>
			<div class="row form-group"  >



				<div class="col-sm-6">
					<label for="Lastname" class="col-sm-2 col-form-label">Lastname</label>
					<br>
					<input type="text"  class="form-control" name="admin_lastname" id="Lastname" required>
				</div>

				<div class="col-sm-6" >
					<label class="col-sm-2 col-form-label">Firstname</label>
					<input type="text"  class="form-control " name="admin_firstname" id="Firstname" required>
				</div>

				</div>

				<div>
					<label class="col-sm-2 col-form-label">Email</label>
					<input type="Email"  class="form-control " name="admin_email" id="Email" >

					<label class="col-form-label">Username</label>
					<input type="text" class="form-control " name="admin_username"id="UserName" value="">	
							
					<label class="col-sm-2 col-form-label">Password</label>
					<input type="text"  class="form-control " name="admin_password" id="Password" value="">
				</div>

				<div class="container" id="butcon">
				<div class="row d-flex justify-content-around">
				 
					<input  type="submit" name="update" value="UPDATE" class="btn btn-primary">

				 
				</div>
				</div>			

		</form>
		</div>
	</div>
	</div>
	</div>

















<link rel="stylesheet" type="text/css" href="deleteAd.js">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>