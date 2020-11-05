<?php
    
    session_start();

    $_SESSION['pantalla']=3;
    if(!isset ($_SESSION['DIA']) != date('j')){
        
        header('Location:' . '../comanda.php');        
    }

?>