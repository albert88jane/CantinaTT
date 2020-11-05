<?php
    
    session_start();

    $_SESSION['pantalla']=3;
    

        $_SESSION['DIA'] = date('j'); 
               
        header('Location:' . '../comanda.php');        
    

?>