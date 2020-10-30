<?php 
    
  session_start();



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilos.css">



</head>
<body>
    <?php
        include 'php/header.php';
    ?>

    <div class="caja_imagen img-fluid">
        <div class="texto_encima col-md-12">
            <h1>Haz Tu Pedido</h1>
        </div>
        
        <div class="divbotons">
               <div id="menubutton">
                    <form action="post">
                        <input type="submit" value="Menú"></input>
                    </form>
                </div>
                <div id="adminbutton">
                <form action="post">
                        <input type="submit" value="Administració"></input>
                </form>

                </div>
            </div>

    </div>
    
        
           
</div>
    <?php

        include 'php/footer.php'

    ?>
  
</body>
</html>