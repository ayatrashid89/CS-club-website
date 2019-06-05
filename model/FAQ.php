<?php
require "DBconnect.php";

class FAQ extends DBconnect{
    
public function faqSelect(){
    $faq=$this->dbconnection()->query("SELECT * FROM faq");
    $result=$faq->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

}
?>