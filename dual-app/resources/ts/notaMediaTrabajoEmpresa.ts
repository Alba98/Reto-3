var nota1 = document.getElementById("nota1");
nota1?.addEventListener("change", notaMedia);
var nota2 = document.getElementById("nota2");
nota2?.addEventListener("change", notaMedia);
var nota3 = document.getElementById("nota3");
nota3?.addEventListener("change", notaMedia);
var nota4 = document.getElementById("nota4");
nota4?.addEventListener("change", notaMedia);
var nota5 = document.getElementById("nota5");
nota5?.addEventListener("change", notaMedia);
var nota6 = document.getElementById("nota6");
nota6?.addEventListener("change", notaMedia);
var nota7 = document.getElementById("nota7");
nota7?.addEventListener("change", notaMedia);
var nota8 = document.getElementById("nota8");
nota8?.addEventListener("change", notaMedia);
var nota9 = document.getElementById("nota9");
nota9?.addEventListener("change", notaMedia);
var nota10 = document.getElementById("nota10");
nota10?.addEventListener("change", notaMedia);

function notaMedia() {
    const nota1 = parseFloat((<HTMLInputElement>document.getElementById("nota1")).value);
    const nota2 = parseFloat((<HTMLInputElement>document.getElementById("nota2")).value);
    const nota3 = parseFloat((<HTMLInputElement>document.getElementById("nota3")).value);
    const nota4 = parseFloat((<HTMLInputElement>document.getElementById("nota4")).value);
    const nota5 = parseFloat((<HTMLInputElement>document.getElementById("nota5")).value);
    const nota6 = parseFloat((<HTMLInputElement>document.getElementById("nota6")).value);
    const nota7 = parseFloat((<HTMLInputElement>document.getElementById("nota7")).value);
    const nota8 = parseFloat((<HTMLInputElement>document.getElementById("nota8")).value);
    const nota9 = parseFloat((<HTMLInputElement>document.getElementById("nota9")).value);
    const nota10 = parseFloat((<HTMLInputElement>document.getElementById("nota10")).value);

    const media = (nota1 + nota2 + nota3 + nota4 + nota5 + nota6 + nota7 + nota8 + nota9 + nota10) / 10;

    // Rellena el span con el valor de la media
    (<HTMLInputElement>document.getElementById("notaMedia")).innerHTML = media.toString();
}