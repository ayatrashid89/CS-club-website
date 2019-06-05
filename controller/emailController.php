<?php

require 'model/Email.php';
class emailController{

    
    



public function buildEmail(){
    $getOpp= new Email() ;
    $result=$getOpp->emailSelect();
  

    
       ?>
            
       <form action="" method="POST">
       <div><h1>Send email to:</h1>
       <?php 
       foreach($result as $email){
       $singleEmail = $email['email'];
       echo" 
       <p><label >$singleEmail
       <input name='email[]' type='checkbox' value='$singleEmail'>
       </label> 
       </p>";
       } ?>
       </div>
       
       <p><label for="">Subject: <input type="text" name="subject"></label></p>
       <p><textarea name="message" id="" cols="30" rows="10"></textarea></p>
       <button type='submit'>Send</button>
       </form>
       
       <?php
       // var_dump($_POST);
       if(isset($_POST['email'])){
       foreach($_POST['email'] as $key){
       $to = $key;
       $subject = $_POST['subject'];
       $body = $_POST['message'];
       $from = "ayatrashid@students.highline.edu";
       $result = mail($to,$subject,$body,$from);
       echo"<p>Email Sent to :$to</p>";
       
       }
       }
       ?>

       <?php
    }
}
     ?>
       