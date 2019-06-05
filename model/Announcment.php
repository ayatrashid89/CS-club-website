<?php
require "DBconnect.php";

class Announcment extends DBconnect{
     
    public function connection() {
        $this->dbconnection();
    }

public function insertAnnouncment($announcment) {
	$stmt=$this->dbconnection()->prepare("INSERT INTO `announcement_ayat` VALUES(?,?)");
    $stmt->execute(array(null,$announcment));

    if($stmt->rowCount()){
        echo '<h1 class="thanks">Thanks, The Information Inserted</h1>';
        }else{
        echo '<pre>Unable to send data to DB</pre>';
        }
		}
			
		




}
    
    
    
    


?>