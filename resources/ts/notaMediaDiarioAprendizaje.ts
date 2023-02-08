debugger
var notas1 = document.getElementById("notas1");
notas1?.addEventListener("change", calcularMediaDiario);
var notas2 = document.getElementById("notas2");
notas2?.addEventListener("change", calcularMediaDiario);
var notas3 = document.getElementById("notas3");
notas3?.addEventListener("change", calcularMediaDiario);
var notas4 = document.getElementById("notas4");
notas4?.addEventListener("change", calcularMediaDiario);
var notas5 = document.getElementById("notas5");
notas5?.addEventListener("change", calcularMediaDiario);
var notas6 = document.getElementById("notas6");
notas6?.addEventListener("change", calcularMediaDiario);
var notas7 = document.getElementById("notas7");
notas7?.addEventListener("change", calcularMediaDiario);

function calcularMediaDiario() {
    const notas1 = parseFloat((<HTMLInputElement>document.getElementById("notas1")).value);
    const notas2 = parseFloat((<HTMLInputElement>document.getElementById("notas2")).value);
    const notas3 = parseFloat((<HTMLInputElement>document.getElementById("notas3")).value);
    const notas4 = parseFloat((<HTMLInputElement>document.getElementById("notas4")).value);
    const notas5 = parseFloat((<HTMLInputElement>document.getElementById("notas5")).value);
    const notas6 = parseFloat((<HTMLInputElement>document.getElementById("notas6")).value);
    const notas7 = parseFloat((<HTMLInputElement>document.getElementById("notas7")).value);

    var mediaDiario = (notas1 + notas2 + notas3 + notas4 + notas5 + notas6 + notas7) / 7;
    
    // Redondea la media a dos decimales
    mediaDiario = Math.round(mediaDiario * 100) / 100;

    // Rellena el span con el valor de la media
    (<HTMLInputElement>document.getElementById("notaMediaDiario")).innerHTML = mediaDiario.toString();
}
