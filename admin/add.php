<?php
require "config.php";
require "model/db.php";
require "model/product.php";
require "model/manufacture.php";
require "model/protype.php";


$product = new Product;
$manu = new Manufacture;
$type = new Protype;

//Manufactures
if(isset($_POST['submit_manu'])){
    $name = $_POST['manu_name'];
    var_dump($name);
    $image = $_FILES['manu_image']['manu_name'];
    var_dump($image);

    //goi phuong thuc them
    $manu->addManu($name,$image);

    //xu ly upload
    $target_dir = "../img/";
    $target_file = $target_dir . basename($_FILES['manu_image']['manu_name']);
    move_uploaded_file($_FILES['manu_image']['tmp_name'], $target_file);

    var_dump($_FILES);
    // header('location: manufacture.php');
}

//Products
if(isset($_POST['submit_product'])){
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_FILES['image']['name'];
    $manu_id = $_POST['manu_id'];
    $type_id = $_POST['type_id'];
    $des = $_POST['des'];
    $feature = isset($_POST['feature'])?1:0;

    //goi phuong thuc them
    $product->addProduct($name,$manu_id,$type_id,$price,$image,$des,$feature);

    
    //xu ly upload
    $target_dir = "../img/";
    $target_file = $target_dir . basename($_FILES['image']['name']);
    move_uploaded_file($_FILES['image']['tmp_name'], $target_file);

    // var_dump($_FILES);
    header('location:product.php');
}