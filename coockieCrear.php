<?php




    function crearcookie($nombre_usuario){
        
        $cookie_name = "comprobacio";
        $cookie_value = $nombre_usuario;
        $cookie_expire = mktime(date("j")) + 1;

        setcookie($cookie_name, $cookie_value,$cookie_expire);

    }


?>



