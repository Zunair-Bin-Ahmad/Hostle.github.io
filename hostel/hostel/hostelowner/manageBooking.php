<?php   
session_start();
 // if (!isset($_SESSION['email_admin'])) {
 //                  header("location:index.php");
 //        } 
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
    <title>Manage Gallery</title>
     <link rel="shortcut icon" href="../assets/fa.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/responsive.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/buttons.bootstrap4.min.css">
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
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/form-validation.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/app-user.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->
    <?php include 'include/topnav.php'?>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <?php include 'include/sidenav.php'?>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
            </div>
            <div class="content-body">
<?php
                                   if (isset($_SESSION['status']))  {
                                        ?>
                                        <div class=" alert alert-success" ><?php echo $_SESSION['status'];?> </div>
            <?php 
            unset($_SESSION['status']);
                                        
                                    } ?>
                                     <?php
                                   if (isset($_SESSION['status_delete']))  {
                                        ?>
                                        <div class=" alert alert-success" ><?php echo $_SESSION['status_delete'];?> </div>
            <?php 
            unset($_SESSION['status_delete']);
                                        
                                    } ?>
                <!-- users list start -->
                <section class="app-user-list">
                    <!-- list section start -->
                    <div class="card">
                        <div style="padding-bottom: 10px;" class="card-header">
                                    <h4 class="card-title">Booking</h4>
                                    <a style="float: right;" href="add_gallery.php">
                                    <button type="button" class="btn btn-primary">
                                    Add Booking
                                    </button>
                                    </a>  
                                </div>

                        <div class="card-datatable table-responsive pt-0 dataTables_wrapper " style="padding: 10px !important;">
                            <table class="makedatatable table dataTable dtr-column"  >
                                <thead class="thead-light">
                                    <tr>
                                        <th>id</th>
                                        <th>User Id</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>CNIC</th>
                                        <th>Hostel Id</th>
                                        <th>Room</th>
                                        <th>Total</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        include 'include/connection.php';
                                        $sql="SELECT * FROM `booking`";
                                        $run=mysqli_query($conn,$sql);
                                        if (mysqli_num_rows($run)>0) {
                                        while ($row=mysqli_fetch_assoc($run)) {
                                           $id=$row['id'];
                                           $user_id=$row['user_id'];
                                           $username=$row['username'];
                                           $email=$row['email'];
                                           $cnic=$row['cnic'];
                                           $host_id=$row['hostel_id'];
                                           $room=$row['room'];
                                           $total=$row['total'];
                                           $date=$row['date'];
                                           $status=$row['status'];
                                             
                                            
                                        
                                    ?>
                                    <tr>
                                        <td><?php echo "$id" ?></td>
                                        <td><?php echo "$user_id"?></td>
                                        <td><?php echo "$username"?></td>
                                        <td><?php echo "$email"?></td>
                                        <td><?php echo "$cnic"?></td>
                                        <td><?php echo "$host_id"?></td>
                                        <td><?php echo "$room"?></td>
                                        <td><?php echo "$total"?></td>
                                        <td><?php echo "$date"?></td>
                                        <td><?php echo "$status"?></td>
                                        <td>
                                        <!-- <i data-feather='eye'></i> -->
                                            <div class="btn-group">
                                                
                                                
                                                <a class="btn btn-sm dropdown-toggle hide-arrow" data-toggle="dropdown">
                                                    <i data-feather='more-vertical'></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="edit_gallery.php?gallery_id=<?php echo "$id" ?>"><i data-feather='edit'></i> Edit</a>
                                                   <a class="dropdown-item" onclick="confirm_del(<?php echo "$id" ?>)" ><i data-feather='trash-2'></i> Delete</a>
                                                </div>
                                            </div>   
                                        </td>

                                    </tr>
                                <?php }} ?>
                                </tbody>
                            </table>
                        </div>
                        
                    </div>
                    <!-- list section end -->
                </section>
                <!-- users list ends -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <?php include 'include/footer.php'?>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/responsive.bootstrap4.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/buttons.bootstrap4.min.js"></script>
    <script src="app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/pages/app-user-list.js"></script>
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
        $(".makedatatable").DataTable({

            
        });
        function confirm_del(gallery_id) {
           const response = confirm("Are you sure you want to delete gallery image?");
           if (response==true) {
              window.location.href = "delete_gallery.php?gallery_id="+gallery_id
           }
        }
    </script>
</body>
<!-- END: Body-->

</html>