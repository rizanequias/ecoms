<?php

session_start();

if (isset($_SESSION['custom_id'])) {
    header("location: customerhome.php");
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $connection = mysqli_connect("localhost", "root", "", "ecoms");
    $custom_email = mysqli_real_escape_string($connection, $_POST['custom_email']);
  

    $sql = "SELECT * FROM customer WHERE custom_email = '$custom_email'";
    
    $result = mysqli_query($connection , $sql);
    
    for ($i = 0; $i < mysqli_num_rows($result); $i++) { 
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        if(password_verify($_POST['custom_password'], $row['custom_password']))
        {
            $_SESSION['custom_id'] = $row['custom_id'];

            header("location: customerhome.php");
        }
    }

    echo "<script>alert('Your Email or Password is invalid')</script>";

}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="sweetalert2.all.min.js"></script>
<!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
</head>
<body class="bg-dark">
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card bg-transparent text-white">
                    <div class="card-header"><h1>Login</h1></div>
                    <div class="card-body">
                        <form class="form-horizontal" 
                            method="post" 
                            action="customerhome.php">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="email" class="control-label">Your Email</label>
                                    <input type="email" 
                                        value="<?= isset($_POST['custom_email'])? $_POST['custom_email'] : '' ?>"
                                        class="form-control" 
                                        name="custom_email" 
                                        id="custom_email" 
                                        placeholder="Enter your Email" required/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="password" class="control-label">Password</label>
                                    <input type="password"
                                        value="<?= 
                                            // isset($_POST['custom_password']) 
                                            // ? $_POST['custom_password'] 
                                            // : '' 
                                            '' ?>"
                                        class="form-control"
                                        name="custom_password"
                                        id="password"
                                        placeholder="Enter your Password" 
                                        required/>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary btn-block login-button" name="submit" value="submit">Login</button>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-12 text-center">
                                    <a href="usersignup.php" class="text-white">Not yet registered? Sign up here.</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>