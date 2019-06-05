<?php 
require "./model/Announcment.php";
class getAnnouncmentController {



    public function buildInsertAnnouncment($announcment){
        $insert=new Announcment();
        $insert-> insertAnnouncment($announcment);
            
    }
        
    public function createForm(){
        $announcment ='';
        
        
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $this->checkForStuff($announcment);
        }
           else{
               $this->showMyForm($announcment);
           }
         
    }
    public function checkForStuff($announcment) {
        $announcment = $_POST['announcment'];
        
        
       
        if($announcment) {
            $this-> buildInsertAnnouncment($announcment); 
        } else{
            $this-> showMyForm ($announcment);
        }
    }
    
    
    
    public function showMyForm ($announcment){
    print <<<FORM
    <form action="" method="POST">
      <label for="title">Add the Announcment:</label><br>
      <input type="text" name="announcment" value="$announcment" id="name">
      
    
    
      <input type="submit">
    </form>
    
FORM;
        }
         
    }
    
    
    ?>

