
<?php 
include('connection.php');
if (isset($_POST['submit'])) {
    $a=$_POST['choice'];
    $b=$_POST['user'];
    $c=$_POST['email'];
    $d=$_POST['phone'];
    $e=$_POST['city'];
    $f=$_POST['pass'];
    $g=$_POST['birth'];
    $query = "INSERT INTO `signup`(`customer_type_id`, `Username`, `Email`, `Phone_no`, `City_id`, `Password`, `Date_of_Birth`) VALUES ('$a','$b','$c','$d','$e','$f','$g')";
    $run=mysqli_query($conn,$query);
    if (!$run) {
            echo '<script>alert("Oops try again!");</script>';

    }
    else{
            echo '<script>alert("Your Account created Successfully!");</script>';

    }
  }





 ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<!-- Mirrored from htmldesigntemplates.com/html/hotux/bootstrap5/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Jun 2023 17:03:21 GMT -->
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Login| Hotux</title>

<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />

<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

<link href="css/default.css" rel="stylesheet" type="text/css" />

<link href="css/style.css" rel="stylesheet" type="text/css" />

<link href="css/plugin.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="../../../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
<link rel="stylesheet" href="../../../../cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" />
</head>
<style type="text/css">
	.nice-select {
    width:100%;
    color: none;
}
.nice-select .list {
    width: 100%;
    }
    .breadcrumb-item+.breadcrumb-item::before {
    display: none;

}
   .current{
  	color:black !important;
  }
  .login-content .form-btn a.btn-orange {
    width: 100%;
    border-radius: 15px;
    margin-bottom: 15px;
}
</style>
<body>

<div id="preloader">
<div id="status"></div>
</div>


<?php include('header.php')?>


<section class="breadcrumb-outer">
<div class="container">
<div class="breadcrumb-content">
<h2>Signup</h2>
<nav style="float:left" aria-label="breadcrumb">
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">/ Signup</li>
</ul>
</nav>
</div>
</div>
</section>

<section class="login">
    <form method="post">
<div class="container">
    <center>
<div class="row">
    <div class="col-lg-12 col-md-12">
  <h3>Create your account</h3>
  
  
<div class="col-lg-6 col-md-6">
<div class="login-content pad-0">

	<div>
    <?php  
     $query ="SELECT * FROM `customer_type` where `status`= 1";
            $run=mysqli_query($conn,$query);
    ?>
<select name="choice" class="form-group" required>
  <option value="">Select Account Type</option>
 <?php if(mysqli_num_rows($run)>0){
    while ($data=mysqli_fetch_assoc($run)) {  ?>
        <option value="<?php echo $data['id'] ?>"><?php echo $data['Name'] ?></option>
   
  <?php   } 
            } 
            ?>
</select>
</div>
<div class="form-group">
<input type="text" placeholder="Enter username" name= "user" required/>
</div>
<div class="form-group">
<input type="email" placeholder="Enter email address" name= "email" required/>
</div>
<div class="form-group">
<input type="number" placeholder="Enter Phone No" name= "phone" required/>
</div>

</div>
</div> 
<div class="col-lg-6 col-md-6">
<div class="login-content pad-0">

  <div>
    <?php  
     $query ="SELECT * FROM `city` where `status`= 1";
            $run=mysqli_query($conn,$query);
    ?>
<select name="city" class="form-group" required>
  <option value="">Choose City</option>
 <?php if(mysqli_num_rows($run)>0){
    while ($data=mysqli_fetch_assoc($run)) {  ?>
        <option value="<?php echo $data['id'] ?>"><?php echo $data['Name'] ?></option>
   
  <?php   } 
            } 
            ?>
</select>
</div>
<div class="form-group">
<input type="password" placeholder="Enter password" name= "pass" required/>
</div>
<div class="form-group">
<input type="password" placeholder="Confirm password"  name= "confirm" required/>
</div>
<div class="form-group">
<input type="Date" placeholder="Enter D-O-B" name= "birth" required/>
</div>


  
</div>
</div>
<center>
<button style ="margin-left: 10px;margin-right: 50px;" type="submit" name= "submit" class="btn btn-orange">SIGN UP</button>
<p style="margin-top: 15px;">Already have an Account?<a href="login.php" style="color: #fe4e37;"> Click here to Login</a></p></center>
</div>
</div>
</center>
</div>
</form>
</section>


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
<script>
  $('select, .form-control').css('display','block');
 var selects = document.getElementsByTagName('select');
for (var i = 0; i < selects.length; i++) {
    selects[i].style.display = 'block';
}

var formControls = document.getElementsByClassName('form-control');
for (var j = 0; j < formControls.length; j++) {
    formControls[j].style.display = 'block';
}

  </script>
<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugin.js"></script>
<script src="js/main.js"></script>
<script src="js/custom-nav.js"></script>
<script>(function(){var js = "window['__CF$cv$params']={r:'7d42b0c2d89f9f8b',m:'awVx_xax1Tt7yMUE7UYFi0UmC9g0l.XIPNqr9fyDf_E-1686243620-0-ATXxR38oF1hEdT5y+97ckVRjbUB8RiFjqCLosjqWypLx'};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='../../../cdn-cgi/challenge-platform/h/b/scripts/jsd/5da7637f/invisible.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";var _0xh = document.createElement('iframe');_0xh.height = 1;_0xh.width = 1;_0xh.style.position = 'absolute';_0xh.style.top = 0;_0xh.style.left = 0;_0xh.style.border = 'none';_0xh.style.visibility = 'hidden';document.body.appendChild(_0xh);function handler() {var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;if (_0xi) {var _0xj = _0xi.createElement('script');_0xj.nonce = '';_0xj.innerHTML = js;_0xi.getElementsByTagName('head')[0].appendChild(_0xj);}}if (document.readyState !== 'loading') {handler();} else if (window.addEventListener) {document.addEventListener('DOMContentLoaded', handler);} else {var prev = document.onreadystatechange || function () {};document.onreadystatechange = function (e) {prev(e);if (document.readyState !== 'loading') {document.onreadystatechange = prev;handler();}};}})();</script></body>

<!-- Mirrored from htmldesigntemplates.com/html/hotux/bootstrap5/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Jun 2023 17:03:21 GMT -->
</html>
