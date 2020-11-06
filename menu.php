<?php 
    session_start();
    if($_SESSION['pantalla'] !=1 ){
      
        header('Location:'. 'index.php');
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CANTINA PEDRALBES</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link href="Js/tranversal_menus.js">
</head>
<script>
            
    window.onload = function () {

         var horas = new Date();
         var horaActual = horas.getHours();
         var minutoActual = horas.getMinutes();

         if (horaActual <= 11 & minutoActual >= 30) {
             document.getElementById('menu1').style.display = "block";
             document.getElementById('menu2').style.display = "none";
         } else {
             document.getElementById('menu1').style.display = "none";
             document.getElementById('menu2').style.display = "block";
         }
    }
           
    function comprobar() {

        let producto = [];
        let cantidad = [];
        let cont = 0;
        let inputs = document.getElementsByClassName("productos");
    
        for (let i = 0; i < inputs.length; i++) {

            let productoActual = document.getElementsByClassName        ("productos")[i];
            console.log(productoActual);

            let valor = productoActual.value;
            console.log(valor);

            let idproducto = productoActual.getAttribute("name");
            console.log(idproducto);


            if (valor > 0) {

                producto[cont] = idproducto;
                cantidad[cont] = valor;
                cont += 1;
            }
            console.log(valor);
        }

        localStorage.setItem("producto", JSON.stringify(producto));
        localStorage.setItem("cantidad", JSON.stringify(cantidad));

        location.href = 'phpfunctions/enviar-comanda.php';
    }

</script>
<body>
    <?php include './php/header.php';?>
    <div id="menu1">
        <h1>Esmorzars</h1>
        <div class="tipusMenjar">
            <div class="tipusMenjar1">
                <h2>Dolç</h2>
                <div class="prod">
                    <div class="producte1">
                        <img class="imatgeProductes" src="img/donutsxoco.jpg">
                        <div class="titol"><h3>Donut</h3></div>
                        <div class="descripcio"><p>Donut de sucre o xocolata</p></div>
                        <div class="preu"><h3>1,00 €</h3></div>
                        <div>
                            <form class="quantitat">
                                <label for="donut">Quantitat:</label>
                                <input type="number" name="donut" class="productos" value="" placeholder="Màxim 4" maxlength="4">
                            </form>
                        </div>
                    </div>
                    <div class="producte2">
                        <img class="imatgeProductes" src="./img/croissants.jpg">
                        <div class="titol"><h3>Croissant</h3></div>
                        <div class="descripcio"><p>Croissant normal o de xocolata</p></div>
                        <div class="preu"><h3>1,20 €</h3></div>
                        <div>
                            <form class="quantitat">
                                <label for="croisant">Quantitat:</label>
                                <input type="number" name="croisant" class="productos" value="" placeholder="Màxim 4" maxlength="4">
                            </form>
                        </div>
                    </div>
                    <div class="producte3">
                        <img class="imatgeProductes" src="./img/canyesxoco.jpg" alt="Pastes de full">
                        <div class="titol"><h3>Canyes</h3></div>
                        <div class="descripcio"><p>Canya de crema o xocolata</p></div>
                        <div class="preu"><h3>1,40 €</h3></div>
                        <div>
                            <form class="quantitat">
                                <label for="canyes">Quantitat:</label>
                                <input type="number" name="canyes" class="productos" value="" placeholder="Màxim 4" maxlength="4">
                            </form>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="tipusMenjar2">
                <h2>Salat</h2>
                <div class="prod">
                    <div class="producte1">
                        <img class="imatgeProductes" src="./img/bikini.jpg">
                        <div class="titol"><h3>Bikini</h3></div>
                        <div class="descripcio"><p>De pernil dolç amb formatge o de pernil salat amb formatge</p></div>
                        <div class="preu"><h3>1,60 €</h3></div>
                        <div>
                            <form class="quantitat">
                                <label for="bikini">Quantitat:</label>
                                <input type="number" name="bikini" class="productos" value="" placeholder="Màxim 4" maxlength="4">
                            </form>
                        </div>
                    </div>
                    <div class="producte2">
                        <img class="imatgeProductes" src="./img/bocatabutifarra.jpg">
                        <div class="titol"><h3>Entrepà calent</h3></div>
                        <div class="descripcio"><p>Entrepà de llom, botifarra, bacon, hamburguesa o truita</p></div>
                        <div class="preu"><h3>1,80 €</h3></div>
                        <div>
                            <form class="quantitat">
                                <label for="entrepacalent">Quantitat:</label>
                                <input type="number" name="entrepacalent" class="productos" value="" placeholder="Màxim 4" maxlength="4">
                            </form>
                        </div>
                    </div>
                    <div class="producte3">
                        <img class="imatgeProductes" src="./img/pizzaslice.jpg">
                        <div class="titol"><h3>Pizza</h3></div>
                        <div class="descripcio"><p>Porció de pizza a escollir</p></div>
                        <div class="preu"><h3>1,40 €</h3></div>
                        <div>
                            <form class="quantitat">
                                <label for="pizza">Quantitat:</label>
                                <input type="number" name="pizza" class="productos" value="" placeholder="Màxim 4" maxlength="4"> 
                            </form>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="tipusMenjar3">
                <h2>Begudes</h2>
                <div class="prod">
                    <div class="producte1">
                        <img class="imatgeProductes" src="./img/xocolatadesfeta.jpg" alt="Xocolata desfeta">
                        <div class="titol"><h3>Xocolata</h3></div>
                        <div class="descripcio"><p>Xocolata desfeta</p></div>
                        <div class="preu"><h3>1,40 €</h3></div>
                        <div>
                            <form class="quantitat">
                                <label for="xocolatadesfeta">Quantitat:</label>
                                <input type="number" name="xocolatadesfeta" class="productos" value="" placeholder="Màxim 4" maxlength="4">
                            </form>
                        </div>
                    </div>
                    <div class="producte2">
                        <img class="imatgeProductes" src="./img/cafeghost.jpg" alt="Cafè">
                        <div class="titol"><h3>Cafè</h3></div>
                        <div class="descripcio"><p>Cafè amb llet a escollir</p></div>
                        <div class="preu"><h3>1,20 €</h3></div>
                        <div>
                            <form class="quantitat">
                                <label for="cafe">Quantitat:</label>
                                <input type="number" name="cafe" class="productos" value="" placeholder="Màxim 4" maxlength="4">
                            </form>
                        </div>
                    </div>
                    <div class="producte3">
                        <img class="imatgeProductes" src="./img/suctaronja.jpg" alt="Suc">
                        <div class="titol"><h3>Suc</h3></div>
                        <div class="descripcio"><p>Suc de taronja, prèssec o pinya</p></div>
                        <div class="preu"><h3>1,40 €</h3></div>
                        <div>
                            <form class="quantitat">
                                <label for="suc">Quantitat:</label>
                                <input type="number" name="suc" class="productos" value="" placeholder="Màxim 4" maxlength="4">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="menu2">
        <h1>Dinars</h1>
        <div class="tipusMenjar">
            <div class="tipusMenjar1">
                <h2>Entrepans</h2>
                <div class="prod">
                    <div class="producte1">
                        <img class="imatgeProductes" src="./img/sandwich.jpg">
                        <div class="titol"><h3>Sandwich Cantina</h3></div>
                        <div class="descripcio"><p>Amb llom, ceba, formatge, tomàquet i amanida</p></div>
                        <div class="preu"><h3>2,00 €</h3></div>
                        <div>
                            <form class="quantitat">
                                <label for="sandwich">Quantitat:</label>
                                <input type="number" name="sandwich" class="productos" value="" placeholder="Màxim 4" maxlength="4">
                            </form>
                        </div>
                    </div>
                    <div class="producte2">
                        <img class="imatgeProductes" src="./img/bocatabutifarra.jpg" alt="Entrepà calent">
                        <div class="titol"><h3>Entrepà calent</h3></div>
                        <div class="descripcio"><p>Entrepà de llom, botifarra, bacon, hamburguesa o truita</p></div>
                        <div class="preu"><h3>1,80 €</h3></div>
                        <div>
                            <form class="quantitat">
                                <label for="entrepacalent">Quantitat:</label>
                                <input type="number" name="entrepacalent" class="productos" value="" placeholder="Màxim 4" maxlength="4">
                            </form>
                        </div>
                    </div>
                    <div class="producte3">
                        <img class="imatgeProductes" src="./img/bocatafred.jpg" alt="Entrepà fred">
                        <div class="titol"><h3>Entrepà fred</h3></div>
                        <div class="descripcio"><p>Embotit a escollir amb formatge, amanida i tomàquet</p></div>
                        <div class="preu"><h3>1,90 €</h3></div>
                        <div>
                            <form class="quantitat">
                                <label for="entrepafred">Quantitat:</label>
                                <input type="number" name="entrepafred" class="productos" value="" placeholder="Màxim 4" maxlength="4">
                            </form>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="tipusMenjar2">
                <h2>Plats Combinats</h2>
                <div class="prod">
                    <div class="producte1">
                        <img class="imatgeProductes" src="./img/burgueripatates.jpg" alt="Hamburguesa">
                        <div class="titol"><h3>Hamburguesa</h3></div>
                        <div class="descripcio"><p>Acompanyada de patates o amanida</p></div>
                        <div class="preu"><h3>3,90 €</h3></div>
                        <div>
                            <form class="quantitat">
                                <label for="hamburguesa">Quantitat:</label>
                                <input type="number" name="hamburguesa" class="productos" value="" placeholder="Màxim 4" maxlength="4">
                            </form>
                        </div>
                    </div>
                    <div class="producte2">
                        <img class="imatgeProductes" src="./img/pastadeldia.jpg" alt="Pasta">
                        <div class="titol"><h3>Pasta del dia</h3></div>
                        <div class="descripcio"><p>Amb formatge i salsa de tomàquet o salsa carbonara</p></div>
                        <div class="preu"><h3>5,50 €</h3></div>
                        <div>
                            <form class="quantitat">
                                <label for="pastadeldia">Quantitat:</label>
                                <input type="number" name="pastadeldia" class="productos" value="" placeholder="Màxim 4" maxlength="4">
                            </form>
                        </div>
                    </div>
                    <div class="producte3">
                        <img class="imatgeProductes" src="./img/peixiverdures.jpg">
                        <div class="titol"><h3>Peix amb verdures</h3></div>
                        <div class="descripcio"><p>Peix del dia amb verdures</p></div>
                        <div class="preu"><h3>6,80 €</h3></div>
                        <div>
                            <form class="quantitat">
                                <label for="paixambverdures">Quantitat:</label>
                                <input type="number" name="peixambverdures" class="productos" value="" placeholder="Màxim 4" maxlength="4"> 
                            </form>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="tipusMenjar3">
                <h2>Begudes</h2>
                <div class="prod">
                    <div class="producte1">
                        <img class="imatgeProductes" src="./img/aigua.jpg">
                        <div class="titol"><h3>Aigua</h3></div>
                        <div class="descripcio"><p>Freda o natural de 0,75cl</p></div>
                        <div class="preu"><h3>1,00 €</h3></div>
                        <div>
                            <form class="quantitat">
                                <label for="aigua">Quantitat:</label>
                                <input type="number" name="aigua" class="productos" value="" placeholder="Màxim 4" maxlength="4">
                            </form>
                        </div>
                    </div>
                    <div class="producte2">
                        <img class="imatgeProductes" src="./img/cocacola.jpg">
                        <div class="titol"><h3>Gaseosa</h3></div>
                        <div class="descripcio"><p>A escollir entre Fanta de llimona, fanta de taronja o CocaCola</p></div>
                        <div class="preu"><h3>1,20 €</h3></div>
                        <div>
                            <form class="quantitat">
                                <label for="gaseosa">Quantitat:</label>
                                <input type="number" name="gaseosa" class="productos" value="" placeholder="Màxim 4" maxlength="4">
                            </form>
                        </div>
                    </div>
                    <div class="producte3">
                        <img class="imatgeProductes" src="./img/cafe2.jpg">
                        <div class="titol"><h3>Cafè</h3></div>
                        <div class="descripcio"><p>Cafè amb llet a escollir</p></div>
                        <div class="preu"><h3>1,20 €</h3></div>
                        <div>
                            <form class="quantitat">
                                <label for="cafe">Quantitat:</label>
                                <input type="number" name="cafe" class="productos" value="" placeholder="Màxim 4" maxlength="4">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="demanar">
       <button id="boto-comanda" onclick="comprobar();">Enviar comanda</button>
       
<!--
        <form id="enviarComanda" action="phpfunctions/enviar-comanda.php" method="POST">
            <input class="demanar-boto" type="submit" value="Enviar comanda">
        </form>
-->
    </div>
    <?php include "php/footer.php";?>   
</body>
</html>