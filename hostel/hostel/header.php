
<style type="text/css">
	.btn-orange{
		background-color:#fe4e37;
		color:white;
	}
	.btn-orange:hover{
		background-color:#fe4e37;
		color:white;
	}
	.login-content {
    background: transparent;
}
.nice-select.open .list {
display:none;
    width: 100%;
    overflow: auto;
    height: 200px;
    opacity: 1;
    pointer-events: auto;
    -webkit-transform: scale(1) translateY(0);
    -ms-transform: scale(1) translateY(0);
    transform: scale(1) translateY(0);
} 
 .nice-select {
	 display:none !important;
    height: 0px;
} 
select {
	display: block !important;
}

    /* Your existing styles... */

    /* Updated styles for the search bar */
    .navbar-form {
        display: flex;
        align-items: center;
    }

    .form-group {
        margin-right: 10px;
    }

    .form-control {
        border-radius: 4px;
        background-color: #f8f8f8;
        border: 1px solid #ccc;
        color: #333;
        width: 200px;
    }

    .btn-default {
    background-color: #fe4e37;
    color: white;
    border-color: #fe4e37;
    border-radius: 4px;
    padding: 9px;
}

    /* Align search bar at the top */
    .navbar-nav {
        display: flex;
        align-items: center;
    }

    @media (max-width: 767px) {
        .navbar-nav {
            flex-wrap: wrap;
        }
        .navbar-form {
            margin-top: 10px;
        }
    }

</style>

<header class="main_header_area">
<div class="header_menu">
<nav class="navbar navbar-default">
<div class="container">
<div class="navbar-header">
<a class="navbar-brand" href="index-1.html">
<!-- <img alt="logo" src="images/logo.png" class="logo-white" /> -->
<img alt="logo1" src="images/logo-black.png" class="logo-black" />

</a>
</div>

<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

    
    <!-- Rest of the menu items... -->


<ul class="nav navbar-nav" id="responsive-menu">

<li class="dropdown submenu">
<a href="index.php">Home</a>
</li>
<li>
<a href="aboutus.php" >About</a>
<li>
<a href="services.php">Services</a>
</li>
<li>
<a href="hostel_list.php">Hostels</a>
</li>
<li>
<a href="contact.php">Contact Us</a>
</li>
</li>
<li class="dropdown submenu">
        <!-- Search bar code starts here -->
        <form class="navbar-form navbar-left" role="search">
       
                <input type="text" class="form-control" placeholder="Search">
            
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
        <!-- Search bar code ends here -->
        
    </li>
</ul>
<?php if (isset($_SESSION['customer_type_id']) AND $_SESSION['customer_type_id']==2) {   ?>
<div class="nav-btn">
<a href="hostel" class="btn btn-orange">Dashboard</a>
</div>
<?php } ?>
<?php if (isset($_SESSION['id'])) {   ?>
<div class="nav-btn">
<a href="logout.php" class="btn btn-orange">Logout</a>
</div>
<?php }else{ ?>
<div class="nav-btn">
<a href="login.php" class="btn btn-orange">Login</a>
</div>
<?php } ?>
</div>

<div id="slicknav-mobile"></div>
</div>
</nav>

</div>

</header>