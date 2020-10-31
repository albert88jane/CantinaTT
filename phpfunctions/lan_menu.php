<?php

    echo $_SESSION['pantalla'];
    if(!isset ($_SESSION['DIA']) || $_SESSION['DIA'] != date('j')){


        print_r($_SESSION);
        


    }else{

        header('Location:'. 'error.php'); 
    }



?>