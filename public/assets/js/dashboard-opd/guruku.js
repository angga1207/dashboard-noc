var options = {
    series: [44, 55,],
    chart: {
    type: 'donut',
    height: 350,
  },
  labels: ['Laki-laki', 'Perempuan'],
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
  },],
  title: {
    text: 'Kondisi Guru PNS',
    align: 'left'
  },
  legend: {
    position: 'bottom'
  },
  dataLabels: {
    enabled: true,
    formatter: function (val, opts) {
      return opts.w.config.series[opts.seriesIndex];  // Menggunakan nilai asli data
    }
  }
  };

  var chart = new ApexCharts(document.querySelector("#persentaseGuruPNS"), options);
  chart.render();

  var options = {
    series: [44, 55,],
    chart: {
    type: 'donut',
    height: 350,
  },
  colors: ['#FF8969', '#B99BF7'],
  labels: ['Laki-laki', 'Perempuan'],
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
  },],
  title: {
    text: 'Kondisi Guru PPPK',
    align: 'left'
  },
  legend: {
    position: 'bottom'
  },
  dataLabels: {
    enabled: true,
    formatter: function (val, opts) {
      return opts.w.config.series[opts.seriesIndex];  // Menggunakan nilai asli data
    }
  }
  };

  var chart = new ApexCharts(document.querySelector("#persentaseGuruPppk"), options);
  chart.render();


  var options = {
    series: [{
    data: [400, 430, 448, 470, 540, 580, 690,]
  }],
    chart: {
    type: 'bar',
    height: 350
  },
  plotOptions: {
    bar: {
      borderRadius: 4,
      borderRadiusApplication: 'end',
      horizontal: true,
    }
  },
  title: {
    text: "Jumlah ASN (Guruku) Berdasarkan Rentang Usia"
  },
  dataLabels: {
    enabled: false
  },
  xaxis: {
    categories: ['25-30', '31-35', '36-40', '41-45', '46-50', '51-55', '56-60',
    ],
  }
  };

  var chart = new ApexCharts(document.querySelector("#rentangUsia"), options);
  chart.render();



  var options = {
    series: [{
    data: [0, 0, 0, 400, 430, 448, 470, 540, 580, 690, 1100, 1200, 1380, 0, 0, 0, 0]
  }],
    chart: {
    type: 'bar',
    height: 380
  },
  plotOptions: {
    bar: {
      barHeight: '100%',
      distributed: true,
      horizontal: true,
      dataLabels: {
        position: 'bottom'
      },
    }
  },
  colors: ['#33b2df', '#546E7A', '#d4526e', '#13d8aa', '#A5978B', '#2b908f', '#f9a3a4', '#90ee7e',
    '#f48024', '#69d2e7'
  ],
  dataLabels: {
    enabled: true,
    textAnchor: 'start',
    style: {
      colors: ['#000'],
    },
    formatter: function (val, opt) {
      return " _ "+ opt.w.globals.labels[opt.dataPointIndex] + ":  " + val
    },
    offsetX: 0,
    dropShadow: {
      enabled: false
    }
  },
  stroke: {
    width: 1,
    colors: ['#fff']
  },
  xaxis: {
    categories: ['Ia', 'Ib', 'Ic', 'Id', 'IIa', 'IIb', 'IIc',
      'IId', 'IIIa', 'IIIb', 'IIIc', 'IIId', 'IVa', 'IVb', 'IVc', 'IVd','IVe'
    ],
  },
  yaxis: {
    labels: {
      show: false
    }
  },
  title: {
      text: 'Guru PNS Berdasarkan Golongan',
      align: 'center',
      floating: true
  },

  tooltip: {
    theme: 'dark',
    x: {
      show: false
    },
    y: {
      title: {
        formatter: function () {
          return ''
        }
      }
    }
  }
  };

  var chart = new ApexCharts(document.querySelector("#asnPangGol"), options);
  chart.render();


  var options = {
    series: [44, 55, 122,],
    chart: {
    type: 'donut',
    height: 350,
  },
  labels: ['Ahli Pertama (DIV/Sarjana Linear) IX',
    'Ahli Pertama (Magister Linear) X',
    'Ahli Muda (Doktor Linear) XI'],
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
  },],
  legend: {
    position: 'bottom'
  },
  title: {
    text: 'Kondisi Guru PPPK',
    align: 'left'
  },
  dataLabels: {
    enabled: true,
    formatter: function (val, opts) {
      return opts.w.config.series[opts.seriesIndex];  // Menggunakan nilai asli data
    }
  }
  };

  var chart = new ApexCharts(document.querySelector("#pppkPangGol"), options);
  chart.render();


  var options = {
    series: [0, 0, 0 , 44, 55, 122, 88, 99, 102, 0, 0, 0 ],
    chart: {
    type: 'donut',
    height: 350,
  },
  labels: ['Ia', 'Ib', 'Ic', 'Id', 'IIa', 'IIb', 'IIc',
      'IId', 'IIIa', 'IIIb', 'IIIc', 'IIId', 'IVa', 'IVb', 'IVc', 'IVd','IVe'],
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
  },],
  title: {
    text: 'Kondisi Guru PNS',
    align: 'left'
  },
  legend: {
    position: 'bottom'
  },
  dataLabels: {
    enabled: true,
    formatter: function (val, opts) {
      return opts.w.config.series[opts.seriesIndex];  // Menggunakan nilai asli data
    }
  }
  };

  var chart = new ApexCharts(document.querySelector("#pnsPangGol"), options);
  chart.render();




  var options = {
    series: [44],
    chart: {
    height: 360,
    type: 'donut',
    dropShadow: {
      enabled: true,
      color: '#111',
      top: -1,
      left: 3,
      blur: 3,
      opacity: 0.2
    }
  },
  stroke: {
    width: 0,
  },
  plotOptions: {
    pie: {
      donut: {
        labels: {
          show: true,
          total: {
            showAlways: true,
            show: true
          }
        }
      }
    }
  },
  labels: ["Laporan Kinerja Harian"],
  dataLabels: {
    dropShadow: {
      blur: 3,
      opacity: 0.8
    }
  },
  fill: {
  type: 'pattern',
    opacity: 1,
    pattern: {
      enabled: true,
      style: ['verticalLines', 'squares', 'horizontalLines', 'circles','slantedLines'],
    },
  },
  states: {
    hover: {
      filter: 'none'
    }
  },
  theme: {
    palette: 'palette2'
  },
  title: {
    text: "Persentasi Capaian LKH"
  },
  legend: {
    position: 'bottom'
  },
  responsive: [{
    breakpoint: 480,
    options: {
      chart: {
        width: 200
      },
      legend: {
        position: 'bottom'
      }
    }
  }]
  };

  var chart = new ApexCharts(document.querySelector("#lkhGuruKu"), options);
  chart.render();



  var options = {
    series: [44, 55, 41, 17, 15],
    chart: {
    type: 'donut',
    height: 250,
  },
  labels: ['Presensi Hadir', 'Presensi DL', 'Presensi KL', 'Presensi TAP', 'Presensi Sakit', 'Presensi Izin', 'Presensi TK'],
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
  },],
  title: {
    text: 'Rekap Presensi Per OPD',
    align: 'left'
  },
  dataLabels: {
    enabled: true,
    formatter: function (val, opts) {
      return opts.w.config.series[opts.seriesIndex];  // Menggunakan nilai asli data
    }
  }
  };

  var chart = new ApexCharts(document.querySelector("#chartPresensiGuru"), options);
  chart.render();

