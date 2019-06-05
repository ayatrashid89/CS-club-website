<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>GETTING STARTED WITH BRACKETS</title>

    <link rel="stylesheet" href="css/css.css">

 <link rel="stylesheet" href="css/cs.css">


</head>

<body>
    <header class="header">
        <?php
        include'nav.php';
        ?>
      </header>


    <main>

        <div class="content">
           
            <br> <br> <br>
            <h3></h3>
         </div>

 
                <?php
include 'calender.php';
 
$calendar = new Calendar();
 
echo $calendar->show();
?>
            

        
        

    </main>
    <footer>
        <?php
        include'footer.php';
        ?>
    </footer>

</body>










</html>