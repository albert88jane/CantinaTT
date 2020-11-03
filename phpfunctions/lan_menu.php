<?php

    echo $_SESSION['pantalla'];
    if(!isset ($_SESSION['DIA']) || $_SESSION['DIA'] != date('j')){


        print_r($_SESSION);
<<<<<<< HEAD
        
        header('Location:'. '../menu.php');
=======
        header('Location:'. 'menu.php'); 

>>>>>>> 15aa91e94e2c3a418828befa0a9f2e53a44305cc

    }else{

        header('Location:'. 'error.php'); 
    }


?>