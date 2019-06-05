<?php 
require "./model/GetEvent.php";
class getEventController {



    public function buildInsertEvent($title,$timestamp,$descriptipn){
        $insert=new GetEvent();
        $insert->insertEvent($title,$timestamp,$descriptipn);
            
    }
        
    public function createForm(){
        $title ='';
        $timestamp = '';
        $descriptipn = '';
        
        
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $this->checkForStuff($title,$timestamp,$descriptipn);
        }
           else{
               $this->showMyForm($title,$timestamp,$descriptipn);
           }
         
    }
    public function checkForStuff($title,$timestamp,$descriptipn) {
        $title = $_POST['title'];
        $timestamp = $_POST['time'];
        $descriptipn =  $_POST['description'];
        
        
       
        if($title && $timestamp && $descriptipn) {
            $this-> buildInsertEvent($title,$timestamp,$descriptipn); 
        } else{
            $this-> showMyForm ($title,$timestamp,$descriptipn);
        }
    }
    
    
    
    public function showMyForm ($title,$timestamp,$descriptipn){
    print <<<FORM
    <form action="" method="POST">
      <label for="title">Title:</label><br>
      <input type="text" name="title" value="$title" id="name">
      <br><br>
      <label for="time">Time:</label><br>
      <input type="datetime-local" name="time" value="$timestamp" id="time">
      <br><br>
    <label for="appt">description:</label><br>
    <input type="text" id="appt" value="$descriptipn" name="description">
    <br><br>
    
    
    
      <input type="submit">
    </form>
    
FORM;
        }
         
    }
    
    
    ?>














