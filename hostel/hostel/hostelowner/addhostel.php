<?php   
session_start();
 // if (!isset($_SESSION['email_admin'])) {
 //                  header("location:index.php");
 //        }  
       
 $aempty=''; 
$bnotadd=''; 
$csuccess='';
include'include/connection.php';
if (isset($_POST['submit'])) {
    $a=$_POST['city'];
    $b=$_POST['des'];
    $c=$_POST['area'];
    $d=$_POST['email'];
    $e=$_POST['address'];
    $f=$_POST['hostname'];
    $g=$_POST['rent'];
    $h=$_POST['net'];
    $i=$_POST['wash'];
    $j=$_POST['charges'];
    $k=$_POST['electric'];
    $l=$_POST['totalroom'];
    $m=$_POST['contact'];
    $n=$_POST['map'];
    $image = $_FILES['img0']['tmp_name'];
    move_uploaded_file($_FILES["img0"]["tmp_name"], "../Admin/images/" . $_FILES["img0"]["name"]);
    $location = "images/" . $_FILES["img0"]["name"];
          
    $image = $_FILES['img1']['tmp_name'];
    move_uploaded_file($_FILES["img1"]["tmp_name"], "../Admin/images/" . $_FILES["img1"]["name"]);
    $location1 = "images/" . $_FILES["img1"]["name"];
          
    $image = $_FILES['img2']['tmp_name'];
    move_uploaded_file($_FILES["img2"]["tmp_name"], "../Admin/images/" . $_FILES["img2"]["name"]);
    $location2 = "images/" . $_FILES["img2"]["name"];
          
    $image = $_FILES['img3']['tmp_name'];
    move_uploaded_file($_FILES["img3"]["tmp_name"], "../Admin/images/" . $_FILES["img3"]["name"]);
    $location3 = "images/" . $_FILES["img3"]["name"];

    $image = $_FILES['img4']['tmp_name'];
    move_uploaded_file($_FILES["img4"]["tmp_name"], "../Admin/images/" . $_FILES["img4"]["name"]);
    $location4 = "images/" . $_FILES["img3"]["name"];

    $image = $_FILES['img5']['tmp_name'];
    move_uploaded_file($_FILES["img5"]["tmp_name"], "../Admin/images/" . $_FILES["img5"]["name"]);
    $location5 = "images/" . $_FILES["img5"]["name"];

    $sql="INSERT INTO `add_hostel`(`City`, `Hostel_img`, `Room_1`, `Room_2`, `Room_3`, `Room_4`, `Room_5`, `Description`, `City_area`, `Email`, `Address`, `Hostel_name`, `Rent`, `Net_Facility`, `Washroom`, `Mess_charges`, `Electricity_charges`, `Total_room`, `Contact`, `Map`) VALUES ('$a','$location','$location1','$location2','$location3', '$location4', '$location5','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n')";
    $query=mysqli_query($conn,$sql);
    if (!$query) {
    $bnotadd='<div class="alert alert-danger">Category not added!</div>';
        }
  
  else{
    $csuccess='<div class="alert alert-success">Category Added!</div>';
}
}

     ?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Add Category</title>
    <link rel="shortcut icon" href="../assets/fa.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/editors/quill/katex.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/editors/quill/monokai-sublime.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/editors/quill/quill.snow.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/editors/quill/quill.bubble.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Inconsolata&amp;family=Roboto+Slab&amp;family=Slabo+27px&amp;family=Sofia&amp;family=Ubuntu+Mono&amp;display=swap">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/bordered-layout.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/form-quill-editor.css">
    
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->

</head>