// Chart
var options = {
    series: [{
      name: "Presensi",
      data: [10, 41, 35, 51, 49, 62, 69, 91, 148]
  }],
    chart: {
    height: 240,
    type: 'line',
    zoom: {
      enabled: false
    }
  },
  dataLabels: {
    enabled: false
  },
  stroke: {
    curve: 'straight'
  },
  title: {
    text: 'Rekap Presensi Per OPD',
    align: 'left'
  },
  grid: {
    row: {
      colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
      opacity: 0.5
    },
  },
  xaxis: {
    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
  }
  };

  var chart = new ApexCharts(document.querySelector("#chartLinePresensiGuruku"), options);
  chart.render();


//   Semi donut
var options = {
    series: [44],
    chart: {
    height: 360,
    type: 'donut',
    dropShadow: {
      enabled: true,
      color: '#111',
      top: -1,
      left: 3,
      blur: 3,
      opacity: 0.2
    }
  },
  stroke: {
    width: 0,
  },
  plotOptions: {
    pie: {
      donut: {
        labels: {
          show: true,
          total: {
            showAlways: true,
            show: true
          }
        }
      }
    }
  },
  labels: ["Laporan Kinerja Harian"],
  dataLabels: {
    dropShadow: {
      blur: 3,
      opacity: 0.8
    }
  },
  fill: {
  type: 'pattern',
    opacity: 1,
    pattern: {
      enabled: true,
      style: ['verticalLines', 'squares', 'horizontalLines', 'circles','slantedLines'],
    },
  },
  states: {
    hover: {
      filter: 'none'
    }
  },
  theme: {
    palette: 'palette2'
  },
  title: {
    text: "Persentasi Capaian LKH"
  },
  responsive: [{
    breakpoint: 480,
    options: {
      chart: {
        width: 200
      },
      legend: {
        position: 'bottom'
      }
    }
  }]
  };

  var chart = new ApexCharts(document.querySelector("#chartLkhGuruku"), options);
  chart.render();


  var options = {
    series: 
    [
      {
      name: 'Sudah Sertifikasi',
      data: [44, 55, 66, 77, 88, 99, 10],
      },
        {
      name: 'Belum Sertifikasi',
      data: [12, 25, 21, 10, 34, 35, 88],
    },
    ],
    chart: {
    type: 'bar',
    height: 350
  },
  plotOptions: {
    bar: {
      horizontal: false,
      columnWidth: '55%',
      endingShape: 'rounded'
    },
  },
  dataLabels: {
    enabled: true
  },
  stroke: {
    show: true,
    width: 2,
    colors: ['transparent']
  },
  xaxis: {
    categories: ['Indralaya', 'Indralaya Utara', 'Indralaya Selatan', 'Pemulutan', 'Pemulutan Selatan', 'Pemulutan Barat', 'Payaraman'],
    labels: {
      rotate: -90,           // Mengatur rotasi label menjadi vertikal
      style: {
        fontSize: '10px',    // Ukuran font label (opsional)
      }
    }
  },
  yaxis: {
    title: {
      text: 'Jumlah (ASN)'
    }
  },
  fill: {
    opacity: 1
  },
  tooltip: {
    y: {
      formatter: function (val) {
        return " " + val + " Orang"
      }
    }
  }
  };

  var chart = new ApexCharts(document.querySelector("#guruSertifikasi"), options);
  chart.render();


      // Chart
