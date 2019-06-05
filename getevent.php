
<?php

require "controller/getEventController.php";
include "include/header.php";
if (!isset($_SESSION['token'])){
 header("LOCATION: index.php");
}
?>

<section>
<h1>Update Event:Insert new event</h1>
<?php
$dbconnection= new getEventController() ;
$dbconnection->createForm();
?>
</section>
<a href="http://chelan.highline.edu/~ayatrashid/finalPhp/admin.php">Back to main</a>