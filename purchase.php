<?php
require "config.php";
require "model/db.php";
require "model/user.php";
require "model/cart.php";

$user = new User;
$cart = new Cart;

$getDataUser = $user->getDataUser($_SESSION['name']);
$getAllCart = $cart->getAllCart();
$total = 0;
foreach ($getAllCart as $value) {
    $total += $value['qty']*$value['product_price'];
}
if($total > $getDataUser[0]['balance']){
    header("location:checkout.php");
}
else{
    $user->reduceBalance($total, $_SESSION['name']);
    $cart->delAllProductInCart();
    header("location:index.php");
}
function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}
?>