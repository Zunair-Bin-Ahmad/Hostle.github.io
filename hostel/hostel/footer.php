<?php 
include('connection.php');
if (isset($_POST['submit'])) {
    $a=$_POST['Email'];
    $query = "INSERT INTO `subscriber`(`Email`) VALUES ('$a')";
    $run=mysqli_query($conn,$query);
     header("location:index.php");
  }

?>
<footer>
<div class="footer-top pad-bottom-20">
<div class="container">
<div class="footer-content">
<div class="row">
<div class="col-lg-3 col-md-6 mar-bottom-30">
<div class="quick-links" style="float:left;">
<h4>Quick Links</h4>
<ul>
<li><a href="index.php">Home</a></li>
<li><a href="aboutus.php">About</a></li>
<li><a href="hostel_list.php">Hostels</a></li>
<li><a href="services.php">Services</a></li>
<li><a href="#">Contact Us</a></li>
</ul>
</div>
</div>
<div class="col-lg-3 col-md-6 mar-bottom-30">
<div class="footer-contact">
<h4>Contact info</h4>
<ul>
<li>Tel: 000-222-444-66</li>
<li>Email: <a href="#" class="__cf_email__" data-cfemail="#">info@gmail.com</a></li>
<li>Address: Pakpattan Chowk Sahiwal</li>
</ul>
</div>
</div>
<div class="col-lg-6 col-md-6 mar-bottom-30">
<div class="footer-contact">
<div class=" title-white">
<h2 style="text-align: center;">Subscribe to our <span>Newsletter</span></h2>
</div>
<div class="newsletter-form">
<form role="form"  method="post" action="index.php">
<table>
	<tr>
		<td><input type="email" placeholder="Enter your email" name="Email"></td>
		<td><button style="border-radius: 20px; " class="btn btn-orange py-2 mx-2" type="submit" name="submit" >Subscribe</button></td>
	</tr>
</table>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="footer-copyright pad-bottom-20">
<div class="container">
<div class="row">
<div class="col-lg-4 mar-bottom-10">
<div class="copyright-content">
<p>Copyright 2023.<span>♥</span>. All Rights Reserved.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</footer>