var options = {
  series: [
    {
    name: "Masuk",
    data: [10, 41, 35, 51, 49, 62, 69, 91, 148]
  },
    {
    name: "Pulang",
    data: [1, 2, 3, 5, 4, 6, 6, 9, 8]
  }
],
  chart: {
  height: 240,
  type: 'line',
  zoom: {
    enabled: false
  }
},
dataLabels: {
  enabled: false
},
stroke: {
  curve: 'straight'
},
title: {
  text: 'Grafik Presensi Masuk & Pulang',
  align: 'left'
},
grid: {
  row: {
    colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
    opacity: 0.5
  },
},
xaxis: {
  categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
}
};

var chart = new ApexCharts(document.querySelector("#chartPresensiPeriodikGuruku"), options);
chart.render();



// Capaian LKH Guruku
var options = {
  series: [{
  name: 'Rata-rata LKH Pegawai/Perangkat Daerah',
  data: [44, 55, 57, 56, 61, 58, 63, 60, 66, 44, 55,]
}],
  chart: {
  type: 'bar',
  height: 450
},
plotOptions: {
  bar: {
    horizontal: false,
    columnWidth: '55%',
    endingShape: 'rounded'
  },
},
dataLabels: {
  enabled: true,
  style: {
    colors: ['#333']
  },
  offsetY: 100,             // Mengatur posisi vertikal data labels di atas bar
  position: 'top',  
},
stroke: {
  show: true,
  width: 2,
  colors: ['transparent']
},
xaxis: {
  categories: [
    'SD Negeri 1',
    'SD Negeri 2',
    'SD Negeri 3',
    'SD Negeri 4',
    'SD Negeri 5',
    'SD Negeri 6',
    'SD Negeri 7',
    'SD Negeri 8',
    'SD Negeri 9',
    'SD Negeri 10',
    'SD Negeri 11',
      ],
      labels: {
        rotate: -90,           // Mengatur rotasi label menjadi vertikal
        style: {
          fontSize: '10px',    // Ukuran font label (opsional)
        }
      }
},
yaxis: {
  title: {
    text: 'Capaian LKH'
  }
},
fill: {
  opacity: 1
},
tooltip: {
  y: {
    formatter: function (val) {
      return " " + val + " "
    }
  }
}
};

var chart = new ApexCharts(document.querySelector("#chartLkhGuruku"), options);
chart.render();