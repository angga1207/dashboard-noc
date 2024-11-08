// PENDUDUK PER KECAMATAN
var options = {
  series: [{
    name: 'Jumlah Penduduk PerKecamatan',
    data: [44, 55, 57, 56, 61, 58, 63, 60, 66, 44, 55, 57, 56, 61, 17, 19]
  }],
  chart: {
    type: 'bar',
    height: 350
  },
  plotOptions: {
    bar: {
      horizontal: false,
      columnWidth: '55%',
      endingShape: 'rounded',
      distributed: true  
    },
  },
  colors: ['#1E90FF', '#32CD32', '#FFD700', '#FF6347', '#8A2BE2', '#FF4500', '#DA70D6', '#00FA9A', '#FF69B4', '#FFA500', '#00CED1', '#9ACD32', '#7B68EE', '#FF1493', '#1E90FF', '#32CD32'],
  dataLabels: {
    enabled: true,
    style: {
      colors: ['#333']
    },
    rotate: -90,
    offsetY: 80, // Mengatur posisi vertikal data labels di atas bar
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
      show: false,
      rotate: -90, // Mengatur rotasi label menjadi vertikal
      style: {
        fontSize: '10px', // Ukuran font label (opsional)
      }
    }
  },
  yaxis: {
    title: {
      text: 'Penduduk (Jiwa)'
    }
  },
  fill: {
    opacity: 1
  },
  legend: {
    enabled: false,
    position: 'bottom'
  },
  tooltip: {
    y: {
      formatter: function (val) {
        return " " + val + "jiwa"
      }
    }
  }
};

var chart = new ApexCharts(document.querySelector("#pendudukPerKecamatan"), options);
chart.render();


// PENDUDUK BERDASARKAN JENIS KELAMIN //
var options = {
  series: [44, 55],
  chart: {
    type: 'donut',
    height: 350,
  },
  labels: [
    'Laki-laki',
    'Perempuan',
  ],
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
    text: 'Jumlah Penduduk Berdasarkan Jenis Kelamin',
    align: 'left'
  },
  legend: {
    position: 'bottom'
  },
  dataLabels: {
    enabled: true,
    formatter: function (val, opts) {
      return opts.w.config.series[opts.seriesIndex]; // Menggunakan nilai asli data
    }
  }
};

var chart = new ApexCharts(document.querySelector("#pendudukSex"), options);
chart.render();


// PENDUDUK MENURUT JENIS PEKERJAAN
var options = {
    series: [{
      name: 'Jumlah Penduduk PerKecamatan',
      data: [44, 55, 57, 56, 61, 58, 63, 60, 66, 44, 55, 57, 56, ]
    }],
    chart: {
      type: 'bar',
      height: 350
    },
    plotOptions: {
      bar: {
        horizontal: false,
        columnWidth: '55%',
        endingShape: 'rounded',
        distributed: true  
      },
    },
    colors: ['#1E90FF', '#32CD32', '#FFD700', '#FF6347', '#8A2BE2', '#FF4500', '#DA70D6', '#00FA9A', '#FF69B4', '#FFA500', '#00CED1', '#9ACD32', '#7B68EE', '#FF1493', '#1E90FF', '#32CD32'],
    dataLabels: {
      enabled: true,
      style: {
        colors: ['#333']
      },
      rotate: -90,
      offsetY: 100, // Mengatur posisi vertikal data labels di atas bar
      position: 'top',
    },
    stroke: {
      show: true,
      width: 2,
      colors: ['transparent']
    },
    xaxis: {
      categories: [
        'Belum Bekerja',
        'Pensiunan',
        'TNI/POLRI',
        'PNS Selain Guru & Dosen',
        'Guru',
        'Dosen',
        'Sopir/Masisnis',
        'Pilot',
        'Petani',
        'Pekebun',
        'Peternak',
        'Nelayan',
        'Pedagang',

      ],
      labels: {
        show: false,
        rotate: -90, // Mengatur rotasi label menjadi vertikal
        style: {
          fontSize: '10px', // Ukuran font label (opsional)
        }
      }
    },
    yaxis: {
      title: {
        text: 'Penduduk (Jiwa)'
      }
    },
    fill: {
      opacity: 1
    },
    tooltip: {
      y: {
        formatter: function (val) {
          return " " + val + "jiwa"
        }
      }
    }
  };
  
  var chart = new ApexCharts(document.querySelector("#kelompokPekerjaan"), options);
  chart.render();


