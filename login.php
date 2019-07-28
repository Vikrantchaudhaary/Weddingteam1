<?php
include('dbcon.php');

   session_start();
   if(isset($_SESSION['userid']))
   {
    header('location:vendor-dashboard.php');
   } 
?>



<!DOCTYPE html>
<!--
**********************************************************************************************************
    Copyright (c) 2019 .
**********************************************************************************************************  -->
<!-- 
Website Name: Wedding Team — Wedding Vendor Directory
Version: 1.0.0
Author: Havsky
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]> -->
<html lang="en">
<!-- <![endif]-->
<!-- head -->
<head>
<title>login</title>
      <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<meta charset="utf-8" />
<meta content="width=device-width, initial-scale=1.0" name="viewport" />
<meta name="description" content="Wedding Team" />
<meta name="keywords" content="wedding, wedding vendor, wedding vendor directory, Destination Wedding, Budget Shaadi, Find Vendors, Book Wedding Venue, wedding Team, wedding Service Provider">
<meta name="author" content="Havsky" />
<meta name="MobileOptimized" content="320" />
<link href="images/favicon.ico" rel="icon" type="image/x-icon"/> <!-- favicon -->
<!-- theme style -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/> <!-- bootstrap css -->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/> <!-- fontawesome css -->
<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet"> <!-- google fonts -->
<link href="css/menumaker.css" rel="stylesheet" type="text/css"/> <!-- menu css -->
<link href="css/owl.carousel.css" rel="stylesheet" type="text/css"/> <!-- owl carousel css -->
<link href="css/magnific-popup.css" rel="stylesheet" type="text/css"/> <!-- magnify popup css -->
<link href="css/datepicker.css" rel="stylesheet" type="text/css"/> <!-- datepicker css -->
<link href="css/flaticon.css" rel="stylesheet" type="text/css"/> <!-- flaticon css -->
<link href="css/style.css" rel="stylesheet" type="text/css"/> <!-- custom css -->
<link href="css/stucture.css" rel="stylesheet" type="text/css"/> <!-- stucture css -->
<!-- end theme style -->
</head>
<!-- end head -->
<!--body start-->
<body>
<!-- preloader --> 
  <div class="preloader">
    <div class="status">
      <div class="status-message">
      </div>
    </div>
  </div>
<!-- end preloader --> 
<!--  top bar -->
  <section class="top-nav-info">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="top-text">Welcome to Wedding Team</div>
        </div>
        <div class="col-sm-6">
          <div class="top-detail text-right">
            <ul>
              <li><a href="help.php">Help</a></li>
              <li><a href="pricing-plan.html">Pricing</a></li>
              <li><a href="register.php">Register</a></li>
              <li><a href="login.php">Login</a></li>
              <li class="search-btn search-icon text-center">
                <a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- search -->
      <div class="search">
        <div class="container">
          <input type="search" class="search-box" placeholder="Search"/>
          <a href="#" class="fa fa-times search-close"></a>
        </div>
      </div>
      <!-- end search -->
    </div>
  </section>
<!--  end top bar -->
<!--  navigation -->
<header id="nav-bar" class="nav-bar navbar-two">
    <div class="container">
      <div class="row">
        <div class="col-md-2 col-sm-3">
          <div class="wedding-logo">
            <a href="index.html"><img src="images/logo2.png" class="img-responsive" alt="logo"></a>
          </div>
        </div>
        <div class="col-md-10 col-sm-9">
          <div class="navigation">
            <div id="cssmenu">
              <ul class="css-menu">
                <li class="active"><a href="index.html">Home</a>
                  
                </li>   
                <li><a href="#">Pages<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                  <ul class="sub-menu">
                    <li><a href="about-us.html">About</a></li>
                    <li><a href="blog.html">Blog</a>
                      
                    </li>
                    <li><a href="gallery-col3.html">Gallery</a>
                      
                    </li>
                    
                    <li><a href="faq.html">Faq</a></li>
                    <li><a href="help.php">Help</a></li>
                    <li><a href="register.php">Register</a></li>
                  </ul>
                </li>                         
                <li><a href="category-listing.html">Listing</a>
                </li>
                        
                <li><a href="#">Planning Tools<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                  <ul class="sub-menu">
                    <li><a href="budget-planner.html">Budget Planner</a></li>
                    <li><a href="to-do-list.html">To Do List</a></li>
                    <li><a href="guest-list.html">Guest List</a></li>
                  </ul>
                </li>
                <li><a href="real-wedding-listing.html">Real Wedding</a>
                  
                </li>
                <li><a href="contact-us-2.php">Contact</a>
                  
                </li>
              </ul>
            </div>
          </div>
        </div>        
      </div>
    </div>
  </header>
<!--  end navigation -->
<!-- page banner -->
  <section id="page-banner" class="page-banner" style="background-image: url('images/banner.jpg');"> 
    <div class="overlay-bg"></div>
    <div class="container">
      <div class="banner-dtl text-center">
        <h2 class="banner-heading">Login</h2>
        <div class="breadcrumb-block">
          <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">Login</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
