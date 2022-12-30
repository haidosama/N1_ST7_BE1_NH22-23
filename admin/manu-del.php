<?php
require "config.php";
require "model/db.php";
require "model/product.php";


$manu = new Manufacture;

if(isset($_GET['manu_id'])){
   $id = $_GET['manu_id'];
    
    //goi phuong thuc xoa
    $manu->delManu($id);
    header('location:product.php');
}