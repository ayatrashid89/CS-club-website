
<?php
     include "controller/HomeController.php";
     include "include/header.php";
   
?>


<main>
  
<!--<p>Welcome to Computer Science club, our club is available forstudy, receive tutoring, and collaborate with fellow students on personal, academic, and personal projects.</p> -->

 <h2 class="w3-center">Upcoming Event <i class="fa fa-share" style="font-size:28px"></i></h2>
  <?php
    
   $result=new HomeController();
   $result-> buildAnnouncement ();
   echo'</br>';
   echo'</br>';
   echo'</br>';
    $result->bulidComingEvent();

    
    echo'<h2 class="w3-center">Past Event  <i class="fa fa-reply" style="font-size:28px"></i></h2>';
    $result->previousEventsTemplate();
    
  ///include 'calender.php';
  // $calendar = new Calendar();
   //echo $calendar->show();
   ?>

<h2 class="w3-center">Check all our Events in Calendar <i style="font-size:34px;color:white" class="fa">&#xf073;</i></h2>
   <div id="calendar">
     
   <?php
  $calendar = $result->eventCalendar();
 ?> 
 
   </div>


</main>

 
 <script>
var result = <?php  if (isset($calendar)) { echo $calendar;} else {echo"0";} ?>;
if (result !="0"){
    var db_events = result;
}else
var db_events = [

]
$(document).ready(function() {
    $("#calendar").MEC({
        calendar_link: "",
        events: db_events
    });

  });

</script> 
 <?php include 'include/footer.php'; ?>


