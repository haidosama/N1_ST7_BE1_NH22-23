<?php 
session_start();

require "config.php";
require "model/db.php";
require "model/cart.php";

$cart = new Cart;

unset($_SESSION['name']);
unset($_SESSION['admin']);

$cart->delAllProductInCart();

header("location:index.php"); 
?>
