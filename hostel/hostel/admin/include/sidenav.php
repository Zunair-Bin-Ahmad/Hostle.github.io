<?php $page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'],"/")+1); 
?>
<!-- <style type="text/css">
    .badgeown {
    position: absolute;
    top: 3px !important;
    right: 111px !important;
    min-width: 1.429rem;
    min-height: 1.429rem;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 0.786rem;
    line-height: 0.786;
    padding-left: 0.25rem;
    padding-right: 0.25rem;
}

</style> -->

<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li style="margin:auto;margin-top: 2px;" class="nav-item mr-auto"><a class="navbar-logo" href="#"> <!-- <img src="assets/logo.png" alt="logo" width="150px" /> --><h3>Logo</h3> </a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Admin Control</span><i data-feather="more-horizontal"></i>
                </li>
                <li class=" nav-item <?php if($page=='dashboard.php'){ echo 'active'; } ?>"><a class="d-flex align-items-center" href="dashboard.php"><i data-feather='activity'></i><span class="menu-title text-truncate" data-i18n="Email">Dashboard</span></a>
                </li>
                
                <li class="nav-item <?php if($page=='manageGallery.php'|| $page=='add_gallery.php' || $page=='edit_gallery.php'){ echo 'active'; } ?>"><a sty class="d-flex align-items-center" href="manageHostel.php"><i data-feather='airplay'></i><span class="menu-title text-truncate" data-i18n="Email">Manage Hostel</span></a>
                </li>
                <li class="nav-item <?php if($page=='manageCategory.php'|| $page=='add_category.php' || $page=='edit_category.php'){ echo 'active'; } ?>"><a sty class="d-flex align-items-center" href="manageBooking.php"><i data-feather='codepen'></i><span class="menu-title text-truncate" data-i18n="Email">Manage Booking</span></a>
                </li>
                <!-- <li class="nav-item <?php if($page=='manageFurniture.php'|| $page=='add_furniture.php' || $page=='edit_furniture.php'){ echo 'active'; } ?>"><a sty class="d-flex align-items-center" href="manageFurniture.php"><i data-feather='layers'></i><span class="menu-title text-truncate" data-i18n="Email">Manage Furniture</span></a>
                </li> -->
                
            </ul>
        </div>
    </div>