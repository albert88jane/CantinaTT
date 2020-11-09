<?php
    
    session_start();


    date_default_timezone_set('UTC');

    $hoy = date('j-m-Y');



    $nom = $_REQUEST['nombre'];
    $telefon = $_REQUEST['telefon'];
    $comanda = $_REQUEST['comanda'];
    $email = $_REQUEST['email'];

    if(! file_exists("$hoy.txt")){

        $fitxer = fopen("../ficheros/$hoy.txt", "c+");
        fclose($fitxer);
        
        }
        
        $fitxerdia = fopen("../ficheros/$hoy.txt","a");

        fwrite($fitxerdia, "<div class='comandaMostrar'>" .PHP_EOL);

        
            
        
            fwrite($fitxerdia, $nom . PHP_EOL);
            fwrite($fitxerdia, "<br>" . PHP_EOL);
            fwrite($fitxerdia, $telefon . PHP_EOL);
            fwrite($fitxerdia, "<br>" . PHP_EOL);
            fwrite($fitxerdia, $email . PHP_EOL);
            fwrite($fitxerdia, "<br>" . PHP_EOL);
            fwrite($fitxerdia, $comanda . PHP_EOL);

             fwrite($fitxerdia, "</div>" . PHP_EOL);

        fclose($fitxerdia);

    $_SESSION['pantalla']=3;
    
    $_SESSION['DIA'] = date('j'); 

    header('Location:' . '../comanda.php');        
    

?>
