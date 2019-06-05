<?php

class DBconnect{
    
   protected $hostname;
      protected $username;
      protected $password;
    protected $dbname;
    
    protected function dbconnection(){
       
        $this->hostname = "localhost";
		$this->dbname = "groupDB";
		$this->username = "ayatrashid";
		$this->password = "1234Toto!@#$";
		try{
			$dsn = "mysql:host=".$this->hostname.";dbname=".$this->dbname;
			$pdo = new PDO($dsn,$this->username,$this->password);
			$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            
			return $pdo;
		}catch(PDOException $e){
			echo "Failed to connect: " .$e->getMessage();
		}
		

        
        
    }
    
}




?>