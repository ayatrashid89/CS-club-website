<?php
require "DBconnect.php";

class Email extends DBconnect{

    public function connection(){
       $this->dbconnection();
    }
    public function emailSelect(){
        $stmt = $this->dbconnection()->query("SELECT * FROM signup ");
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
     }
    }