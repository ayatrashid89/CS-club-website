<?php
require "DBconnect.php";

class Event extends DBconnect{

    public function connection(){
       $this->dbconnection();
    }

    public function eventSelect(){
       $stmt = $this->dbconnection()->query("SELECT * FROM events");
       $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
       return $result;
    }
    public function annoicmentSelect(){
        $stmt = $this->dbconnection()->query("SELECT * FROM announcement_ayat");
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
     }

    public function insertEvent($title,$timestamp,$description){
       $stmt = $this->dbconnection()->prepare("INSERT INTO events VALUES(?,?,?,?,?)");
       $stmt->execute(array(NULL,$title,$timestamp,$description,NULL));

        if($stmt->rowCount()){
        echo '<h1>Thanks, The Information Inserted</h1>';
        }else{
        echo '<pre>Unable to send data to DB</pre>';
        }
    }



    public function upcomingEvents(){
        $upcoming=$this->dbconnection()->query("SELECT * FROM `events` WHERE timestamp >=CURRENT_TIMESTAMP ORDER BY timestamp ASC LIMIT 4");
        $events=$upcoming->fetchAll(PDO::FETCH_ASSOC);
         return $events;
        
    }
    
    
    public function preEvents(){
        $pre=$this->dbconnection()->query("SELECT * FROM `events` WHERE timestamp <CURRENT_TIMESTAMP ORDER BY timestamp ASC LIMIT 2");
        $events=$pre->fetchAll(PDO::FETCH_ASSOC);
         return $events;
    }

    public function eventsCalendar()
    {
        $retrieve = $this->dbconnection()->query("SELECT title, timestamp FROM events");
        $result = $retrieve->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    
}

?>