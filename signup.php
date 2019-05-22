
<?php 
include "function.php";
require "db.php"; 

if(isset($_POST['REGISTER'])){

    signup();
}


?>


<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="signup.css">
    <title>Sign up</title>



</head>
<body>

    <div class="d-flex align-items-center bg">
        <div class="col-lg-6">
            <form class="form" method="post" id="signupform">
                <h2>WELCOME TO ECOMS REGISTRATION</h2>
            <div class="row form-group"  >

                <div class="col-sm-6">
                    <label for="custom_lastname" class="col-sm-2 col-form-label">custom_lastname</label>
                    <br>
                    <input type="text"  class="form-control" name="custom_lastname"  id="custom_lastname" required>
                </div>

                <div class="col-sm-6" >
                    <label class="col-sm-2 col-form-label">Firstname</label>
                    <input type="text"  class="form-control " name="custom_firstname" id="custom_firstname" required>
                </div>

                <div class="col-sm-6" >
                    <label class="col-sm-2 col-form-label">Middlename</label>
                    <input type="text"  class="form-control " name="custom_middlename" id="custom_firstname" required>
                </div>

                </div>

                <div>
                    <label class="col-sm-2 col-form-label">Email</label>
                    <input type="Email"  class="form-control " name="custom_email" id="custom_email" required>

                    <label class="col-form-label">Username</label>
                    <input type="text" class="form-control " name="custom_username"id="custom_username" required> 
                            
                    <label class="col-sm-2 col-form-label">Password</label>
                    <input type="text"  class="form-control " name="custom_password" id="custom_password" required>
                </div>

                <div class="container" id="butcon">
                <div class="row d-flex justify-content-around">
                    <input class="btn btn-outline-success" type="submit" name="REGISTER" value="REGISTER" class="btn btn-primary"> 
                 
                 
                </div>
                </div>          

        </form>
    </div>
</body>
</html>