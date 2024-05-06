var data = {
    labels: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio"],
    datasets: [{
      label: "Visitas Mensuales",
      backgroundColor: "rgb(121, 181, 250)",
      borderColor: "black",
      borderWidth: 1,
      data: [65, 59, 80, 81, 56, 55, 40],
    }]
  };

  // Configuración del gráfico
  var options = {
    scales: {
      yAxes: [{
        ticks: {
          beginAtZero:true
        }
      }]
    }
  };

  // Crear el gráfico
  var ctx = document.getElementById("myChart").getContext("2d");
  var myChart = new Chart(ctx, {
    type: 'bar',
    data: data,
    options: options
  });
