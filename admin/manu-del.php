<?php
require "config.php";
require "model/db.php";
require "model/manufacture.php";

$manu = new Manufacture;

if(isset($_GET['id'])){
   $id = $_GET['id'];
    
    //goi phuong thuc xoa
    $manu->delManu($id);
    header('location: manufacture.php');
}