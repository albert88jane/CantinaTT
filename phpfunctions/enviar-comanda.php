<?php

    session_start();
    $_SESSION['pantalla'] = 2;

    header('Location:'. '../formulari.php'); 

    
?>