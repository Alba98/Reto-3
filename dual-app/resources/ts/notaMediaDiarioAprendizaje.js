debugger;
var notas1 = document.getElementById("notas1");
notas1 === null || notas1 === void 0 ? void 0 : notas1.addEventListener("change", calcularMediaDiario);
var notas2 = document.getElementById("notas2");
notas2 === null || notas2 === void 0 ? void 0 : notas2.addEventListener("change", calcularMediaDiario);
var notas3 = document.getElementById("notas3");
notas3 === null || notas3 === void 0 ? void 0 : notas3.addEventListener("change", calcularMediaDiario);
var notas4 = document.getElementById("notas4");
notas4 === null || notas4 === void 0 ? void 0 : notas4.addEventListener("change", calcularMediaDiario);
var notas5 = document.getElementById("notas5");
notas5 === null || notas5 === void 0 ? void 0 : notas5.addEventListener("change", calcularMediaDiario);
var notas6 = document.getElementById("notas6");
notas6 === null || notas6 === void 0 ? void 0 : notas6.addEventListener("change", calcularMediaDiario);
var notas7 = document.getElementById("notas7");
notas7 === null || notas7 === void 0 ? void 0 : notas7.addEventListener("change", calcularMediaDiario);
function calcularMediaDiario() {
    var notas1 = parseFloat(document.getElementById("notas1").value);
    var notas2 = parseFloat(document.getElementById("notas2").value);
    var notas3 = parseFloat(document.getElementById("notas3").value);
    var notas4 = parseFloat(document.getElementById("notas4").value);
    var notas5 = parseFloat(document.getElementById("notas5").value);
    var notas6 = parseFloat(document.getElementById("notas6").value);
    var notas7 = parseFloat(document.getElementById("notas7").value);
    var mediaDiario = (notas1 + notas2 + notas3 + notas4 + notas5 + notas6 + notas7) / 7;
    // Redondea la media a dos decimales
    mediaDiario = Math.round(mediaDiario * 100) / 100;
    // Rellena el span con el valor de la media
    document.getElementById("notaMediaDiario").innerHTML = mediaDiario.toString();
}
