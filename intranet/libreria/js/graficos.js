var densityCanvas = document.getElementById("densityChart");

Chart.defaults.global.defaultFontFamily = "Lato";
Chart.defaults.global.defaultFontSize = 18;

var densityData = {
  label: 'HOMBRES',
  data: [2701,3449,14292,3214],
  backgroundColor: 'rgba(50, 46, 63, 0.897)',
  borderColor: 'rgba(50, 46, 63, 0.897)',
  yAxisID: "y-axis-density"
};
 
var gravityData = {
  label: 'MUJERES',
  data: [2675,3333,17464,4891],
  backgroundColor: 'rgba(0, 99, 132, 0.6)',
  borderColor: 'rgba(0, 99, 132, 0.6)',
  yAxisID: "y-axis-gravity"
};
 
var planetData = {
  labels: ["Infantil 0-9 años","Adolescencia 10-19 años","Adulto 20-64 años","Adulto mayores de 65 años"],
  datasets: [densityData, gravityData]
};
 
var chartOptions = {
  scales: {
    xAxes: [{
      barPercentage: 1,
      categoryPercentage: 0.6
    }],
    yAxes: [{
      id: "y-axis-density"
    }, {
      id: "y-axis-gravity"
    }]
  }
};
 
var barChart = new Chart(densityCanvas, {
  type: 'bar',
  data: planetData,
  options: chartOptions
});