<!-- end page banner -->
 <!-- login form -->
 <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-12"></div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
              <h1 align="center">Login</h1>
              
              <div class="form-group">
                <form action="#" method="post">
                  <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Enter Your Email"/>
                   </div>
                   <div class="form-group"> 
                    <input type="password" class="form-control" name="password" placeholder="Enter Your Password"/>
                  </div>
                   <div class="form-group">
                     <input type="submit" name="submit" value="Login" class="form-control" />
                   </div>
                </form>
              </div>

         </div>     
        <!-- end login form -->
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-12"></div>
          </div>
            
<!-- footer -->
<div id="footer" class="footer-main-block">
    <div class="container">
      <div class="footer-block">
        <div class="row">
          <div class="col-md-4 col-sm-6">
            <div class="about-widget footer-widget">
              <h4 class="footer-heading">About Wedding Team</h4>
              <div class="about-dtl">
                <p>We are the leading wedding portal in the world but beyond that, we are a few romantics who help couples organise their wedding; a unique day to enjoy with family and friends that involves hours of preparation and work.</p>
                <a href="#" class="btn btn-white">Find a Vendor</a>
              </div>
            </div>
          </div>
          <div class="col-md-5 col-sm-6">
            <div class="news-widget footer-widget">
              <h4 class="footer-heading">Latest News</h4>
              <ul>
                <li>
                  <div class="row"> 
                    <div class="col-xs-3">
                      <div class="latest-news-img">
                        <img src="images/footer-news-1.jpg" class="img-responsive" alt="news">
                      </div>
                    </div>
                    <div class="col-xs-9">
                      <div class="latest-news-dtl">
                        <a href="blog-detail.html">Sed ut perspiciatis unde omnis is te natus error sit volup</a>
                        <div class="date">March 22, 2017</div>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="row"> 
                    <div class="col-xs-3">
                      <div class="latest-news-img">
                        <img src="images/footer-news-2.jpg" class="img-responsive" alt="news">
                      </div>
                    </div>
                    <div class="col-xs-9">
                      <div class="latest-news-dtl">
                        <a href="blog-detail.html">Excepteur sint occaecat cupidatat non proident,</a>
                        <div class="date">March 21, 2017</div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="subscribe-widget footer-widget">
              <h4 class="footer-heading">Subscribe Newsletter</h4>
              <form id="subscribe-form" class="subscribe-form">
                <div class="form-group"> 
                  <input type="email" id="mc-email" class="form-control" placeholder="EMAIL ADDRESS">
                  <button type="submit" class="btn btn-white">Subscribe Now</button>
                  <label for="mc-email"></label>
                </div>
              </form>
              <ul class="social-btns">
                <li><a class="btn facebook" href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                <li><a class="btn twitter" href="https://www.twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
                <li><a class="btn pinterest" href="https://www.pinterest.com/" target="_blank"><i class="fa fa-pinterest"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="copyright-block text-center">
      <div class="container">
        <p>&copy; 2019 All rights reserved.</p>
      </div>
    </div>
  </div>
<!-- end footer -->
<!-- jquery -->
<script type="text/javascript" src="js/jquery.min.js"></script>  <!-- jquery library js -->
<script type="text/javascript" src="js/bootstrap.min.js"></script> <!-- bootstrap js -->
<script type="text/javascript" src="js/owl.carousel.js"></script> <!-- owl carousel js -->
<script type="text/javascript" src="js/jquery.ajaxchimp.js"></script> <!-- mail chimp js -->
<script type="text/javascript" src="js/smooth-scroll.js"></script> <!-- smooth scroll js -->
<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script> <!-- magnify popup js --> 
<script type="text/javascript" src="js/waypoints.min.js"></script> <!-- facts count js required for jquery.counterup.js file -->
<script type="text/javascript" src="js/jquery.counterup.js"></script> <!-- facts count js-->
<script type="text/javascript" src="js/menumaker.js"></script> <!-- menu js--> 
<script type="text/javascript" src="js/jquery.share-tooltip.js"></script> <!-- share tooltip js--> 
<script type="text/javascript" src="js/price-slider.js"></script> <!-- price slider / filter js-->
<script type="text/javascript" src="js/bootstrap-datepicker.js"></script> <!-- datepicker js--> 
<script type="text/javascript" src="js/theme.js"></script> <!-- custom js -->  
<!-- end jquery -->
</body>
<!--body end -->
</html>




<?php
  if(isset($_POST['submit']))
  {
    
    $email    = $_POST['email'];
    $password = $_POST['password'];

  echo  $qry = "SELECT * FROM `admin` WHERE `email` = '".$email."'  && `password` = '".$password."' ";

    $run=mysqli_query($con,$qry);
    $row=mysqli_num_rows($run);
   
    if($row < 1)
    {
      ?>
        <script type="text/javascript">
            alert('username and password not invalid');
            window.open('vendor-dashboard.php','_self');
        </script>
      <?php
    }
    else
    {
      $data=mysqli_fetch_assoc($run);
      $id=$data['id'];
      $_SESSION['userid']=$id;
      header('location:vendor-dashboard.php');
    }
  }
?>