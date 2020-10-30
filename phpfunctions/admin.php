
 <?php

    $logins = array("Albert"=>"albertpassword", "Alvaro"=>"alvaropassword", "Andrea"=>"andreapassword" , "Bayron"=>"bayronpassword");

    $nom = $_REQUEST['usuari'];
    $password = $_REQUEST['contrasenya'];
    
    
   

   if($password == $logins[$nom]){

        session_start();
        $_SESSION["admin"]=$nom;
        header('Location: '. 'admin.php');
        
   }
   else{

        echo 'ERROR, CONTRASEÑA INCORRECTA';
        include 'login.php';

        
   }

   
?>





