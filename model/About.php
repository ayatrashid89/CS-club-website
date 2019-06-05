<?php
require "DBconnect.php";
class About extends DBconnect{

public function getAbout(){
    $get=$this->dbconnection()->query("SELECT * FROM aboutAyat");
    $result=$get-> fetchAll(PDO::FETCH_ASSOC);
    return $result;
}



}

?>