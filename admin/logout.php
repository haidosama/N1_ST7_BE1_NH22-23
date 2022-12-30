<?php 
session_start();

unset($_SESSION['admin']);
unset($_SESSION['name']);

header("location:http://localhost/SG_Project_BE1/index.php"); 
?>
