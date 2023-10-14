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
    <title>Manage Category</title>
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
                                    <h4 class="card-title">Manage Hostel</h4>
                                    <a style="float: right;" href="add_category.php">
                                    <button type="button" class="btn btn-primary">
                                    Add Category
                                    </button>
                                    </a>  
                                </div>

                        <div class="card-datatable table-responsive pt-0 dataTables_wrapper " style="padding: 10px !important;">
                            <table class="makedatatable table dataTable dtr-column"  >
                                <thead class="thead-light">
                                    <tr>
                                        <th>Id</th>
                                        <th>City</th>
                                        <th>Hostel Image</th>
                                        <th>Room 1</th>
                                        <th>Room 2</th>
                                        <th>Room 3</th>
                                        <th>Room 4</th>
                                        <th>Room 5</th>
                                        <th>Description</th>
                                        <th>City Area</th>
                                        <th>Email</th>
                                        <th>Address</th>
                                        <th>Hostal Name</th>
                                        <th>Rent</th>
                                        <th>Net Facility</th>
                                        <th>Washroom</th>
                                        <th>Mess Charges</th>
                                        <th>Electricity Charges</th>
                                        <th>Total room</th>
                                        <th>Contact</th>
                                        <th>Map</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        include 'include/connection.php';
                                        $sql="SELECT * FROM `add_hostel`";
                                        $run=mysqli_query($conn,$sql);
                                        if (mysqli_num_rows($run)>0) {
                                        while ($row=mysqli_fetch_assoc($run)) {
                                         $id=$row['id'];
                                         $city=$row['City'];
                                         $hostimg=$row['Hostel_img'];
                                         $room1=$row['Room_1'];
                                         $room2=$row['Room_2'];
                                         $room3=$row['Room_3'];
                                         $room4=$row['Room_4'];
                                         $room5=$row['Room_5'];
                                         $description=$row['Description'];
                                         $area=$row['City_area'];
                                         $email=$row['Email'];
                                         $address=$row['Address']; 
                                         $hostname=$row['Hostel_name']; 
                                         $rent=$row['Rent']; 
                                         $net=$row['Net_Facility']; 
                                         $washroom=$row['Washroom']; 
                                         $messcharge=$row['Mess_charges']; 
                                         $electcharges=$row['Electricity_charges']; 
                                         $totalroom=$row['Total_room']; 
                                         $contact=$row['Contact']; 
                                         $map=$row['Map']; 
                                         $status=$row['Status'];        
                                            
                              ?>
                                    <tr>
                                        <td><?php echo "$id" ?></td>
                                        <td><?php echo "$city" ?></td>
                                        <td><?php echo "$hostimg" ?></td>
                                        <td><img src="../admin/<?php echo $room1; ?>" style="width: 50px;" alt="image" /></td>
                                        <td><img src="../admin/<?php echo $room2; ?>" style="width: 50px;" alt="image" /></td>
                                        <td><img src="../admin/<?php echo $room3; ?>" style="width: 50px;" alt="image" /></td>
                                        <td><img src="../admin/<?php echo $room4; ?>" style="width: 50px;" alt="image" /></td>
                                        <td><img src="../admin/<?php echo $room5; ?>" style="width: 50px;" alt="image" /></td>
                                        <td><?php echo "$description"?></td>
                                        <td><?php echo "$area" ?></td>
                                        <td><?php echo "$email" ?></td>
                                        <td><?php echo "$address" ?></td>
                                        <td><?php echo "$hostname" ?></td>
                                        <td><?php echo "$rent" ?></td>
                                        <td><?php echo "$net" ?></td>
                                        <td><?php echo "$washroom" ?></td>
                                        <td><?php echo "$messcharge"?></td>
                                        <td><?php echo "$electcharges" ?></td>
                                        <td><?php echo "$totalroom" ?></td>
                                        <td><?php echo "$contact"?></td>
                                        <td><?php echo "$map"?></td>
                                        <td><?php echo "$status"?></td>
                                        <!-- <i data-feather='eye'></i> -->
                                        <td>
                                            <div class="btn-group">
                                                
                                                
                                                <a class="btn btn-sm dropdown-toggle hide-arrow" data-toggle="dropdown">
                                                    <i data-feather='more-vertical'></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="edit_hostel.php?id=<?php echo "$id" ?>"><i data-feather='edit'></i> Edit</a>
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
        function confirm_del(categoryId) {
           const response = confirm("Are you sure you want to delete Category?");
           if (response==true) {
              window.location.href = "delete_category.php?categoryId="+categoryId
           }
        }
    </script>
</body>
<!-- END: Body-->

</html>