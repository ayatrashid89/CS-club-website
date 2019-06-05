<?php

include "controller/emailController.php";
include "include/header.php";

?>
<main>
<section>
<?php
$stm= new emailController();
$stm-> buildEmail(); 
?>
</section>
</main>