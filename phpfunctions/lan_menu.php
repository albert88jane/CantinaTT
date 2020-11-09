<?php
    
    session_start();

    $_SESSION['pantalla']= 1;
    if(!isset ($_SESSION['DIA']) || $_SESSION['DIA'] != date('j')){


        print_r($_SESSION);
        
        header('Location:'. '../menu.php');

    }else{

        header('Location:'. '../error.php'); 
    }


?>
