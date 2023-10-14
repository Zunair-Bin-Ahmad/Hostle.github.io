<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<!-- Mirrored from htmldesigntemplates.com/html/hotux/bootstrap5/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Jun 2023 17:03:20 GMT -->
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Cart | Hotux</title>

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

<div id="preloader">
<div id="status"></div>
</div>

<?php include('header.php')?>


<section class="breadcrumb-outer">
<div class="container">
<div class="breadcrumb-content">
<h2>Cart</h2>
<nav style="float: left;" aria-label="breadcrumb">
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="#">Home </a></li>
<li class="breadcrumb-item active" aria-current="page"> / Cart</li>
</ul>
</nav>
</div>
</div>
</section>


<section id="cart-main" class="cart-main">
<div class="container">
<div class="cart-inner">
<div class="cart-table-list">
<div class="order-list">
<table class="shop_table rt-checkout-review-order-table">
<thead>
<tr>
<th></th>
<th class="product-name">Username</th>
<th class="product-name">Email</th>
<th class="product-name">CNIC</th>
<th class="product-name">Hostel ID</th>
<th class="product-name">Room</th>
<th class="product-total">Total</th>
<th class="product-price">Date</th>
<th class="product-quantity">Status</th>
</tr>
</thead>
<tbody>
    <?php 
                                        include 'connection.php';
                                        $sql="SELECT * FROM booking LEFT JOIN add_hostel ON booking.hostel_id = add_hostel.id;
";
                                        $run=mysqli_query($conn,$sql);
                                        if (mysqli_num_rows($run)>0) {
                                        while ($row=mysqli_fetch_assoc($run)) {
                                           $id=$row['id'];
                                           $username=$row['username'];
                                           $email=$row['email'];
                                           $cnic=$row['cnic'];
                                           $host_id=$row['hostel_id'];
                                           $room=$row['room'];
                                           $total=$row['total'];
                                           $date=$row['date'];
                                           $status=$row['status'];
                                           $Hostel_name=$row['Hostel_name'];
                                             
                                            
                                        
                                    ?>
<tr>
                                        <td><?php echo $id ?></td>
                                        <td><?php echo $username?></td>
                                        <td><?php echo $email?></td>
                                        <td><?php echo $cnic?></td>
                                        <td><?php echo $Hostel_name ?></td>
                                        <td><?php echo $room?></td>
                                        <td><?php echo $total?></td>
                                        <td><?php echo $date?></td>
                                        <td><?php echo $status?></td>
                                        <td>
</tr>
<?php }} ?>
</tbody>
</table>
</div>
<!-- </div>
<div class="checkout-order">
<h4 class="mar-bottom-20">Cart Totals</h4>
<div class="order-list">
<table class="shop_table rt-checkout-review-order-table">
<thead>
<tr>
<th class="product-name">Product</th>
<th class="product-total">Total</th>
</tr>
</thead>
<tbody>
<tr class="cart_item">
<td class="product-name">Hot water bag&nbsp; <strong class="product-quantity">× 1</strong></td>
<td class="product-total">
<span class="rt-Price-amount"><span>$</span>35.00</span>
</td>
</tr>
</tbody>
<tfoot>
<tr class="cart-subtotal">
<th>Subtotal</th>
<td>
<span class="rt-Price-amount"><span>$</span>35.00</span>
</td>
</tr>
<tr class="rt-shipping-totals shipping">
<th>Shipping</th>
<td data-title="Shipping">Enter your address to view shipping options.</td>
</tr>
<tr class="order-total">
<th>Total</th>
<td>
<strong><span class="rt-Price-amount"><span>$</span>35.00</span></strong
                      >
</td>
</tr>
</tfoot>
</table>
</div>
</div> -->
<!-- <div class="checkout-place-order">
<p class="mar-bottom-15">
Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our
<a href="#">privacy policy</a>.
</p>
<a href="#" class="btn btn-orange">Proceed to Checkout</a>
</div> -->
</div>
</div>
</section>


<?php include('footer.php')?>

<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugin.js"></script>
<script src="js/main.js"></script>
<script src="js/custom-nav.js"></script>
<script>(function(){var js = "window['__CF$cv$params']={r:'7d42b0b9e82f9f8b',m:'SLSeRNwjb_99obEn17VYo1KrdTuka97RpM0TwjTG.Pk-1686243619-0-AQ8/+6tRzQjvA2nBEEJaikfZmWp3/DuAWRpcN0xGj5kL'};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='../../../cdn-cgi/challenge-platform/h/b/scripts/jsd/5da7637f/invisible.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";var _0xh = document.createElement('iframe');_0xh.height = 1;_0xh.width = 1;_0xh.style.position = 'absolute';_0xh.style.top = 0;_0xh.style.left = 0;_0xh.style.border = 'none';_0xh.style.visibility = 'hidden';document.body.appendChild(_0xh);function handler() {var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;if (_0xi) {var _0xj = _0xi.createElement('script');_0xj.nonce = '';_0xj.innerHTML = js;_0xi.getElementsByTagName('head')[0].appendChild(_0xj);}}if (document.readyState !== 'loading') {handler();} else if (window.addEventListener) {document.addEventListener('DOMContentLoaded', handler);} else {var prev = document.onreadystatechange || function () {};document.onreadystatechange = function (e) {prev(e);if (document.readyState !== 'loading') {document.onreadystatechange = prev;handler();}};}})();</script></body>

<!-- Mirrored from htmldesigntemplates.com/html/hotux/bootstrap5/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Jun 2023 17:03:21 GMT -->
</html>
