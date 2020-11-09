<?php  
    session_start();
    if($_SESSION['pantalla']!=3){
      
        header('Location:'. 'index.php');
    }
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
    <div class="pagina-comanda">
        <div class="total-pagament">
            <div class="llista-productes">
            </div>
            <hr class="separacio">
            <div class="total">
                <h3 id="titol-total">TOTAL:</h3>
                <h3 id="preu">PREU €</h3>
            </div>
        </div>
        <div class="confirmar-comanda">
            <form id="confirmar" action="index.php" method="POST">
                <input class="confirmar-boto" type="submit" value="Confirmar comanda">
            </form>
        </div>
    </div>
    <?php include "php/footer.php";?>
</body>

</html>
