<?php   
session_start();
 if (!isset($_SESSION['email_admin'])) {
                  header("location:index.php");
        }  
        include 'include/connection.php';
       $gallery_id=$_GET['gallery_id'];
 $aempty=''; 
$bnotadd=''; 
$csuccess='';
    include'include/connection.php';
if (isset($_POST['submit'])) {
        $gallery_image=$_FILES['gallery_image']['name']; 
     if (empty($gallery_image)) {
    $gallery_image=$_POST['pgallery_image'];
  }
  else{
     $gallery_image="images/".$_FILES['gallery_image']['name'];
    move_uploaded_file($_FILES['gallery_image']['tmp_name'],$gallery_image);
}

    $sql="UPDATE `gallery` SET `gallery_image`='$gallery_image' WHERE `gallery_id`='$gallery_id'";
    $query=mysqli_query($conn,$sql);
    if (!$query) {
    $bnotadd='<div class=" alert alert-danger" >Gallery image  not updated!</div>';
        }
  
  else{
    $_SESSION['status']="Updated Successfully";
      header('Location: manageGallery.php');
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
    <title>Edit Gallery</title>
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
                                    <h4 class="card-title">Edit Gallery</h4>
                                    <a style="float: right;" href="manageGallery.php">
                                    <button type="button" class="btn btn-primary">
                                    Back
                                    </button>
                                    </a>  
                                </div>
  <?php 
                                        
                                        $sql="SELECT * FROM `gallery` where `gallery_id`='$gallery_id'";
                                        $run=mysqli_query($conn,$sql);
                                        if (mysqli_num_rows($run)>0) {
                                            while ($row=mysqli_fetch_assoc($run)) {
                                                
                                            
                                        
                                    ?>
                                <div class="card-body">
                                    <form method="POST" enctype="multipart/form-data">
                                        
                                        <div class="col-lg-12 row" >
                                            
                                            <div class="col-lg-8" >
                                                 <div class="form-group ">
                                            <label>Gallery Image</label>
                                            <input type="file" class="form-control" name="gallery_image" >
                                        </div> 
                                            </div>
                                            <input type="hidden" value="<?php echo $row['gallery_image'] ?>" name="pgallery_image">
                                             <div class="col-lg-4" >
                                                 <center><img src="<?php echo $row['gallery_image'] ?>" width="100px" ></center>
                                             </div>
                                        </div>
                                       
                                        
                                        <button class="btn btn-primary" name="submit">Submit</button>
                                    </form>
                                </div>
                            <?php }} ?>
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