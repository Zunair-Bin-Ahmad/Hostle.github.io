<?php 
session_start();
include'include/connection.php';
 $categoryId=$_GET['categoryId'];
 $sql="DELETE FROM `category` WHERE `categoryId`='$categoryId'";
 $run=mysqli_query($conn,$sql);
 if ($run) {
 	$_SESSION['status_delete']="Deleted Successfully";
      header('Location: manageCategory.php');
 }








?>