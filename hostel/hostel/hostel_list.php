<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<!-- Mirrored from htmldesigntemplates.com/html/hotux/bootstrap5/roomlist-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Jun 2023 17:01:52 GMT -->
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Hostels List</title>

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
</style>
<body>

<!-- <div id="preloader">
<div id="status"></div>
</div>
 -->

<?php include('header.php')?>


<section class="breadcrumb-outer">
<div class="container">
<div class="breadcrumb-content">
<h2>Room Here</h2>
<nav style="float: left;" aria-label="breadcrumb">
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="#">Home </a></li>
<li class="breadcrumb-item active" aria-current="page">/ Room List</li>
</ul>
</nav>
</div>
</div>
</section>


<section class="room-list">
<div class="container">
<div class="list-content">
<div class="row">
    <?php 
        include 'connection.php';
        $sql="SELECT * FROM `add_hostel`";
        $run=mysqli_query($conn,$sql);
        if (mysqli_num_rows($run)>0) {
        while ($row=mysqli_fetch_assoc($run)) {
        $id=$row['id'];
        $hostimg=$row['Hostel_img'];
        $description=$row['Description']; 
        $hostname=$row['Hostel_name']; 
        $rent=$row['Rent'];  
        $totalroom=$row['Total_room'];         
        ?>
<div class="col-lg-4 col-md-6">
<div class="room-item">
<div class="room-image">
<img  style="height:400px" src="admin/<?php echo $hostimg; ?>" alt="image" />
</div>
<div class="room-content">
<div class="room-title">
<h4><?php echo $hostname; ?></h4>
<p><i class="fa fa-tag"></i><?php echo $rent; ?></p>
<div class="deal-rating">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
</div>
<div class="room-services mar-bottom-15">
<div class="row">
<div class="col-md-6 col-sm-6 col-xs-6"><i class="fa fa-bed" aria-hidden="true"></i><?php echo $totalroom; ?></div>
<div class="col-md-6 col-sm-6 col-xs-6"><i class="fa fa-wifi" aria-hidden="true"></i> Quick Service</div>
</div>
</div>
<p><?php echo $description; ?></p>
<div class="room-btns">
<a href="hosteldetail.php?id=<?php echo $id; ?>" class="btn btn-black mar-right-10">VIEW DETAILS</a>
<a href="booking.php?id=<?php echo $id ?>" class="btn btn-orange">BOOK NOW</a>
</div>
</div>
</div>
</div>
<?php  
 }
}
?>
<!-- <div class="col-md-4 col-sm-12 col-xs-12">
<div class="room-item">
<div class="room-image">
<img src="images/room-list/list9.jpg" alt="image" />
</div>
<div class="room-content">
<div class="room-title">
<h4>Executive Suite</h4>
<p><i class="fa fa-tag"></i> $400/Night</p>
<div class="deal-rating">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
</div>
<div class="room-services mar-bottom-15">
<div class="row">
<div class="col-md-6 col-sm-6 col-xs-6"><i class="fa fa-bed" aria-hidden="true"></i> 3 Bedrooms</div>
<div class="col-md-6 col-sm-6 col-xs-6"><i class="fa fa-wifi" aria-hidden="true"></i> Quick Service</div>
</div>
</div>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum orci nulla, fermentum in faucibus a, interdum eu nibh.</p>
<div class="room-btns">
<a href="#" class="btn btn-black mar-right-10">VIEW DETAILS</a>
<a href="#" class="btn btn-orange">BOOK NOW</a>
</div>
</div>
</div>
</div> -->
</div>
</div>
<!-- <nav class="pagination-content text-center">
<ul class="pagination">
<li class="page-item">
<a href="#" class="page-link"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a>
</li>
<li class="page-item active"><a href="#" class="page-link">1</a></li>
<li class="page-item"><a href="#" class="page-link">2</a></li>
<li class="page-item"><a href="#" class="page-link">3</a></li>
<li class="page-item"><a href="#" class="page-link">4</a></li>
<li class="page-item"><a href="#" class="page-link">...</a></li>
<li class="page-item"><a href="#" class="page-link">10</a></li>
<li>
<a href="#" class="page-link"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
</li>
</ul>
</nav> -->
</div>
</section>


<?php include('footer.php') ?>


<div id="back-to-top">
<a href="#"></a>
</div>



<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugin.js"></script>
<script src="js/main.js"></script>
<script src="js/custom-nav.js"></script>
<script>(function(){var js = "window['__CF$cv$params']={r:'7d42b0360ad59f8b',m:'3qGcXfzJMCZonJdWVActGPVR6SFXCIp09qzuMNmCvcE-1686243598-0-AexTWXt4LfgfvmEOAJ3S/ogtZ5lVwvfJ3p8KijvEwYbd'};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='../../../cdn-cgi/challenge-platform/h/b/scripts/jsd/5da7637f/invisible.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";var _0xh = document.createElement('iframe');_0xh.height = 1;_0xh.width = 1;_0xh.style.position = 'absolute';_0xh.style.top = 0;_0xh.style.left = 0;_0xh.style.border = 'none';_0xh.style.visibility = 'hidden';document.body.appendChild(_0xh);function handler() {var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;if (_0xi) {var _0xj = _0xi.createElement('script');_0xj.nonce = '';_0xj.innerHTML = js;_0xi.getElementsByTagName('head')[0].appendChild(_0xj);}}if (document.readyState !== 'loading') {handler();} else if (window.addEventListener) {document.addEventListener('DOMContentLoaded', handler);} else {var prev = document.onreadystatechange || function () {};document.onreadystatechange = function (e) {prev(e);if (document.readyState !== 'loading') {document.onreadystatechange = prev;handler();}};}})();</script></body>

<!-- Mirrored from htmldesigntemplates.com/html/hotux/bootstrap5/roomlist-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Jun 2023 17:02:03 GMT -->
</html>
