<?php
     
require "DBconnect.php";

class SignUp extends DBconnect{
     
    public function connection() {
        $this->dbconnection();
    }
public function signupSelect(){

    $getinfo=$this->dbconnection()->query("SELECT * FROM signup");
	$row = $getinfo->fetchAll(PDO::FETCH_ASSOC);
	return $row;
	  }
	  
public function insertSingUp($name,$email,$day,$time,$update,$leader) {
	$stmt=$this->dbconnection()->prepare("INSERT INTO `signup` VALUES(?,?,?,?,?,?,?)");
    $stmt->execute(array(null,$name,$email,$day,$time,$update,$leader));

    if($stmt->rowCount()){
        echo '<h1 class="thanks">Thanks, The Information Inserted</h1>';
        }else{
        echo '<pre>Unable to send data to DB</pre>';
        }
		}
			
		




}
    
    
    
    


?>