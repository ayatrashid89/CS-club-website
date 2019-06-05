<?php
    include "controller/SignUpController.php";
     include "include/header.php";
   

?>

 

<main>

   
    <?php
    $data=new SignUpController();
    $data->createForm();
    ?>


</main>
 <?php include 'include/footer.php'; ?>