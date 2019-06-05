<?php
     

 include "include/header.php";
 require "controller/OpportunityController.php";

?>

    <main>
    

<section class="aboutbox2"> <h2> What are you intersted in?</h2>

<?php
   $showopp=new OpportunityController();
   echo'<h1>Internships:</h1>';
   $showopp->buildOpp1();
   echo'<hr>';
   echo'<h1>Jobs:</h1>'; 
   $showopp->buildOpp2();
   echo'<hr>';
   echo'<h1>Volunteer Works:</h1>';
   $showopp->buildOpp3();
   
   ?>
 

  </section>
    </main>
    
    <?php include 'include/footer.php'; ?>