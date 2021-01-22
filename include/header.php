<?php 
include "config/config.php";
include "lib/database.php";
include "lib/session.php";
include 'classes/user.php';
include 'classes/userPost.php';


$db=new Database();
$sn= new Session();
$ur = new User();
$urp = new userPost();

$sn::init();

if(isset($_GET['action'])&&$_GET['action'] == "logout"){
  $sn::destroy();
}else{
  
}
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>সাধিত্র</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/main.min.css">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand-md navbar-light navbar-white fixed-top">
  <div class="container">
    <a href="index.php" class="navbar-brand">
      <img src="images/logo.jpg" alt="Moricika" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">সাধিত্র</span>
    </a>

   

    <div class="collapse navbar-collapse order-3" id="navbarCollapse">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="buysell.php" class="nav-link">B & S</a>
        </li>
     <!--   <li class="nav-item">
          <a href="offeredjob.php" class="nav-link">OFFERED JOB</a>
        </li> -->
        <li class="nav-item">
          <a href="circular.php" class="nav-link">JOB CIRCULAR</a>
        </li>
        <li class="nav-item">
          <a href="tutor.php" class="nav-link">TUTOR</a>
        </li>
        
        
       
            <!-- End Level two -->
          </ul>
        </li>
      </ul>

    </div>

    <!-- Right navbar links -->
    <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
   
      <!-- Messages Dropdown Menu -->
      <?php 
          $userLog = $sn->get('userLogin');
          $userName = $sn->get('userName');
          $userId = $sn->get('userId');

      if($userLog){

        ?>
        <li class="nav-item ">
        <a href="profile.php" class="nav-link"> <i class="far fa-user-alt" style="margin-right: 3px;"></i>Profile</a>
       
      </li>
      <!-- Logout Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-caret-down"></i>
         
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">Options</span>
          <div class="dropdown-divider"></div>
          <a href="{% url 'messenger' %}" class="dropdown-item">
            <i class="fas fa-comments mr-2"></i> Messages
            <span class="float-right text-muted text-sm"></span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="postAds.php" class="dropdown-item">
            <i class="fas fa-file-alt mr-2"></i> Post Ads
            <span class="float-right text-muted text-sm"></span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="posttutor.php" class="dropdown-item">
            <i class="fas fa-file-alt mr-2"></i> Be Tutor
            <span class="float-right text-muted text-sm"></span>
          </a>
        <!--  <div class="dropdown-divider"></div>
          <a href="postAds.php" class="dropdown-item">
            <i class="fas fa-file-alt mr-2"></i> Offer Job 
            <span class="float-right text-muted text-sm"></span>
          </a> -->
          <div class="dropdown-divider"></div>
          <a href="?action=logout" class="dropdown-item">
            <i class="fas fa-sign-out-alt mr-2"></i> Logout
            <span class="float-right text-muted text-sm"></span>
          </a>
         
          
        </div>
      </li>

        <?php

      }else{
        ?>
         
      <!-- Without login menu-->
    
      <li class="nav-item ">
        <a href="login.php" class="nav-link"> <i class="far fa-sign-in-alt" style="margin-right: 3px;"></i>Sign In</a>
       
      </li>
      <li class="nav-item ">
        <a href="login.php" class="nav-link"> <i class="far fa-user-plus" style="margin-right: 3px;"></i>Sign Up</a>
       
      </li>

        <?php

      }

      ?>
     
     
   </ul>
   <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  </div>
</nav>