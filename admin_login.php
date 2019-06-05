
<?php
     
	 include "controller/AdminController.php";
	 include "include/header.php";
	
	
	?>
	
	
	<main>
		<?php   
		if (isset($_SESSION['token'])){
			header("Location: admin.php");
		}else{
		$showMyForm = new AdminController();
		$showForm=$showMyForm->createLogin();
		 
		}
		?>
	  
	   
	</main>
	
	<?php include 'include/footer.php'; ?>