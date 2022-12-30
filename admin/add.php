<?php
require "config.php";
require "model/db.php";
require "model/product.php";
require "model/manufacture.php";
require "model/protype.php";


$product = new Product;
$manu = new Manufacture;
$type = new Protype;

//Protypes
if(isset($_POST['submit_type'])){

    $name = $_POST['type_name'];
    $image = $_FILES['type_image']['name'];

    //goi phuong thuc them
    $type->addType($name,$image);

    //xu ly upload
    $target_dir = "../img/";
    $target_file = $target_dir . basename($_FILES['type_image']['name']);
    move_uploaded_file($_FILES['type_image']['tmp_name'], $target_file);

    // var_dump($_FILES);
    header('location: protype.php');
}

//Manufactures
if(isset($_POST['submit_manu'])){

    $name = $_POST['manu_name'];
    $image = $_FILES['manu_image']['name'];

    //goi phuong thuc them
    $manu->addManu($name,$image);

    //xu ly upload
    $target_dir = "../img/";
    $target_file = $target_dir . basename($_FILES['manu_image']['name']);
    move_uploaded_file($_FILES['manu_image']['tmp_name'], $target_file);

    // var_dump($_FILES);
    header('location: manufacture.php');
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