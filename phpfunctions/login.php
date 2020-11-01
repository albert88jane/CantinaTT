<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="/css/estilos.css">
</head>
<body>
    
    <?php  include '../php/header.php' ?>

    

    <div class="login_img">
        <div class="texto_encima col-md-12">
            <h1>Haz Tu Pedido</h1>
        </div>
        
        <div class="divbotons">
               <div id="menubutton">
               <form action="admin.php" method="post">
    
    <input type="text" value="Nom Usuari" name="usuari"></input>
    <input type="password" value= "" name="contrasenya"> </input>
    <input type="submit" value="Log In"></input>



    </form>

                </div>
            </div>

    </div>

    
    <?php  include '../php/footer.php' ?>
   

</body>
</html>

