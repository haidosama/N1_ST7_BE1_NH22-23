<?php
require "config.php";
require "model/db.php";
require "model/user.php";

$user = new User;

if (isset($_GET["btn_submit"])) {
    $name = $_GET["name"];
    $phone = $_GET["phone"];
    $email = $_GET["email"];
    $username = $_GET["username"];
    $password = $_GET["password"];
    $confpassword = $_GET["confpassword"];

    var_dump($_GET);
    $checkEmail = $user->checkEmailExists($email);
    var_dump($checkEmail);
    $checkUsername = $user->checkUsernameExists($username);
    var_dump($checkUsername);

    if ($checkEmail) {
        $msg = "This email is already in use";
        //  header("location:register.php");

    } elseif($checkUsername){
        $msg ="This username is already in use";
        // header("location:register.php");

    }elseif($password != $confpassword){
        $msg ="Password and Confirm Password are not the same";
    //    header("location:register.php");

    }else{
        $user->insertUser($name, $phone, $email, $username, $password);
        var_dump($user->getDataUser($username));
        // header("location:login.php");
    }
}

function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}