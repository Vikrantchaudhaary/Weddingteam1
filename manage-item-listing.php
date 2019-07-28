<?php
  
include('dbcon.php');


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
<title>Wedding Team — Best Vendor Service Provider</title>
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
<link href="css/menumaker.css" rel="stylesheet" type="text/css"/> <!-- menu css -->
<link href="css/owl.carousel.css" rel="stylesheet" type="text/css"/> <!-- owl carousel css -->
<link href="css/magnific-popup.css" rel="stylesheet" type="text/css"/> <!-- magnify popup css -->
<link href="css/datepicker.css" rel="stylesheet" type="text/css"/> <!-- datepicker css -->
<link href="css/flaticon.css" rel="stylesheet" type="text/css"/> <!-- flaticon css -->
<link href="css/style.css" rel="stylesheet" type="text/css"/> <!-- custom css -->
<link href="css/stucture.css" rel="stylesheet" type="text/css"/> <!-- stucture css -->

<style>

.catagory-container{
	width: 100%;
	display: block;
	margin: 0 auto;
	overflow: hidden;
}

.catagory-item{
	float: left;
	width: 14%;
	background-color: #D6D4D5;
	padding: 20px 0;
	text-align: center;
	cursor: pointer;
	font-size: 15px;
	color: black;
}

.catagory-item:hover{
	background-color: #FF4061;
	
}

.block-container{
	width: 100%;
	display: block;
	margin: 0 auto;
}

.weding-item{
	box-sizing: border-box;
	float: left;
	padding: 2px;
	width: 20%;
	height: 150px;
	transition: all 0.4s ease-in-out;
}

.hide{
	transform: scale(0);
	width: 0;
	padding: 0;
	transition: all 0.4 ease-in-out;
}

.edit-btn{
	text-align: center;
	
}

.bttn{
	border: 1px solid #FF4061;
	background: none;
	padding: 10px 20px;
	font-size: 20px;
	font-family: "montserrat";
	cursor: pointer;
	margin: 10px;
	transition: 0.8s;
	overflow: hidden;
}

.bttn1:hover{
	color: #fff;
	background: #FF4061;
}

.bttn::before{
	content: "";
	position: absolute;
	left: 0;
	
	background: #FF4061;
	
}

</style>

<!-- end theme style -->
<!--Start of Tawk.to Script-->
<script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/5d341a8f9b94cd38bbe879eb/default';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();
  </script>
  <!--End of Tawk.to Script-->


<script src="jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
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
      
      <!-- register popup -->
      <div class="modal fade register-model" id="register-model" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h5 class="modal-title text-center">Register</h5>
            </div>
            <div class="modal-body request-model-body text-center">
              <form>
                <div class="form-group">
                  <input type="text" class="form-control" id="reg_name" placeholder="Enter Your Name"/>
                  <input type="email" class="form-control" id="reg_email" placeholder="Enter Your Email"/>
                  <input type="password" class="form-control" id="reg_password" placeholder="Enter Your Password"/>
                  <input type="password" class="form-control" id="reg_confirm-password" placeholder="Confirm Your Password"/>
                </div>
                <button type="submit" class="btn btn-default">Register</button>
              </form>
            </div>            
          </div>
        </div>
      </div>
      <!-- end register popup -->
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
                    <li><a href="help.html">Help</a></li>
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
        <h2 class="banner-heading">Manage item listing</h2>
        <div class="breadcrumb-block">
          <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">Manage item listing</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
