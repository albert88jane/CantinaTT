window.onload = function () {

    Document.write("Vivas el Betis");
    let listaprod = JSON.parse(localStorage.getItem('producto'));
    let listacant = JSON.parse(localStorage.getItem('cantidad'));
    let productos = ["donut", "croissant", "canyes", "bikini", "entrepacalent", "pizza", "xocolata", "cafe", "suc", "sandwich", "entrepafred", "hamburguesa", "pastadeldia", "peixambverdures", "aigua", "gaseosa"];
    let precio = [1.00, 1.20, 1.40, 1.60, 1.80, 1.40, 1.40, 1.20, 1.40, 2.00, 1.90, 3.90, 5.50, 6.80, 1.00, 1.20];
    let total = [];

    for (let i = 0; i < listaprod.length; i++) {
        if (listaprod[i] == productos[i]) {
            total[i] = listacant[i] * precio[i];
        }
    }
    console.log(total)
};
