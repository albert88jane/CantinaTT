
<html>
     <?php 

    if( !isset $_COOKIE["comprobacio"] && $_COOKIE){

        header('Location: '. menu.php);

        else{

            header('Location: '. error.php);
        }

    }
    

    

?>




<form action="comprobarCookie.php" method="post">
 
 <input type="submit" />
</form>

</html>

