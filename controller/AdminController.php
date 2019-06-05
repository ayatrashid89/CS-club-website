<?php
    
require "./model/Event.php";
require "./model/Admin.php";

class AdminController{

  public function insertEvent($title,$timestamp,$description){
    $insert= new Event();
    $insert->insertEvent($title,$timestamp,$description);
}

  public function createForm(){
    $title = '';
    $timestamp = '';
    $description = '';
    $errorTitle = '';
    $errorTimestamp = '';
    $errorDescription = '';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $this->checkForStuff($title, $timestamp, $description, $errorTitle, $errorTimestamp, $errorDescription);
      echo'<a href="http://chelan.highline.edu/~ayatrashid/finalPhp/getSignUp.php">
        <button>Get sign up sheet</button>
       </a>';
    }else{
        $this->showMyForm($title, $timestamp, $description, $errorTitle, $errorTimestamp, $errorDescription);
        echo' <a href="http://chelan.highline.edu/~ayatrashid/finalPhp/getSignUp.php">
        <button>Get sign up sheet</button>
       </a>';
    }
}


public function checkForStuff($title, $timestamp, $description, $errorTitle, $errorTimestamp, $errorDescription) {
    $title = $_POST['title'];
    $timestamp = $_POST['timestamp'];
    $description =  $_POST['description'];

    if(empty($title)) {
        $errorTitle = "*Please Enter Title";
    }
    if(empty($timestamp)) {
        $errorTimestamp = "*Please Enter Time";
    }

    if(empty($description)) {
        $errorDescription = "*Please Enter Description";
    }

    if($title && $timestamp && $description) {
        $this->insertEvent($title, $timestamp, $description);   
    } else{
        $this->showMyForm($title, $timestamp, $description, $errorTitle, $errorTimestamp, $errorDescription);
    }
}




public function showMyForm($title, $timestamp, $description, $errorTitle, $errorTimestamp, $errorDescription) {
    print <<< FORM
    <form action="" method="POST">
    <h1>Insert event:</h1>
    <label for="title">Title :</label><br>
    <input name="title" type="text" id="title" placeholder="name" value="$title"><br>
    <span>$errorTitle</span>

    <label for="date">Datetime :</label><br>
    <input name="timestamp" type="datetime-local" id="timestamp" placeholder="name" value="$timestamp"><br>
    <span>$errorTimestamp</span>

    <label for="description">Description :</label><br>
    <textarea name="description" id="description" placeholder="description" cols="30" rows="10">$description</textarea><br>
    <span>$errorDescription</span>

   <input type="submit">
   
    </form>
FORM;
}




public function createLogin(){
    $name='';
    $password='';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name=  ($_POST['name']);
    $password=md5($_POST['password']);
    
    }
    
    if($this->checkLogin($name,$password)){
        header("Location: admin.php");
    }
    else{
        
        $this->showLogin($name,$password);
        
    }
    }


public function checkLogin($name,$password) {

    $callAdmin = new Admin();
        $varAdmin = $callAdmin->selectAdminLogin();
        
        foreach($varAdmin as $adminKey){
            if (($adminKey['username'] === $name) && ($adminKey['password'] === $password)){
                $_SESSION['token'] = $name+''+$password;
                return true;
            } else {
                return false;
            }
     
        }
}

public function showlogin($name,$password){
print <<< FORM

<form action="" method="post">
	<table align="center">
		<tr>
			<th colspan="2"><h2 align="center">Login</h2></th>
		</tr>
		<tr>
			<td>Username:</td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td>Password:</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td align="right" colspan="2"><input type="submit" name="login" value="login"></td>
		</tr>
	</table>
</form>

FORM;
}



}



?>


