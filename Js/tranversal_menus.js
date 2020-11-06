window.onload = function () {
    var horas = new Date();
    var horaActual = horas.getHours();
    var minutoActual = horas.getMinutes();
    if (horaActual <= 11 & minutoActual <= 30) {
        document.getElementById('menu1').style.display = "block";
        document.getElementById('menu2').style.display = "none";
    } else {
        document.getElementById('menu1').style.display = "none";
        document.getElementById('menu2').style.display = "block";
    }
}
