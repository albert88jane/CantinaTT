<?php  
    session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CANTINA PEDRALBES</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <?php include './php/header.php';?> 
    <div class="container">
    <div class="error">
        <div class="missatge">
            <div>
                <img class="imatge-totem" src="./img/tassagominoles.jpg">
            </div>
            <div class="missatge-error">
                <p>Ups! Sembla que ja has demanat.. Hauràs d'esperar a demà per fer una altra comanda.</p>
            </div>
        </div>
        <div class="tornar">
            <form id="tornar" action="index.php" method="POST">
                <input class="tornar-boto" type="submit" value="Torna">
            </form>
        </div>
    </div>
    </div>
    <?php include "php/footer.php";?> 
</body>
</html>