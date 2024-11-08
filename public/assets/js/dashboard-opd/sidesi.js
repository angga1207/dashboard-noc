  var options = {
    series: [{
    name: 'Jumlah ASN',
    data: [44, 55, 57, 56, 61, 58, 63, 60, 66]
  }],
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
    enabled: false
  },
  stroke: {
    show: true,
    width: 2,
    colors: ['transparent']
  },
  xaxis: {
    categories: ['Kec. Indralaya', 'Kec. Indralaya Selatan', 'Kec. Indralaya Utara', 'Kec. Pemulutan', 'Kec. Pemulutan Barat', 'Kec. Pemulutan Selatan', 'Kec. Rantau Alai', 'Kec. Tanjung Raja', 'Kec. Tanjung Batu'],
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

  var chart = new ApexCharts(document.querySelector("#chartPegawaiSidesi"), options);
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
    text: "Persentasi Capaian LKH Per Desa/Kelurahan"
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

  var chart = new ApexCharts(document.querySelector("#chartLkhSidesi"), options);
  chart.render();


  var options = {
    series: [
        {
            name: "Surat Masuk",
            data: [10, 41, 35, 51, 49, 62, 69, 91, 148]
        },
        {
            name: "Surat Keluar",
            data: [102, 95, 19, 159, 69, 82, 99, 191, 228]
        },
    ],
    chart: {
    height: 350,
    type: 'line',
    zoom: {
      enabled: false
    }
  },
  colors: ['#0F98E7', '#FF6036'],
  dataLabels: {
    enabled: false
  },
  stroke: {
    curve: 'straight'
  },
  title: {
    text: 'Kondisi Tata Naskah Surat Sidesi',
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

  var chart = new ApexCharts(document.querySelector("#kondisiSuratSidesi"), options);
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
    text: 'Rekap Presensi Per Desa/Kelurahan',
    align: 'left'
  },
  dataLabels: {
    enabled: true,
    formatter: function (val, opts) {
      return opts.w.config.series[opts.seriesIndex];  // Menggunakan nilai asli data
    }
  }
  };

  var chart = new ApexCharts(document.querySelector("#chartPresensiSidesi"), options);
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
    text: 'Rekap Presensi Per Desa/Kelurahan',
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

  var chart = new ApexCharts(document.querySelector("#chartLinePresensiSidesi"), options);
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

var chart = new ApexCharts(document.querySelector("#chartPresensiPeriodikSidesi"), options);
chart.render();



var options = {
  series: [{
  name: 'Rata-rata LKH',
  data: [61, 58, 63, 60, 66, 55, 57, 56, 61, 58, 63, 60, 66, 76, 77, 78]
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
    'PEMERINTAH KECAMATAN KANDIS',
    'PEMERINTAH KECAMATAN SUNGAI PINANG',
    'PEMERINTAH KECAMATAN RANTAU PANJANG',
    'PEMERINTAH KECAMATAN RAMBANG KUANG',
    'PEMERINTAH KECAMATAN LUBUK KELIAT',
    'PEMERINTAH KECAMATAN MUARA KUANG',
    'PEMERINTAH KECAMATAN RANTAU ALAI',
    'PEMERINTAH KECAMATAN PAYARAMAN',
    'PEMERINTAH KECAMATAN TANJUNG RAJA',
    'PEMERINTAH KECAMATAN TANJUNG BATU',
    'PEMERINTAH KECAMATAN PEMULUTAN SELATAN',
    'PEMERINTAH KECAMATAN PEMULUTAN BARAT',
    'PEMERINTAH KECAMATAN PEMULUTAN',
    'PEMERINTAH KECAMATAN INDRALAYA SELATAN',
    'PEMERINTAH KECAMATAN INDRALAYA UTARA',
    'PEMERINTAH KECAMATAN INDRALAYA',
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

var chart = new ApexCharts(document.querySelector("#capaianLkhSidesi"), options);
chart.render();