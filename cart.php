<?php
require "config.php";
require "model/db.php";
require "model/product.php";
require "model/manufacture.php";
require "model/protype.php";
require "model/cart.php";

$cart = new Cart;
$product = new Product;

//Them vao gio hang
if (isset($_GET['cid'])) {
	$cid = $_GET['cid'];
	$cname = $_GET['cname'];
	$cprice = $_GET['cprice'];
	$cimg = $_GET['cimg'];
	$url = 'http://localhost' . $_GET['url'];
	
	$productcart = $cart->getIdProductCart($cid);
	$check = count($productcart);

	if($check == 0){	
		$cqty = 1;
		$cart->insertProductToCart($cid, $cname, $cprice, $cimg, $cqty);
	}else{

		foreach($productcart as $value){
			$cqty = $value['qty']+1;
			$cart->editQtyProductInCart($cqty, $cid);
		}

		// echo "value['qty']= ";
		// var_dump($cqty);

		
		// $productcart = $cart->getIdProductCart($cid);

		// echo "product= ";
		// var_dump($productcart);

	}
	header("location: $url");
  }

//Xoa san pham khoi gio hang
if(isset($_GET['del'])){
	$id = $_GET['id'];

	$cart->delProductInCart($id);

	header("location: cartview.php");
}
