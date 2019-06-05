<?php
require "DBconnect.php";

class GetEvent extends DBconnect{
     
    public function connection() {
        $this->dbconnection();
    }

public function insertEvent($title,$timestamp,$descriptipn) {
	$stmt=$this->dbconnection()->prepare("INSERT INTO `events` VALUES(?,?,?,?,?,?)");
    $stmt->execute(array(null,$title,$timestamp,$descriptipn,null,null));

    if($stmt->rowCount()){
        echo '<h1 class="thanks">Thanks, The Information Inserted</h1>';
        }else{
        echo '<pre>Unable to send data to DB</pre>';
        }
		}
			
		




}
    
    
    
    


?>