<!-- end page banner -->
<!-- manage item listing -->
  <section id="manage-item-listing" class="manage-item-listing-main-block">
    <div class="container">
      <ul class="add-listing-tabs general-nav-tabs tabs">
        <li><a href="vendor-dashboard.php" class="btn btn-default"><span class="badge">Dashboard</span></a></li>
        <li><a href="#" class="active btn btn-default"><span class="badge">Manage Listing</span></a></li> 
        <li><a href="vendor-profile.html" class="btn btn-default"><span class="badge">My Profile</span></a></li>
        <li><a href="add-listing.php" class="btn btn-default"><span class="badge">Add Listing</span></a></li>
        <li><a href="pricing-table.html" class="btn btn-default"><span class="badge">Pricing Plan</span></a></li>
      </ul>
	  <div class="catagory-container">
	  <p class="catagory-item" id="wedding_dj's">Wedding DJ's</p>
	   <p class="catagory-item" id="bridal_mahendi">Menhandi</p>
	   <p class="catagory-item" id="bridal_makeup">Makeup</p>
	   <p class="catagory-item" id="wedding_cakes">Cakes</p>
	   
	   <p class="catagory-item" id="wedding_decorators">Decorators</p>
	   <p class="catagory-item" id="wedding_photographers">Photographers</p>
	   <p class="catagory-item" id="wedding_venue">Venue</p>
	  </div>
	  
	 <!-- <div class="block-container" >
	    <img src="venue1.jpg" class="weding-item Venue">
		<img src="venue2.jpg" class="weding-item Venue">
		<img src="venue3.jpg" class="weding-item Venue">
		<img src="decorators1.jpg" class="weding-item decorators">
		<img src="decorators2.jpg" class="weding-item decorators">
		<img src="decorators3.jpg" class="weding-item decorators">
		<img src="photographer1.jpeg" class="weding-item Photographers">
		<img src="photographer2.jpeg" class="weding-item Photographers">
		<img src="photographer3.jpeg" class="weding-item Photographers">
		<img src="mehndi1.jpg" class="weding-item mehndi">
		<img src="mehndi2.jpg" class="weding-item mehndi">
		<img src="mehndi3.jpg" class="weding-item mehndi">
		<img src="mehndi4.jpg" class="weding-item mehndi">
		<img src="makeup1.jpg" class="weding-item makeup">
		<img src="makeup2.jpg" class="weding-item makeup">
		<img src="makeup3.jpg" class="weding-item makeup">
		<img src="cake1.jpg" class="weding-item cake">
		<img src="cake2.jpg" class="weding-item cake">
		<img src="cake3.jpg" class="weding-item cake">
		<img src="cake4.jpg" class="weding-item cake">
		<img src="cake5.jpg" class="weding-item cake">
	  </div>-->
	  
	  
     <div class="manage-item-listing-block" >
        <table>
          <tr class="top-heading-row">
            <th class="vendor-img">Image</th>
            <th class="title">Title</th>
            <th class="address">Address</th>
            <th class="price">Price</th>
            <th class="action-icons">Action</th>
          </tr>
		 </table>
		 <table id="things">
          <tr>
            <td class='vendor-img'><img src='images/vendor-profile-1.jpg' width='200' class='img-responsive' alt='vendor-img'></td>
            <th class='title'>Varundavan Party Plot</th>
            <td class='address'>Nr. Judges Bunglow, Ahmedabad</td>
            <td class='price'>$750</td>
            <td class='action-icons'>
              <div class='table-editable-icon'>
                <a href='#'><i class='fa fa-edit' aria-hidden='true'></i></a>
                <a href='#'><i class='fa fa-trash-o' aria-hidden='true'></i></a>
              </div>
            </td>
          </tr>
		 
		  </table>
		  
		   
      
    </div>
		 
      <!--    <tr>
            <td class="vendor-img"><img src="images/vendor-profile-2.jpg" width="200" class="img-responsive" alt="vendor-img"></td>
            <th class="title">Varundavan Party Plot</th>
            <td class="address">Nr. Judges Bunglow, Ahmedabad</td>
            <td class="price">$750</td>
            <td class="action-icons">
              <div class="table-editable-icon">
                <a href="#"><i class="fa fa-edit" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
              </div>
            </td>
          </tr>
          <tr>
            <td class="vendor-img"><img src="images/vendor-profile-3.jpg" width="200" class="img-responsive" alt="vendor-img"></td>
            <th class="title">Varundavan Party Plot</th>
            <td class="address">Nr. Judges Bunglow, Ahmedabad</td>
            <td class="price">$750</td>
            <td class="action-icons">
              <div class="table-editable-icon">
                <a href="#"><i class="fa fa-edit" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
              </div>
            </td>
          </tr>
          <tr>
            <td class="vendor-img"><img src="images/vendor-profile-1.jpg" width="200" class="img-responsive" alt="vendor-img"></td>
            <th class="title">Varundavan Party Plot</th>
            <td class="address">Nr. Judges Bunglow, Ahmedabad</td>
            <td class="price">$750</td>
            <td class="action-icons">
              <div class="table-editable-icon">
                <a href="#"><i class="fa fa-edit" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
              </div>
            </td>
          </tr>
          <tr>
            <td class="vendor-img"><img src="images/vendor-profile-4.jpg" width="200" class="img-responsive" alt="vendor-img"></td>
            <th class="title">Varundavan Party Plot</th>
            <td class="address">Nr. Judges Bunglow, Ahmedabad</td>
            <td class="price">$750</td>
            <td class="action-icons">
              <div class="table-editable-icon">
                <a href="#"><i class="fa fa-edit" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
              </div>
            </td>
          </tr>
        </table>
      </div>-->
    </div>
  </section>
<!-- end manage item listing -->
<!-- footer -->
  <div id="footer" class="footer-main-block">
    <div class="container">
      <div class="footer-block">
        <div class="row">
          <div class="col-md-4 col-sm-6">
            <div class="about-widget footer-widget">
              <h4 class="footer-heading">About Wedding Team</h4>
              <div class="about-dtl">
                <p>Sed ut perspiciatis unde omnis iste natus error volup tatem.</p>
                <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam cor poris suscipit labo riosam.</p>
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
        <p>&copy; 2017 All rights reserved.</p>
      </div>
    </div>
  </div>
<!-- end footer -->

<script>

$(document).ready(function(){
                $('.catagory-item').click(function(){
                  var catagory = $(this).attr('id');
                 // alert(catagory);
               var subcat_select = document.getElementById("things");

               var url = 'thing.php?category_id= ' + catagory;
               var xhr = new XMLHttpRequest();

                xhr.open('GET', url, true);
								xhr.setRequestHeader('Cache-Control', 'no-cache');
                xhr.onreadystatechange = function (){
                    if(xhr.readyState == 4 && xhr.status == 200){
                    subcat_select.innerHTML = xhr.responseText;
                    } 
                }
                xhr.send();
                   

								});
							});	


							

</script>

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