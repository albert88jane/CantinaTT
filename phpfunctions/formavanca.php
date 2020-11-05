<?php
    
    session_start();


    date_default_timezone_set('UTC');

    $hoy = date('j-m-Y');

    if(! file_exists("$hoy.txt")){

        $fitxer = fopen("../ficheros/$hoy.txt", "c+");
        fclose($fitxer);
        
        }
        
        $fitxerdia = fopen("../ficheros/$hoy.txt","a");
        fwrite($fitxerdia, "<div class='comandaMostrar'>");

        for ($i=0; $i < $comanda; $i++) { 
            
        
            fwrite($fitxerdia, count($comanda) . PHP_EOL);

        }
        fwrite($fitxerdia, "</div>");
        fclose($fitxerdia);

    $_SESSION['pantalla']=3;
    
    $_SESSION['DIA'] = date('j'); 

    header('Location:' . '../comanda.php');        
    

?>