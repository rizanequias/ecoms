<?php 
include "functioncus.php";
include "function.php";
require "db.php";


if(isset($_POST['adminTable'])){
  showCusData();
}
 ?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
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
  <link rel="stylesheet" type="text/css" href="customstyle.css">
  <link rel="stylesheet" type="text/css" href="loginform.css">


<body>
<nav class="navbar navbar-expand-lg navbar-light bg-transparent">
  <a class="navbar-brand" href="#">ECOMS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link text-white" href="custommenshoe.php">MEN SECTION</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="customwomenshoe.php">WOMEN SECTION</a>
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
      <li class="nav-item">
        <a class="nav-link text-white" href="customelogin.php">LOG OUT</a>
      </li>
    

</nav>

 <div class="section section-basic " id="sec1">
        <div class="d-flex justify-content-around flex-wrap "id="div2">
            <?php showCusData(); ?> 
               
        </div>   
  </div>
 <div class="section section-basic " id="sec1">
        <div class="d-flex justify-content-around flex-wrap "id="div2">
            <?php showCusWoData(); ?>     
        </div>   
  </div>

</body>
</html>