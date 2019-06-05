
<?php

     require "controller/SignUpController.php";
     include "include/header.php";
     if (!isset($_SESSION['token'])){
      header("LOCATION: index.php");
    }
    ?>

<section>
<h1>All member's information (Signup Sheet):</h1>
<?php
$dbconnection= new SignUpController() ;
$dbconnection->bulidSelectSignUp();
?>
</section>
<a href="http://chelan.highline.edu/~ayatrashid/finalPhp/admin.php">Back to main</a>
  <?php include 'include/footer.php'; ?>