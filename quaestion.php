
<?php
   
   include "include/header.php";
   include "controller/FaqController.php";

?>
    <main>
    <section>
        
    <?php
    $result=new FaqController();
    $result->bulidFaq();
    ?>
</section>
    </main>
    
    
    <?php include 'include/footer.php'; ?>