<?php session_start(); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Hostel</title>

<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />

<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

<link href="css/default.css" rel="stylesheet" type="text/css" />

<link href="css/style.css" rel="stylesheet" type="text/css" />

<link href="css/plugin.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="../../../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
<link rel="stylesheet" href="../../../../cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" />
</head>
<body>

<div id="preloader">
<div id="status"></div>
</div>


<?php include("header.php")?>


<section class="banner">
<div class="slider">
<div class="swiper-container">
<div class="swiper-wrapper">
<div class="swiper-slide" style="background-image: url(images/slider/slider4.jpg)">
<div class="swiper-content">
<div class="slider-logo">
</div>
<h3 data-animation="animated fadeInUp">Globle Hostel</h3>
<h1 data-animation="animated fadeInUp">Welcome TO Our <span>Hostel</span></h1>
<a href="#" data-animation="animated fadeInUp" class="slider-btn btn-or mar-right-10"><i class="fa fa-book"></i> Explore Our Hostel</a>
</div>
</div>
<div class="swiper-slide" style="background-image: url(images/slider/slider2.jpg)">
<div class="swiper-content">
<div class="slider-logo">
</div>
<h3 data-animation="animated fadeInUp">Globle Hostel</h3>
<h1 data-animation="animated fadeInUp">Welcome TO Our <span>Hostel</span></h1>
<a href="#" data-animation="animated fadeInUp" class="slider-btn btn-or mar-right-10"><i class="fa fa-book"></i> Explore Our Hostel</a>
</div>
</div>
<div class="swiper-slide" style="background-image: url(images/slider/slider3.jpg)">
<div class="swiper-content">
<div class="slider-logo">
</div>
<h3 data-animation="animated fadeInUp">Globle Hostel</h3>
<h1 data-animation="animated fadeInUp">Welcome TO Our <span>Hostel</span></h1>
<a href="#" data-animation="animated fadeInUp" class="slider-btn btn-or mar-right-10"><i class="fa fa-book"></i> Explore Our Hostel</a>
</div>
</div>
</div>

<div class="swiper-pagination"></div>
</div>
<div class="overlay"></div>
</div>
</section>


<section class="about-us">
<div class="container">
<div class="section-title">
<h2>About <span>Us</span></h2>
</div>
<div class="about-outer">
<div class="row">
<div class="col-lg-6">
<div class="about-content">
<h3 class="mar-bottom-30">Finest and Luxurious Hotel in the Town</h3>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque varius iaculis gravida. Nunc vel maximus libero. Quisque ligula nisi,
hendrerit et scelerisque et, scelerisque vitae magna. Integer sollicitudin, ex auctor iaculis tempor, mauris odio accumsan odio.
</p>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque varius iaculis gravida. Nunc vel maximus libero. Quisque ligula nisi,
hendrerit et scelerisque et, scelerisque vitae magna. Integer sollicitudin, ex auctor iaculis tempor, mauris odio accumsan odio.
</p>
<a class="btn btn-orange mar-top-10">KNOW MORE ABOUT US <i class="fas fa-angle-double-right"></i></a>
</div>
</div>
<div class="col-lg-6">
<div class="about-image">
<div class="image-box">
<div class="image-1 abt-image">
<img src="images/about1.jpg" alt="image" />
</div>
<div class="image-2 abt-image">
<img src="images/about2.jpg" alt="image" />
</div>
</div>
<div class="image-box">
<div class="image-3 abt-image">
<img src="images/about3.jpg" alt="image" />
</div>
<div class="image-4 abt-image">
<img src="images/about4.jpg" alt="image" />
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="rooms">
<div class="container">
<div class="section-title">
<h2>Explore <span>Rooms</span></h2>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ex neque, sodales accumsan sapien et, auctor vulputate quam donec vitae consectetur
turpis
</p>
</div>
<div class="room-outer">
<div class="row">
<div class="col-lg-4 col-md-6 mar-bottom-30">
<div class="room-item">
<div class="room-image">
<img src="images/room1.jpg" alt="image" />
</div>
<div class="room-content">
<div class="room-title">
<h4>Super Deluxe</h4>
<p>$1200/Night</p>
<div class="deal-rating">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
</div>
<div class="room-services mar-bottom-15">
<ul>
<li><i class="fa fa-bed" aria-hidden="true"></i> 3 Bedrooms</li>
<li><i class="fa fa-wifi" aria-hidden="true"></i> Wifi</li>
</ul>
</div>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum orci nulla, fermentum in faucibus a, interdum eu nibh.</p>
<div class="room-btns mar-top-20">
<a href="#" class="btn btn-black mar-right-10">VIEW DETAILS</a>
<a href="#" class="btn btn-orange">BOOK NOW</a>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 mar-bottom-30">
<div class="room-item">
<div class="room-image">
<img src="images/room2.jpg" alt="image" />
</div>
<div class="room-content">
<div class="room-title">
<h4>Junior Suite</h4>
<p>$1200/Night</p>
<div class="deal-rating">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
</div>
<div class="room-services mar-bottom-15">
<ul>
<li><i class="fa fa-bed" aria-hidden="true"></i> 3 Bedrooms</li>
<li><i class="fa fa-wifi" aria-hidden="true"></i> Wifi</li>
</ul>
</div>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum orci nulla, fermentum in faucibus a, interdum eu nibh.</p>
<div class="room-btns mar-top-20">
<a href="#" class="btn btn-black mar-right-10">VIEW DETAILS</a>
<a href="#" class="btn btn-orange">BOOK NOW</a>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 mar-bottom-30">
<div class="room-item">
<div class="room-image">
<img src="images/room3.jpg" alt="image" />
</div>
<div class="room-content">
<div class="room-title">
<h4>Executive Suite</h4>
<p>$1200/Night</p>
<div class="deal-rating">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
</div>
<div class="room-services mar-bottom-15">
<ul>
<li><i class="fa fa-bed" aria-hidden="true"></i> 3 Bedrooms</li>
<li><i class="fa fa-wifi" aria-hidden="true"></i> Wifi</li>
</ul>
</div>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum orci nulla, fermentum in faucibus a, interdum eu nibh.</p>
<div class="room-btns mar-top-20">
<a href="#" class="btn btn-black mar-right-10">VIEW DETAILS</a>
<a href="#" class="btn btn-orange">BOOK NOW</a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="section-btn pad-0">
<a href="#" class="btn btn-black">EXPLORE ALL ROOMS <i class="fas fa-angle-double-right"></i></a>
</div>
</div>
</section>











