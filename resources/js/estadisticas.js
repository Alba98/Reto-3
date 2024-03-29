
  fetch('/ChartJSController')
  .then(response => response.json())
  .then(data => {
    let sum = 0;
    let count = 0;
    for (let i = 0; i < data.length; i++) {
      sum += data[i].grade;
      count++;
    }
    const average = sum / count;
    console.log("La nota media es: " + average);
  })
  .catch(error => console.error(error));
  //El método getContext() devuelve un dibujo contexto en el lienzo y '2d' representa un bidimensional.
 
var gradico = document.getElementById('Grafico');
if(gradico){
var ctx = document.getElementById('Grafico').getContext('2d');
var chart = new Chart(ctx, {
     type: 'bar',
     data: {
         labels: ['2018 - 2019', '2019 - 2020', '2020 - 2021', '2021 - 2022', '2022 - 2023', '2023 - 2024'],
         datasets: [{
             label: 'Nota media',
             data: [7.5, 8.5, 6.5, 7.5, 9.5, 8],
             backgroundColor: [
                 'rgba(255, 99, 132, 0.2)',
                 'rgba(54, 162, 235, 0.2)',
                 'rgba(255, 206, 86, 0.2)',
                 'rgba(75, 192, 192, 0.2)',
                 'rgba(153, 102, 255, 0.2)',
                 'rgba(255, 159, 64, 0.2)'
             ],
             borderColor: [
                 'rgba(255, 99, 132, 1)',
                 'rgba(54, 162, 235, 1)',
                 'rgba(255, 206, 86, 1)',
                 'rgba(75, 192, 192, 1)',
                 'rgba(153, 102, 255, 1)',
                 'rgba(255, 159, 64, 1)'
             ],
             borderWidth: 1
         }
        ]
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

