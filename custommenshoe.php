<?php 
include "function.php"; 
include "functioncus.php"; 
require "db.php"; 

if(isset($_POST['adminTable'])){

  showCusData();
}

if(isset($_POST['submit'])){

  login();
}

?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>Welcome to Ecoms </title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" />

  <!--     Fonts and icons     -->

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
  <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
  <link href="https://fontawesome.com/icons/camera-alt?style=light">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Cutive+Mono|Poiret+One" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Cabin+Sketch|Coming+Soon|Gruppo|Saira+Semi+Condensed|Yeon+Sung&display=swap" rel="stylesheet">

  <!-- Bootstrap core CSS     -->
  <link rel="stylesheet" href="https://cdn.rawgit.com/creativetimofficial/now-ui-kit/2e8e665f/assets/css/bootstrap.min.css">
  <link href="https://cdn.rawgit.com/creativetimofficial/now-ui-kit/2e8e665f/assets/css/now-ui-kit.min.css?v1.2.0" rel="stylesheet"/>
  <link href="https://cdn.rawgit.com/creativetimofficial/now-ui-kit/2e8e665f/assets/demo/demo.css" rel="customstyle.css">


  <link rel="stylesheet" type="text/css" href="customenstyle.css">
  <link rel="stylesheet" type="text/css" href="loginform.css">

  


  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
    .navbar .navbar-nav .nav-link:not(.btn) i.fa{
      font-size: 18px;
      position: relative;
      top: 3px;
      text-align: center;
      width: 21px;
      font-family: 'Cutive Mono', monospace;
            
    }
  </style>


</head>

<body>



   
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto d-flex">
      <li class="nav-item">
        <a class="nav-link text-white" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shoes</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <P class="dropdown-item text-dark display-4">MEN</P>
          <p class="dropdown-item text-dark">WOMEN</P></div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          STORE BRANCH
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <P class="dropdown-item  display-4">SM FAIRVIEW</P>
          <p class="dropdown-item ">SM TUNGKO</P>
          <p class="dropdown-item ">ROBINSON's NOVALICHES</P>
          <p class="dropdown-item ">FAIRVIEW TERRACES</P>
          
      </li>
      
    </ul>
    



   
 <!--LOGIN Button-->
<button onclick="document.getElementById('id01').style.display='block'">Login</button>

<!-- The Modal -->
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" 
class="close" title="Close Modal">&times;</span>

  <!-- Modal Content -->
  <form class="modal-content animate" style="background-color: black;" action="/action_page.php">
    

    <div class="container text-danger">
      <label for="uname" name="c_username"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw" name="c_pass"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <button type="submit" name="login">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:black;">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>
</div>
</nav>


  <div class="section section-basic " id="sec1">
        <div class="d-flex justify-content-around flex-wrap "id="div2">
            <?php showCusData(); ?> 
             <     
        </div>
        
   
  </div>

            <!-- Blog Entries Column
            
</body>



      <!--   	<div class="section" id="carousel">
        		<div class="container">
        			<div class="row justify-content-center">
        				<div class="col-lg-8 col-md-12">
        					<div id="shoecar" class="carousel slide" data-ride="carousel">
        						<ol class="carousel-indicators">
        							<li data-target="#shoecar" data-slide-to="0" class=""></li>
        							<li data-target="#shoecar" data-slide-to="1" class=""></li>
        							<li data-target="#shoecar" data-slide-to="2" class=""></li>
        							<li data-target="#shoecar" data-slide-to="3" class=""></li>
									<li data-target="#shoecar" data-slide-to="4" class=""></li>
        						</ol>
        						<div class="carousel-inner" role="listbox">
        							<div class="carousel-item">
        								<img class="d-block" src="img/2.jpg">
        							</div>
        							<div class="carousel-item">
        								<img class="d-block" src="img/3.jpg">
        							</div>
        							<div class="carousel-item">
        								<img class="d-block" src="img/4.jpg">
        							</div>
        							<div class="carousel-item">
        								<img class="d-block" src="img/5.jpg">
        							</div>
        							<div class="carousel-item">
        								<img class="d-block" src="img/6.jpg">
        							</div>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
 -->
























  <!--   Core JS Files   -->
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>



<script src="https://cdn.rawgit.com/creativetimofficial/now-ui-kit/2e8e665f/assets/js/core/jquery.min.js"></script>
<script src="https://cdn.rawgit.com/creativetimofficial/now-ui-kit/2e8e665f/assets/js/core/popper.min.js"></script>
<script src="https://cdn.rawgit.com/creativetimofficial/now-ui-kit/2e8e665f/assets/js/core/bootstrap.min.js"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="https://cdn.rawgit.com/creativetimofficial/now-ui-kit/2e8e665f/assets/js/plugins/bootstrap-switch.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="https://cdn.rawgit.com/creativetimofficial/now-ui-kit/2e8e665f/assets/js/plugins/nouislider.min.js"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="https://cdn.rawgit.com/creativetimofficial/now-ui-kit/2e8e665f/assets/js/plugins/bootstrap-datepicker.js"></script>
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="https://cdn.rawgit.com/creativetimofficial/now-ui-kit/2e8e665f/assets/js/now-ui-kit.js"></script> 

</html>