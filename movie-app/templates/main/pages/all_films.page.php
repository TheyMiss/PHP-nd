<?php 

    //CRUD
        
    $connection = mysqli_connect('localhost', 'root', '', 'mform');

    $query = "SELECT * FROM filmai";
   

    $result = mysqli_query($connection, $query);

    if(!$result) {
        die('Query failed' . mysqli_error($connection));
    }




    /* $pavadinimas
    $trukme 
    $aprasymas 
    $nuotrauka 
    $rezisierius 
    $kategorijosId */ 



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <?php
   // echo json_encode($_SERVER);
    ?>
    <title>Movies</title>

</head>
<body>
    <main>
    <div class="container ">
    
       <?php 
       
            while($row = mysqli_fetch_array($result)) {
                
                include("./inc/box.php");

                //echo "<div>" . $row[1] . "<br>" . $row[2] . "<br>" . $row[3] . "<br>" . $row[4]  . "<br>" . $row[5] . "<br>" . $row[6] . " </div>";


            }

       ?>

    </div>

    </div>

</main>
</body>
</html>