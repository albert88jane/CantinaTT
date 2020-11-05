<?php 
    session_start();
    
    if($_SESSION['pantalla']!=2){
      
        header('Location:'. 'index.php');
    }
?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="css/estilos.css">
    
  
      
</head>
<body>
    
    <?php include 'php/header.php'; ?>
    
    <div class="container">
    <div class="formulari">
    
        <div class="muchotexto">
        
        <form action="phpfunctions/formavanca.php" method="post">
    	    <label for="nombre">Nom</label>
    	    <input type="text" name="nombre" id="nombre" placeholder="Escribe tu nombre"/>
            <br>
    	    <label for="apellidos">Telefón</label>
    	    <input type="tel" name="telefon" id="telefon" placeholder="Telefón"/>
            <br>
	        <label for="email" >Correu Electrónic</label>
	        <input type="email" name="email" id="email" placeholder="Email" required />
	        <br>
	        
	   </form>
	       <div class="buttons">
	           <form action="phpfunctions/formtorna.php" method="post">
	                <input type="submit" name="torna" value="Torna"/>
                </form>
                <form action="phpfunctions/formavanca.php" method="post">
                    <input type="submit" name="avança" value="Avança"/>
                </form>
    	    
    	    </div>
        </div>
        <div class="comandaActual">
    	   <div class="comanda">
    	       
    	       
    	   </div>
            <div class="total">
                
                
            </div> 
                               
                   
                   
    	    	    
        </div>
    	
    </div>
    </div>   
    
    <?php include 'php/footer.php'; ?>
    

    <form action="" method="post">

        <input type="text" name="" id="">


    </form>

    <script>

        

    </script>


</body>
</html>