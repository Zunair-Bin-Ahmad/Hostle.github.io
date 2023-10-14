<?php 
session_start();
include'include/connection.php';
 $furniture_id=$_GET['furniture_id'];
 $sql="DELETE FROM `furniture` WHERE `furniture_id`='$furniture_id'";
 $run=mysqli_query($conn,$sql);
 if ($run) {
 	$_SESSION['status_delete']="Deleted Successfully";
      header('Location: manageFurniture.php');
 }








?>