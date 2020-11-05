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

$hoy = date('j-m-Y ');

echo $hoy;
$hola = "Que tal?<br/>com estas?<br/><br/><br/><br/>";
if(! file_exists("$hoy.txt")){

$fitxer = fopen("../ficheros/$hoy.txt", "c+");


}

$fitxerdia = fopen("../ficheros/$hoy.txt","a");

fwrite($fitxerdia, $hola . PHP_EOL);
fclose($fitxerdia);


$fitxerescriure = fopen("../ficheros/$hoy.txt","r");

while(!feof($fitxerescriure)){

   echo fgets($fitxerescriure) . "<br/>";
}
  

  fclose($fitxerescriure);

include '../php/footer.php';

?>

</div>
</body>
</html>


