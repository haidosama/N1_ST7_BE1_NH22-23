<?php
require "config.php";
require "model/db.php";
require "model/protype.php";

$type = new Protype;

if(isset($_GET['id'])){
   $id = $_GET['id'];
    
    //goi phuong thuc xoa
    $type->delType($id);
    header('location: protype.php');
}