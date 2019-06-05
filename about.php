<?php
   
     include "include/header.php";
     include "controller/AboutController.php";

?>
 <main>
<section>
<?php
$about=new AboutController();
$about->bulidAbout();
?>
<a href="https://cls.highline.edu/CLUBS/Clubs-Directory/Computer-Science-Club.php" > CS club</a> 
</p>
</section>
    </main>
   
    <?php include 'include/footer.php'; ?>