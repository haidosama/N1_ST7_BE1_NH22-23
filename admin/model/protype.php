<?php 
class Protype extends Db{
    public function delType($id)
    {
        $sql = self::$connection->prepare("DELETE FROM `protypes` WHERE type_id=?");
        $sql->bind_param("i", $id);
        return $sql->execute(); //return an object
    }
    public function addType($name,$image)
    {
        $sql = self::$connection->prepare("INSERT INTO `protypes`(`type_name`,`type_image`) VALUES (?,?)");
        $sql->bind_param("ss",$name,$image); //return an object
        return $sql->execute(); //return an array
    }
    public function getTypeByID($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM protypes WHERE `type_id`=?");
        $sql->bind_param("i", $id);
        return $sql->execute(); //return an object
    }
    public function getAllProtype()
    {
        $sql = self::$connection->prepare("SELECT * FROM protypes");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
}