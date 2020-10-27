<?php




function(){
    $cookie_name = "comprobacio";
    $cookie_value = "albert";
    $cookie_expire = mktime(date("j")) + 1;

setcookie($cookie_name, $cookie_value,$cookie_expire);
}



?>