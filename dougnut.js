const ctxDoughnut  = document.getElementById('dougnutChart').getContext('2d');

  const doughnutChart = new Chart(ctxDoughnut , {
    type: 'doughnut',
    data: {
      labels: ['Blue', 'Red', 'Orange', 'Yellow', 'Green', 'Purple'],
      datasets: [{
        label: '# of Votes',
        data: [12, 19, 3, 5, 2, 3],
        
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
