<?php
require "DBconnect.php";
class Opportunity extends DBconnect{


// To get Opportunity
public function getOpportunity(){
   $stmt = $this->dbconnection()->query("SELECT * FROM opportunity");
       $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
       return $result;
    }



}



?>