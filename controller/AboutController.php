<?php
require "model/About.php";
class AboutController{

    public function bulidAbout(){
    
     $getresult= new About();
     $data=$getresult->getAbout();
     
     foreach($data as $result){
       
        echo'<h2>';
        echo $result['title']; echo'</h2>';

        echo'<p class="opp2">';
        echo $result['description'];
        echo'</p>';
       

     }
     



    }




}





?>