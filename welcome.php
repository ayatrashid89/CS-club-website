<?php
session_start();
//hard coded username and password
//in real life this would be coming from db.
$username = "usman";
$password = "password";
if(isset($_SESSION['username'])){
	echo "Welcome ". $_SESSION['username']."<br>";
	echo "<a href='logout.php'><input type =button name =logout value=Logout></a>";
	print_r($_SESSION);
}else{
if($username == $_POST['username'] && 
$password == $_POST['password']){
	$_SESSION['username'] = $username;
	$_SESSION['password'] = $password;
	$_SESSION['admin'] = "Yes";
	$_SESSION['Employee'] = "No";
	echo "Welcome ". $_SESSION['username']."<br>";
	echo "<a href='logout.php'><input type =button name =logout value=Logout></a>";
}else{
	echo "<script>alert('username and password is incorrect')</script>";
	//header("Location : login.php");
	echo "<script>location.href ='login.php'</script>";
}
}






?>