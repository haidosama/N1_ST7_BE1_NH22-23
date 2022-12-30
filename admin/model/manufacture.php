<?php 
class Manufacture extends Db{
    
    public function addManu($name,$image)
    {
        $sql = self::$connection->prepare("INSERT INTO `manufacture`(`manu_name`,`manu_image`) VALUES (?,?)");
        $sql->bind_param("ss",$name,$image); //return an object
        return $sql->execute(); //return an array
    }
    public function getManuByID($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM manufacture WHERE `manu_id`=?");
        $sql->bind_param("i", $id);
        return $sql->execute(); //return an object
    }
    public function delManu($id)
    {
        $sql = self::$connection->prepare("DELETE FROM `manufacture` WHERE manu_id=?");
        $sql->bind_param("i", $id);
        return $sql->execute(); //return an object
    }
    public function getAllManufactures()
    {
        $sql = self::$connection->prepare("SELECT * FROM manufacture");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }

}