<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->
    <?php
      include 'include/topnav.php';
    ?>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <?php 
     include 'include/sidenav.php';
    ?>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrumb-right">
                        
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- full Editor start -->
                <section class="full-editor">
                    <?php  echo $aempty; ?>
                    <?php  echo $csuccess; ?>
                            <?php  echo $bnotadd; ?>
                            
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Add Category</h4>
                                    <a style="float: right;" href="manageCategory.php">
                                    <button type="button" class="btn btn-primary">
                                    Back
                                    </button>
                                    </a>  
                                </div>

                                <div class="card-body">
                                    <form method="POST" enctype="multipart/form-data">
                                        <div class=" col-lg-12 row">
                                        <div class="col-lg-6">
                                        <div class="form-group">
                                            <?php  
                                             $query ="SELECT * FROM `city` where `status`= 1";
                                            $run=mysqli_query($conn,$query);
                                             ?>
                                            <label>City Name</label>
                                            <select class="form-control" name="city" required>
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
                                            <label>Hostel Image</label>
                                            <input type="file" class="form-control" name="img0" required="">
                                        </div>
                                         <div class="form-group">
                                            <label>Room 1</label>
                                            <input type="file" class="form-control" name="img1" required="">
                                        </div>
                                         <div class="form-group">
                                            <label>Room 2</label>
                                            <input type="file" class="form-control" name="img2" required="">
                                        </div>
                                         <div class="form-group">
                                            <label>Room 3</label>
                                            <input type="file" class="form-control" name="img3" required="">
                                        </div>
                                        <div class="form-group">
                                            <label>Room 4</label>
                                            <input type="file" class="form-control" name="img4" required="">
                                        </div>
                                        <div class="form-group">
                                            <label>Room 5</label>
                                            <input type="file" class="form-control" name="img5" required="">
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <input type="text" class="form-control" name="des" required="">
                                        </div>
                                        <div class="form-group">
                                            <label>City Area</label>
                                            <input type="text" class="form-control" name="area" required="">
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" class="form-control" name="address" required="">
                                        </div>
                                       </div>
                                        <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Hostal Name</label>
                                            <input type="text" class="form-control" name="hostname" required="">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control" name="email" required="">
                                        </div>
                                        <div class="form-group">
                                            <label>Rent</label>
                                            <input type="text" class="form-control" name="rent" required="">
                                        </div>
                                        <div class="form-group" >
                                            <label>Net Facility</label>
                                            <select class="form-control" name="net" required>
                                                <option value="select">Select....</option>
                                                <option value="1">Yes</option>
                                                <option value="2">No</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Attached Washroom</label>
                                            <select class="form-control" name="wash" required>
                                                <option value="select">Select....</option>
                                                <option value="1">Yes</option>
                                                <option value="2">No</option>
                                            </select>
                                        </div>
                                        <div class="form-group" >
                                            <label>Mess Charges</label>
                                            <select class="form-control" name="charges" required>
                                                <option value="select">Select....</option>
                                                <option value="1">Yes</option>
                                                <option value="2">No</option>
                                            </select>
                                        </div>
                                        <div class="form-group" >
                                            <label>Electricity Charges</label>
                                            <select class="form-control" name="electric" required>
                                                <option value="select">Select....</option>
                                                <option value="1">Yes</option>
                                                <option value="2">No</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Total room</label>
                                            <input type="text" class="form-control" name="totalroom" required="">
                                        </div>
                                        <div class="form-group">
                                            <label>Contact</label>
                                            <input type="text" class="form-control" name="contact" required="">
                                        </div>
                                        <div class="form-group">
                                            <label>Map</label>
                                            <input type="text" class="form-control" name="map" required="">
                                        </div>
                                       </div>
                                       </div>
                                    </div>
                                        <button style = "margin-left: 35px;margin-right: 60px;"class="btn btn-primary" name="submit">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- full Editor end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <?php include 'include/footer.php';?>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="app-assets/vendors/js/editors/quill/katex.min.js"></script>
    <script src="app-assets/vendors/js/editors/quill/highlight.min.js"></script>
    <script src="app-assets/vendors/js/editors/quill/quill.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/forms/form-quill-editor.js"></script>
    <!-- END: Page JS-->

    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
    <script type="text/javascript">  
     

</script>  
</body>
<!-- END: Body-->

</html>