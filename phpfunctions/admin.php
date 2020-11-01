
 <?php

    $logins = array("Albert"=>"albertpassword", "Alvaro"=>"alvaropassword", "Andrea"=>"andreapassword" , "Bayron"=>"bayronpassword");

    $nom = $_REQUEST['usuari'];
    $password = $_REQUEST['contrasenya'];
    
    
   

   if($password == $logins[$nom]){


        $_SESSION["admin"]=$nom;
        echo 'hola';
        
   }
   else{

     header('Location:'. 'error.php'); 
        

        
   }

   
?>





<form action="" method="post"></form> 

   <input type="submit" value="">

</form>