  //El método getContext() devuelve un dibujo contexto en el lienzo y '2d' representa un bidimensional.
 
var gradico = document.getElementById('Grafico');
if(gradico){
var ctx = document.getElementById('Grafico').getContext('2d');
var chart = new Chart(ctx, {
     type: 'bar',
     data: {
         labels: ['Estudiante 1', 'Estudiante 2', 'Estudiante 3', 'Estudiante 4', 'Estudiante 5'],
         datasets: [{
             label: 'Nota media',
             data: [10, 8.5, 8.0, 7,5, 7,0],
             backgroundColor: [
                 'rgba(255, 99, 132, 0.2)',
                 'rgba(54, 162, 235, 0.2)',
                 'rgba(255, 206, 86, 0.2)',
                 'rgba(75, 192, 192, 0.2)',
                 'rgba(153, 102, 255, 0.2)'
             ],
             borderColor: [
                 'rgba(255, 99, 132, 1)',
                 'rgba(54, 162, 235, 1)',
                 'rgba(255, 206, 86, 1)',
                 'rgba(75, 192, 192, 1)',
                 'rgba(153, 102, 255, 1)'
             ],
             borderWidth: 1
         }]
     },
     options: {
         scales: {
             yAxes: [{
                 ticks: {
                     beginAtZero: true
                 }
             }]
         }
     }
 });
}

