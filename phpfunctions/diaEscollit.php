<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../css/estilos.css">
   <title>Document</title>
</head>

<body>


<div class="container">

<?php include '../php/header.php'; ?>

<div class="container">

    <?php

        $dia = $_POST['diaE'];

        echo "<div class='fechaHoy'> $dia </div>";

        if(file_exists("$dia.txt")){
        $fitxerescriure = fopen("../ficheros/$dia.txt","r");

        while(!feof($fitxerescriure)){
        
           echo fgets($fitxerescriure) . "<br/>";
        }
          
        
          fclose($fitxerescriure);
        
    }else{

        echo "<div class='comandaMostrar'> Ho sento, no tenim Comandes per a aquest dia. </div>";

    }



    ?>


    <form action="admin.php" method="post">
        <input type="submit" value="Tornar">
    </form>



</div>

  <?php include '../php/footer.php'; ?>

</body>
</html>

