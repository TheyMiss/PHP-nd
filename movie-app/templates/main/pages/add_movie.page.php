<?php 

    //CRUD

    if(isset($_POST['submit'])) {
        
       $pavadinimas = $_POST['pavadinimas'];   
       $trukme = $_POST['trukme'];
       $aprasymas = $_POST['aprasymas'];
       $nuotrauka = $_POST['img'];
       $rezisierius = $_POST['rezisierius'];
       $kategorijosId = $_POST['kategorijos_id'];
        
    $connection = mysqli_connect('localhost', 'root', '', 'mform');

    $query = "INSERT INTO filmai(pavadinimas,trukme,aprasymas,img,rezisierius,kategorijos_id) ";
    $query .= "VALUES ('$pavadinimas', '$trukme', '$aprasymas', '$nuotrauka', '$rezisierius', '$kategorijosId')";

    $result = mysqli_query($connection, $query);

    if(!$result) {
        die('Query failed' . mysqli_error());
    }


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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Movies</title>
</head>
<body>
    
    <div class="container">
    
        <form method="post">
        
            <div class="form-group">
                <label for="">Pavadinimas</label>
                <input type="text" name="pavadinimas" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Trukmė</label>
                <input type="text" name="trukme" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Aprašymas</label>
                <input type="text" name="aprasymas" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Nuotrauka</label>
                <input type="text" name="img" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Režisierius</label>
                <input type="text" name="rezisierius" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Kategorijos ID</label>
                <input type="text" name="kategorijos_id" class="form-control">
            </div><br>

           
            <input type="submit" name="submit" value="Pridėti" class="form-control btn btn-primary">
         
        </form>

    </div>


</body>
</html>