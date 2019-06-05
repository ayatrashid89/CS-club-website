<?php
require "./model/SignUp.php";

class SignUpController {

public function bulidSelectSignUp(){

$signUp=new SignUp();
$result= $signUp -> signupSelect();


            foreach($result as $row){
       echo"<br>";
			

				
                echo'Name:'.$row['name']."&nbsp;&nbsp;&nbsp;  ".'Email: '.$row['email']."&nbsp;&nbsp; &nbsp;".'Day:'."&nbsp;&nbsp;&nbsp;".$row["day"].'Time:'."&nbsp;&nbsp;&nbsp;".$row["time"]."";
                if($row['update_email']==='1'){
                    echo'&nbsp; &nbsp;&nbsp; Yes I want to get email update'." ";
                }
            else{
                echo"&nbsp; &nbsp;&nbsp; No I don't want to get email update";
            }
            
        
        if($row['leader']==='1'){
            echo'&nbsp; &nbsp; Yes, I would like to be future club leaders ';
        }
    else{
        echo"&nbsp; &nbsp;No I don't like to be future club leaders";
    }
   
}
}
				


public function buildInsertSingUp( $name,$email,$day,$time,$update,$leader){
    $insert=new SignUp();
        $insert->insertSingUp($name,$email,$day,$time,$update,$leader);
        
}
    
public function createForm(){
    $name ='';
    $email = '';
    $day = '';
    $time='';
    $update='';
    $leader='';
    $errorName = '';
    $errorEmail = '';
    $errorDay = '';   
    $errorTime='';
    $errorUpdate='';
    $errorLeader='';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $this->checkForStuff( $name,$email , $day , $time,$update,$leader,$errorName ,$errorEmail ,$errorDay , $errorTime,$errorUpdate, $errorLeader);
    }
       else{
           $this->showMyForm($name,$email , $day , $time,$update,$leader,$errorName ,$errorEmail ,$errorDay , $errorTime,$errorUpdate, $errorLeader);
       }
     
}
public function checkForStuff($name,$email , $day , $time,$update,$leader,$errorName ,$errorEmail ,$errorDay , $errorTime,$errorUpdate, $errorLeader) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $day =  $_POST['day'];
    $time = $_POST['time'];
    $update = (isset($_POST['update_email']))?1:0;
    $leader = (isset($_POST['leader']))?1:0;
    if(empty($name)) {
        $errorName = "*Please Enter name";
    }
    if(empty($email)) {
        $errorEmail = "*Please Enter email";
    }

    if(empty($day)) {
        $errorDay = "*Please Enter day";
    }
    if(empty($time)) {
        $errorTime = "*Please Enter Time";
    }
    
   
    if($name && $email&& $day &&$time) {
        $this-> buildInsertSingUp( $name,$email,$day,$time,$update,$leader); 
    } else{
        $this-> showMyForm ($name,$email , $day , $time,$update,$leader,$errorName ,$errorEmail ,$errorDay , $errorTime);
    }
}



public function showMyForm ($name,$email , $day , $time,$update,$leader,$errorName ,$errorEmail ,$errorDay , $errorTime){
print <<<FORM
<form action="signup.php" method="POST">
  <label for="name">Name:</label><br>
  <input type="text" name="name" value="$name" id="name">
  <br><br>
  <label for="email">Email:</label><br>
  <input type="email" name="email" value="$email" id="email">
  <br><br>
  <label for="availability">Availability weekday:</label><br>
   <select name="day" class="right">
<option value="Monday">Monday</option>
<option value="Tuesday">Tuesday</option>
<option value="Wednesday">Wednesday</option>
<option value="Thursday">Thursday</option>
<option value="Friday">Friday</option>
<option value="Saturday">Saturday</option>
<option value="Sunday">Sunday</option>
</select>
<br><br>
<label for="appt">Availability hours:</label><br>
<input type="time" id="appt" name="time" value="$time">
<br><br>

<label>Would you like to receive email updates?</label>
<input type="checkbox" name="update_email" id="test1"  /> 
<br><br>

<label>Would you like to be future club leaders?
  <input type="checkbox" name="leader" id="test2"/></label>
<br><br>

  <input type="submit">
</form>
FORM;
    }
     
}


?>