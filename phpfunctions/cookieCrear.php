<?php




        crearCookie(){
        
            $cookie_name = "comprobacio";
            $cookie_value = $nombre_usuario;
        
        

            setcookie($cookie_name, $cookie_value, time() +3600*24, "/");


        }

?>



