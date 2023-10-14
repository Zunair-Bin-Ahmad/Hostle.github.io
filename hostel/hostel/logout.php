<?php 

session_start();
             unset($_SESSION['id']);
             unset($_SESSION['customer_type_id']);
             unset($_SESSION['Username']);
             unset($_SESSION['Email']);

header("index.php");

?>