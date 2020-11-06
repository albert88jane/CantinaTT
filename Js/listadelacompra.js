function comprobar() {
    let producto = [];
    let cantidad = [];
    let cont = 0;
    let inputs = document.getElementsByClassName("productos");

    for (let i = 0; i < inputs.length; i++) {

        let productoActual = document.getElementsByClassName("productos")[i];
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
