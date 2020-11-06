<?php


 if(!isset ($_SESSION)){
 session_start();
}
 
$_SESSION['pantalla']=1; 


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilos.css">



</head>
<body>
    
    <?php include 'php/header.php'; ?>

    <div class="caja_imagen img-fluid">
        <div class="texto_encima col-md-12">
            <h1>Haz Tu Pedido</h1>
        </div>
        <div class="divbotons">
               <div id="menubutton">
                    <form action="phpfunctions/lan_menu.php">
                        <input type="submit" value="Menú"/>
                    </form>
                </div>
                <div id="adminbutton">
                    <form action="Admin/admin.php">
                        <input type="submit" value="Administració"/>
                    </form>

                </div>
        </div>

    </div>
    
    <?php include 'php/footer.php' ?>
  
</body>
</html>
