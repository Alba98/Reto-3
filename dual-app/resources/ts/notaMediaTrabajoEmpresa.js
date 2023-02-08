var nota1 = document.getElementById("nota1");
nota1 === null || nota1 === void 0 ? void 0 : nota1.addEventListener("change", notaMedia);
var nota2 = document.getElementById("nota2");
nota2 === null || nota2 === void 0 ? void 0 : nota2.addEventListener("change", notaMedia);
var nota3 = document.getElementById("nota3");
nota3 === null || nota3 === void 0 ? void 0 : nota3.addEventListener("change", notaMedia);
var nota4 = document.getElementById("nota4");
nota4 === null || nota4 === void 0 ? void 0 : nota4.addEventListener("change", notaMedia);
var nota5 = document.getElementById("nota5");
nota5 === null || nota5 === void 0 ? void 0 : nota5.addEventListener("change", notaMedia);
var nota6 = document.getElementById("nota6");
nota6 === null || nota6 === void 0 ? void 0 : nota6.addEventListener("change", notaMedia);
var nota7 = document.getElementById("nota7");
nota7 === null || nota7 === void 0 ? void 0 : nota7.addEventListener("change", notaMedia);
var nota8 = document.getElementById("nota8");
nota8 === null || nota8 === void 0 ? void 0 : nota8.addEventListener("change", notaMedia);
var nota9 = document.getElementById("nota9");
nota9 === null || nota9 === void 0 ? void 0 : nota9.addEventListener("change", notaMedia);
var nota10 = document.getElementById("nota10");
nota10 === null || nota10 === void 0 ? void 0 : nota10.addEventListener("change", notaMedia);
function notaMedia() {
    var nota1 = parseFloat(document.getElementById("nota1").value);
    var nota2 = parseFloat(document.getElementById("nota2").value);
    var nota3 = parseFloat(document.getElementById("nota3").value);
    var nota4 = parseFloat(document.getElementById("nota4").value);
    var nota5 = parseFloat(document.getElementById("nota5").value);
    var nota6 = parseFloat(document.getElementById("nota6").value);
    var nota7 = parseFloat(document.getElementById("nota7").value);
    var nota8 = parseFloat(document.getElementById("nota8").value);
    var nota9 = parseFloat(document.getElementById("nota9").value);
    var nota10 = parseFloat(document.getElementById("nota10").value);
    var media = (nota1 + nota2 + nota3 + nota4 + nota5 + nota6 + nota7 + nota8 + nota9 + nota10) / 10;
    // Rellena el span con el valor de la media
    document.getElementById("notaMedia").innerHTML = media.toString();
}
