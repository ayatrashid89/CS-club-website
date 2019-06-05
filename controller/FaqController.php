<?php
require 'model/FAQ.php';

class FaqController{
 
    public function bulidFaq(){
        $getdata=new FAQ();
        $result=$getdata->faqSelect();

echo'<h2>Frequently Asked Questions</h2>';
foreach($result as $data){
    
    foreach($data as $key=>$value)
    
    echo'<div class="question"><label>';
    echo"Q:"." ".$data['questions'];
    echo"<br>";
    echo'<div></label>';
    
    
     
    echo'<div class="answer"><p>';
    echo'A:'." ".$data['answers'];
    echo"<br>";
    echo'<div></p>';

}


    //echo"<pre>";
    //var_dump($result);
   // echo"</pre>";







    }





}



?>