//   KELOMPOK UMUR 
var options = {
    series: [{
      name: 'Jumlah Penduduk PerKecamatan',
      data: [44, 55, 57, 56, 61, 58, 63, 60, 66, 44, 55, 57, 56, 50, 65, 57]
    }],
    chart: {
      type: 'bar',
      height: 350
    },
    plotOptions: {
      bar: {
        horizontal: false,
        columnWidth: '55%',
        endingShape: 'rounded',
        distributed: true  
      },
    },
    colors: [
      '#c3e3f9', 
      '#afdaf7', 
      '#9bd1f5', 
      '#86c7f3', 
      '#72bef1', 
      '#5eb5ef', 
      '#4aabed', 
      '#36a2eb', 
      '#36a2eb',
      '#3192d4', 
      '#2b82bc', 
      '#2671a5', 
      '#20618d', 
      '#1b5176', 
      '#16415e', 
      '#103146',
    ],
    dataLabels: {
      enabled: true,
      style: {
        colors: ['#333']
      },
      rotate: -90,
      offsetY: 120, // Mengatur posisi vertikal data labels di atas bar
      position: 'top',
    },
    stroke: {
      show: true,
      width: 2,
      colors: ['transparent']
    },
    xaxis: {
      categories: [
        "Umur 0-5", 
        "Umur 5-9", 
        "Umur 10-14", 
        "Umur 15-19", 
        "Umur 20-24", 
        "Umur 25-29",
        "Umur 20-34",
        "Umur 35-39",
        "Umur 40-44",
        "Umur 45-49",
        "Umur 50-54",
        "Umur 55-59",
        "Umur 60-64",
        "Umur 65-69",
        "Umur 70-74",
        "Umur 75+",
    ],
      labels: {
        show: false,
        rotate: -90, // Mengatur rotasi label menjadi vertikal
        style: {
          fontSize: '10px', // Ukuran font label (opsional)
        }
      }
    },
    yaxis: {
      title: {
        text: 'Penduduk (Jiwa)'
      }
    },
    fill: {
      opacity: 1
    },
    tooltip: {
      y: {
        formatter: function (val) {
          return " " + val + "jiwa"
        }
      }
    }
  };
  
  var chart = new ApexCharts(document.querySelector("#kelompokUmur"), options);
  chart.render();

  //   KELOMPOK UMUR 
  var options = {
    series: [44, 55, 41, 17, 15],
    chart: {
    type: 'donut',
    height: 350,
  },
  labels: ['Bantuan Langsung Tunai', 'Keluarga Harapan', 'Kartu Keluarga Sejahtera', 'Jenis Bantuan 1', 'Jenis Bantuan 2', 'Jenis Bantuan 3', 'Jenis Bantuan 4'],
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
    text: 'Jumlah Penerima Bantuan Berdasarkan Jenis Bantuan',
    align: 'left'
  },
  dataLabels: {
    enabled: true,
    formatter: function (val, opts) {
      return opts.w.config.series[opts.seriesIndex];  // Menggunakan nilai asli data
    }
  }
  };
  
  var chart = new ApexCharts(document.querySelector("#penerimaJenisBantuan"), options);
  chart.render();
  
  
  var options = {
    series: [{
    name: 'Total Penerima Bantuan',
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
      endingShape: 'rounded',
      distributed: true
    },
  },
  colors: ['#1E90FF', '#32CD32', '#FFD700', '#FF6347', '#8A2BE2', '#FF4500', '#DA70D6', '#00FA9A', '#FF69B4', '#FFA500', '#00CED1', '#9ACD32', '#7B68EE', '#FF1493', '#1E90FF', '#32CD32'],
  dataLabels: {
    enabled: true,
    style: {
      colors: ['#333']
    },
    rotate: -90,
    offsetY: 100, // Mengatur posisi vertikal data labels di atas bar
    position: 'top',
  },
  stroke: {
    show: true,
    width: 2,
    colors: ['transparent']
  },
  xaxis: {
    categories: 
    ['Kec. Indralaya', 'Kec. Indralaya Selatan', 'Kec. Indralaya Utara', 'Kec. Pemulutan', 'Kec. Pemulutan Barat', 'Kec. Pemulutan Selatan', 'Kec. Rantau Alai', 'Kec. Tanjung Raja', 'Kec. Tanjung Batu'],
    labels: {
      show: false,
      rotate: -90, // Mengatur rotasi label menjadi vertikal
      style: {
        fontSize: '10px', // Ukuran font label (opsional)
      }
    },
  },
  yaxis: {
    title: {
      text: 'Total Penerima Bantuan'
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
  
  var chart = new ApexCharts(document.querySelector("#penerimaBantuanPerKecamatan"), options);
  chart.render();

