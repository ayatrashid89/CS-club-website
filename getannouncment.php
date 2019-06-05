
<?php

require "controller/getAnnouncmentController.php";
include "include/header.php";
if (!isset($_SESSION['token'])){
 header("LOCATION: index.php");
}
?>

<section>
<h1>Update Announcment:</h1>
<?php
$dbconnection= new getAnnouncmentController() ;
$dbconnection->createForm();
?>
</section>
<a href="http://chelan.highline.edu/~ayatrashid/finalPhp/admin.php">Back to main</a>