<!-- <section class="newsletter">
<div class="container">
<div class="section-title title-white">
<h2>Subscribe to our <span>Newsletter</span></h2>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ex neque, sodales accumsan sapien et, auctor vulputate quam donec vitae consectetur
turpis
</p>
</div>
<div class="newsletter-form">
<form>
<input type="email" placeholder="Enter your email" />
<a href="#" class="btn btn-orange">SIGN UP</a>
</form>
</div>
</div>
</section> -->


<?php include('footer.php') ?>

<div id="back-to-top">
<a href="#"></a>
</div>

<div class="modal fade" id="login" role="dialog">
<div class="modal-dialog">
<div class="modal-content login-content">
<div class="login-image">
<img src="images/logo-black.png" alt="image" />
</div>
<h3>Hello!Sign into your account</h3>
<form>
<div class="form-group">
<input type="email" placeholder="Enter email address" />
</div>
<div class="form-group">
<input type="password" placeholder="Enter password" />
</div>
<div class="form-group form-checkbox">
<input type="checkbox" /> Remember Me
<a href="#">Forgot password?</a>
</div>
</form>
<div class="form-btn">
<a href="#" class="btn btn-orange">LOGIN</a>
<p>Need an Account?<a href="#"> Create your Hotux account</a></p>
</div>
<ul class="social-links">
<li>
<a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a>
</li>
<li>
<a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
</li>
<li>
<a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
</li>
<li>
<a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a>
</li>
</ul>
</div>
</div>
</div>
<div class="modal fade" id="register" role="dialog">
<div class="modal-dialog">
<div class="modal-content login-content">
<div class="login-image">
<img src="images/logo-black.png" alt="image" />
</div>
<h3>Awesome! Create a Hotux Account</h3>
<form>
<div class="form-group">
<input type="text" placeholder="Enter username" />
</div>
<div class="form-group">
<input type="email" placeholder="Enter email address" />
</div>
<div class="form-group">
<input type="password" placeholder="Enter password" />
</div>
<div class="form-group">
<input type="password" placeholder="Confirm password" />
</div>
</form>
<div class="form-btn">
<a href="#" class="btn btn-orange">SIGN UP</a>
</div>
<ul class="social-links">
<li>
<a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a>
</li>
<li>
<a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
</li>
<li>
<a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
</li>
<li>
<a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a>
</li>
</ul>
</div>
</div>
</div>

<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugin.js"></script>
<script src="js/main.js"></script>
<script src="js/custom-nav.js"></script>
<script src="js/custom-swiper1.js"></script>
<script src="js/custom-singledate.js"></script>
<script>(function(){var js = "window['__CF$cv$params']={r:'7d42b0061a583fb3',m:'71o7nE3.gdZ2tcm5uAdfu3lDVMHX5QpfAEYo5RrAR3U-1686243590-0-AWVtXV73d4OWr8Fka02paQAvS3gyUQb6OYvgwfzFiOWS'};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='../../../cdn-cgi/challenge-platform/h/b/scripts/jsd/5da7637f/invisible.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";var _0xh = document.createElement('iframe');_0xh.height = 1;_0xh.width = 1;_0xh.style.position = 'absolute';_0xh.style.top = 0;_0xh.style.left = 0;_0xh.style.border = 'none';_0xh.style.visibility = 'hidden';document.body.appendChild(_0xh);function handler() {var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;if (_0xi) {var _0xj = _0xi.createElement('script');_0xj.nonce = '';_0xj.innerHTML = js;_0xi.getElementsByTagName('head')[0].appendChild(_0xj);}}if (document.readyState !== 'loading') {handler();} else if (window.addEventListener) {document.addEventListener('DOMContentLoaded', handler);} else {var prev = document.onreadystatechange || function () {};document.onreadystatechange = function (e) {prev(e);if (document.readyState !== 'loading') {document.onreadystatechange = prev;handler();}};}})();</script></body>

<!-- Mirrored from htmldesigntemplates.com/html/hotux/bootstrap5/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Jun 2023 17:00:49 GMT -->
</html>
