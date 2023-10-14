<?php 
session_start();
include'include/connection.php';
 $gallery_id=$_GET['gallery_id'];
 $sql="DELETE FROM `gallery` WHERE `gallery_id`='$gallery_id'";
 $run=mysqli_query($conn,$sql);
 if ($run) {
 	$_SESSION['status_delete']="Deleted Successfully";
      header('Location: manageGallery.php');
 }








?>