<?php

require 'model/Opportunity.php';
class OpportunityController{




public function buildOpp1(){
    $getOpp= new Opportunity() ;
    $result=$getOpp->getOpportunity();
  
    
    foreach($result as $row){
   
                 if($row['type']==='internship'){
                    echo'<section>';
                 echo '<p class="opp">';
                echo$row['title'].'</br>';
                 echo'</p>';

                 echo '<p class="opp2">';
                 echo$row['description'];
                  echo'</p>';
                  echo'</section>';
                 
                 }
            }
    

}
public function buildOpp2(){
    
    $getOpp= new Opportunity() ;
    $result=$getOpp->getOpportunity();
    
    
    foreach($result as $row){
        
   
                 if($row['type']==='jobs'){
                    echo'<section>';
                    echo '<p class="opp">';
                    echo$row['title'].'</br>';
                     echo'</p>';
    
                     echo '<p class="opp2">';
                     echo$row['description'];
                      echo'</p>';
                      echo'</section>';
                 }
            }
    

}
public function buildOpp3(){
    $getOpp= new Opportunity() ;
    $result=$getOpp->getOpportunity();
  
   
    foreach($result as $row){
        
            
                 if($row['type']==='volunteerWork'){
                    echo'<section>';
                    echo '<p class="opp">';
                    echo$row['title'].'</br>';
                     echo'</p>';
    
                     echo '<p class="opp2">';
                     echo$row['description'];
                      echo'</p>';
                      echo'</section>';
                 }
            }
    

}

}


?>