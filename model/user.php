<?php
class User extends Db
{
    public function getAllUser()
    {
        $sql = self::$connection->prepare("SELECT * FROM user");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getDataUser($username)
    {
        $sql = self::$connection->prepare("SELECT * FROM user WHERE `username` = ?");
        $sql->bind_param("s", $username);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function checkLogin($username, $password)
    {
        $sql = self::$connection->prepare("SELECT * FROM user 
        WHERE `username` = ? AND `password` = ?");
        //$password = md5($password);
        $sql->bind_param("ss", $username, $password);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->num_rows;
        if ($items == 1) {
            return true;
        } else {
            return false;
        }
    }
    public function insertUser($name,$phone,$email,$username,$password){
        $sql = self::$connection->prepare("INSERT INTO `user`(`name`, `phone`, `email`, `username`, `password`) VALUES ('?','?','?','?','?')");
        $sql->bind_param("sssss",$name,$phone,$email,$username,$password);
        $sql->execute();
    }
    // public function insertProductToCart($cid, $cname, $cprice, $cimg, $cqty)
    // {
    //     $sql = self::$connection->prepare("INSERT INTO cart (id,product_name,product_price,product_img,qty) 
    //     VALUES(?,?,?,?,?)");
    //     $sql->bind_param("isisi", $cid, $cname, $cprice, $cimg, $cqty);
    //     $sql->execute(); //return an object
    // }
    public function checkEmailExists($email)
    {
        $sql = self::$connection->prepare("SELECT * FROM user 
        WHERE `email` = ?");
        $sql->bind_param("s", $email);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->num_rows;
        if ($items == 1) {
            return true;
        } else {
            return false;
        }
    }
    public function checkUsernameExists($username)
    {
        $sql = self::$connection->prepare("SELECT * FROM user 
        WHERE `username` = ?");
        $sql->bind_param("s", $username);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->num_rows;
        if ($items == 1) {
            return true;
        } else {
            return false;
        }
    }
    public function reduceBalance($amount,$username){
        $sql = self::$connection->prepare("UPDATE `user` SET `balance` = `balance` - ? WHERE `username` = ?");
        $sql->bind_param("ss", $amount,$username);
        $sql->execute();
    }
}