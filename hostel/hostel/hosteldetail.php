<?php  session_start();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<!-- Mirrored from htmldesigntemplates.com/html/hotux/bootstrap5/detail-full.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Jun 2023 17:02:03 GMT -->
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Room Detail</title>

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
input[type=text], input[type=email], input[type=number], input[type=search], input[type=password], input[type=tel], input[type=date], input[type=time], textarea, select {
    margin-bottom: 11px !important;
   
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
<h2>Room Details</h2>
<nav style="float:left" aria-label="breadcrumb">
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active" aria-current="page"> / Room Details</li>
</ul>
</nav>
</div>
</div>
</section>
 <?php 
 $result="";
        include 'connection.php';
        $id=$_GET['id'];
        $sql="SELECT * FROM `add_hostel` WHERE id=$id";
        $run=mysqli_query($conn,$sql);
        if (!mysqli_num_rows($run)>0) {
            header("location:index.php");
        }
        $row=mysqli_fetch_assoc($run);
        $id=$row['id'];
        $hostimg=$row['Hostel_img'];
        $roomimg1=$row['Room_1'];
        $roomimg2=$row['Room_2'];
        $roomimg3=$row['Room_3'];
        $roomimg4=$row['Room_4'];
        $roomimg5=$row['Room_5'];
        $description=$row['Description']; 
        $hostname=$row['Hostel_name']; 
        $rent=$row['Rent'];
        $messcharge=$row['Mess_charges'];
        $internet=$row['Net_Facility'];
        $electricity=$row['Electricity_charges']; 
        $bath=$row['Washroom']; 
        $totalroom=$row['Total_room'];   


        if (isset($_POST['submit'])) {
             $user_id=$_SESSION['id'];
             $name=$_POST['name'];
             $email=$_POST['email'];
             $cnic=$_POST['cnic'];
             $hostel_id =$id;
             $room=$_POST['room'];
             $total=$rent;
             $query="INSERT INTO `booking`(`user_id`, `username`, `email`, `cnic`, `hostel_id`, `room`, `total`, `status`) VALUES ('$user_id','$name','$email','$cnic','$hostel_id','$room','$total','pending')";
             $run=mysqli_query($conn,$query);
             if ($run) {
                $result='<div class="alert alert-success" role="alert">Booking Successful!</div>';


    }
    else{
        $result= '<div class="alert alert-danger" role="alert">Booking Failed! Please try again.</div>';

    }
  
             }     
        ?>

<section class="details">
<div class="container">
    <?php echo $result; ?>
    <br>
<div class="detail-slider">
<div class="slider-1 slider-for">
<div class="detail-slider-item">
<img src="admin/<?php echo $hostimg; ?>" alt="image" />
</div>
<!-- <div class="detail-slider-item">
<img src="images/detail-slider/slider9.jpg" alt="image" />
</div> -->
</div>
<div class="slider-1 slider-nav">
<div class="detail-slider-item">
<img src="admin/<?php echo $roomimg1; ?>" alt="image" />
</div>
<div class="detail-slider-item">
<img src="admin/<?php echo $roomimg2; ?>" alt="image" />
</div>
<div class="detail-slider-item">
<img src="admin/<?php echo $roomimg3; ?>" alt="image" />
</div>
<div class="detail-slider-item">
<img src="admin/<?php echo $roomimg4; ?>" alt="image" />
</div>
<div class="detail-slider-item">
<img src="admin/<?php echo $roomimg5; ?>" alt="image" />
</div>
<div class="detail-slider-item">
<img src="admin/<?php echo $hostimg; ?>" alt="image" />
</div>
</div>
</div>
<div class="detail-content">
<div class="detail-title">
<div class="title-left">
<h3><?php echo $hostname; ?></h3>
</div>
<div class="title-right pull-right">
<div class="title-price">
<h3>$<?php echo $rent; ?><span> / Night</span></h3>
</div>
</div>
</div>
<div class="detail-overview">
<div class="row">
<div class="col-lg-8">
<div class="overview-outer">
<div class="overview-content mar-bottom-30">
<h4>Overview</h4>
<p>
<?php echo $description; ?>
</p>

</div>
<div class="price-table">
<h4>Price and Rates(/Night)</h4>
<table class="table table-bordered mar-0">
<thead>
<tr>
<td>Rent Charges</td>
<td>Mess Charges</td>
<td>Net Facility</td>
<td>Electricity Charges</td>
<td>Attached Washroom</td>
<td>Total Room</td>
</tr>
</thead>
<tbody>
<tr>
<td>$<?php echo $rent; ?></td>
<td>$<?php echo $messcharge; ?></td>
<td><?php echo $internet; ?></td>
<td><?php echo $electricity; ?></td>
<td><?php echo $bath; ?></td>
<td><?php echo $totalroom; ?></td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
<section class="detail-reviews" style="margin-top:18px; padding: 25px 0 60px">
<div class="container"> 
<h4>Booking Now</h4>
 

<!--Login Before Login-->
  
<form  method="post">
<div class="row">                               
<div class="form-group col-lg-12">
<input type="text"  class="form-control" placeholder="Your Name" name="name"/>
</div>
<div class="form-group col-lg-12">
<input required type="number" class="form-control"placeholder="Enter your Cnic#" name="cnic"/>
</div>
<div class="form-group col-lg-12">
<input required type="email" class="form-control"placeholder="Email" name="email"/>
</div>
<div class="form-group col-lg-12">
<input   required type="number" class="form-control" placeholder="NO. of Rooms" name="room"/>
</div>
</div>
<?php if (isset($_SESSION['id'])) {
   ?>
<button type="submit" class="btn btn-block" name="submit" style="background-color: #fe4e37;color: white;">Book Hostel</button>

<?php
}else{ ?>
<div>
    please login first!
</div>

<?php } ?>

</div>
</form>


</form>
</div>
</section>
</div>
</div>
</div>
</section>






<?php include('footer.php') ?>





<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugin.js"></script>
<script src="js/main.js"></script>
<script src="js/custom-nav.js"></script>
<script src="js/custom-singledate.js"></script>
<script src="js/map.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB4JwWo5VPt9WyNp3Ne2uc2FMGEePHpqJ8&amp;callback=initMap" async defer></script>
<script>(function(){var js = "window['__CF$cv$params']={r:'7d42b03a78dd3fb3',m:'iisNhRmxk8BdUjNAV2ZL6ip9TzhTSajv3M7.JZGPg.I-1686243598-0-AftxipgvIn+71cX7VuShi9FSl93owXuj7Je7skr5o0RU'};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='../../../cdn-cgi/challenge-platform/h/b/scripts/jsd/5da7637f/invisible.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";var _0xh = document.createElement('iframe');_0xh.height = 1;_0xh.width = 1;_0xh.style.position = 'absolute';_0xh.style.top = 0;_0xh.style.left = 0;_0xh.style.border = 'none';_0xh.style.visibility = 'hidden';document.body.appendChild(_0xh);function handler() {var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;if (_0xi) {var _0xj = _0xi.createElement('script');_0xj.nonce = '';_0xj.innerHTML = js;_0xi.getElementsByTagName('head')[0].appendChild(_0xj);}}if (document.readyState !== 'loading') {handler();} else if (window.addEventListener) {document.addEventListener('DOMContentLoaded', handler);} else {var prev = document.onreadystatechange || function () {};document.onreadystatechange = function (e) {prev(e);if (document.readyState !== 'loading') {document.onreadystatechange = prev;handler();}};}})();</script></body>

<!-- Mirrored from htmldesigntemplates.com/html/hotux/bootstrap5/detail-full.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Jun 2023 17:02:22 GMT -->
</html>
