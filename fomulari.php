
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
    
    <div class="formulari">
    
    <form action="#" target="" method="get" name="formDatosPersonales">
        
        <div class="muchotexto">
    	    <label for="nombre">Nom</label>
    	    <input type="text" name="nombre" id="nombre" placeholder="Escribe tu nombre"/>
            <br>
    	    <label for="apellidos">Telefón</label>
    	    <input type="tel" name="telefon" id="telefon" placeholder="Telefón"/>
            <br>
	        <label for="email" >Correu Electrónic</label>
	        <input type="email" name="email" id="email" placeholder="email" required />
	        <br>
	        <div class="buttons">
	        <input type="submit" name="torna" value="Torna"/>
    	    <input type="submit" name="avança" value="Avança"/>
    	    </div>
        </div>
    </form>
        
        <div class="comandaActual">
    	   <div class="comanda">
    	       
    	       
    	   </div>
            <div class="total">
                
                
            </div> 
                               
                   
                   
    	    	    
        </div>
    	
    </div>
    
    <?php include 'php/footer.php' ?>
    
</body>
</html>