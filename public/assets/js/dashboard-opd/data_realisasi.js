var options = {
    series: [44, 55, ],
    chart: {
      type: 'donut',
      height: 350,
    },
    colors: ['#3388E1', '#FBC105'],
    labels: ['Sudah Terealisasi', 'Belum Terealisasi'],
    responsive: [{
      breakpoint: 480,
      options: {
        chart: {
          width: 200
        },
        legend: {
          position: 'bottom'
        },
      }
    }, ],
    title: {
      text: 'Realisasi Kinerja',
      align: 'left'
    },
  };

  var chart = new ApexCharts(document.querySelector("#dashboardRealKinerja"), options);
  chart.render();

  var options = {
    series: [44, 55, ],
    chart: {
      type: 'donut',
      height: 350,
    },
    colors: ['#6B26FF', '#19BED1'],
    labels: ['Sudah Terealisasi', 'Belum Terealisasi'],
    responsive: [{
      breakpoint: 480,
      options: {
        chart: {
          width: 200
        },
        legend: {
          position: 'bottom'
        },
      }
    }, ],
    title: {
      text: 'Realisasi Keuangan',
      align: 'left'
    },
  };

  var chart = new ApexCharts(document.querySelector("#dashboardRealKeuangan"), options);
  chart.render();