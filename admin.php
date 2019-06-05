<?php

     require "controller/SignUpController.php";
     include "include/header.php";
     if (!isset($_SESSION['token'])){
      header("LOCATION: index.php");
    }
    ?>


<h2>Welcome to Admin dashboard from admin.php!!!</h2>
<section>
<a href='getSignUp.php'>Get sign Up sheet</a><br>
<a href='getevent.php'>Update Event data</a><br>
<a href='getannouncment.php'>Update announcment</a><br>
<a href='email.php'>Send email to all members</a><br>
<a href='logout.php'>Log out</a><br>
</section>
   

