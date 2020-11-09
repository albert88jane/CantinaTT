<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Document</title>
</head>

<body>


    <div class="container">

        <?php 

        include '../php/header.php';

        date_default_timezone_set('UTC');

        $hoy = date('j-m-Y');


        echo "<div class=fechaHoy>$hoy</div>";
        $hola = "Que tal?<br/>com estas?<br/><br/><br/><br/>";

        if(! file_exists("$hoy.txt")){

        $fitxer = fopen("../ficheros/$hoy.txt", "c+");
        fclose($fitxer);

            }

      

        $fitxerescriure = fopen("../ficheros/$hoy.txt","r");

        while(!feof($fitxerescriure)){

           echo fgets($fitxerescriure) . "<br/>";
        }


          fclose($fitxerescriure);


    ?>

        <div class="comandesAnteriors">


            <div class='formulariAdmin'>


                <h3> Escull un dia per a visitar les comandes Realitzades en aquest</h3>
                <form action="./phpfunctions/diaEscollit.php" method="post">

                    <input type="text" name="diaE" id="diaE" placeholder="dd-mm-AAAA" />
                    <input type="submit" value="Buscar" />

                </form>
            </div>




        </div>

    </div>

    <?php include '../php/footer.php'; ?>

</body>

</html>
