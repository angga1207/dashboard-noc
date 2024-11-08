var ctb40 = document.getElementById('chartBar40').getContext('2d');
new Chart(ctb40, {
  type: 'horizontalBar',
  data: {
    labels: ['Indralaya', 'Indralaya Utara', 'Indralaya Selatan', 'Tanjung Batu', 'Payaraman', 'Tanjung Raja'],
    datasets: [{
      label: '# of Votes',
      data: [12, 39, 20, 10, 25, 18],
      backgroundColor: [
        '#29B0D0',
        '#2A516E',
        '#F07124',
        '#CBE0E3',
        '#979193'
      ]
    }]
  },
  options: {
    legend: {
      display: false,
      labels: {
        display: false
      }
    },
    scales: {
      yAxes: [{
        ticks: {
          beginAtZero: true,
          fontSize: 10
        }
      }],
      xAxes: [{
        ticks: {
          beginAtZero: true,
          fontSize: 11,
          max: 80
        }
      }]
    }
  }
  
});




// PIE //
var ctx70 = document.getElementById('chartDonuts');
var myPieChart70 = new Chart(ctx70, {
  type: 'doughnut',
  data: {
    labels: ['Laki-laki', 'Perempuan'],
    datasets: [{
      label: '# of Votes',
      data: [12, 38],
      backgroundColor: [
        '#E4B500',
        '#536FC5',
      ]
    }]
  },
  options: {
    responsive: true,
    legend: {
      display: true,
    },
    animation: {
      animateScale: true,
      animateRotate: true
    }
  },
});


// Radar //
var ctx80 = document.getElementById('kepadatanPenduduk');
var myPieChart80 = new Chart(ctx80, {
  type: 'radar',
  data: {
    labels: ["Indralaya", "Indralaya Mulya", "Indralaya Utara", "Pemulutan", "Tanjung Raja", "Tanjung Batu"],
    datasets: [{
        label: "Student A",
        backgroundColor: "#E4B500",
        data: [65, 75, 70, 80, 60, 80]
      }, {
        label: "Student B",
        backgroundColor: "#536FC5",
        data: [54, 65, 60, 70, 70, 75]
      }]
  },
  options: {
    responsive: true,
    legend: {
      display: false,
    },
    animation: {
      animateScale: true,
      animateRotate: true
    },
    plugins: {
        title: {
            display: true,
            text: 'Chart Radar Js'
        }
    }
  },
});


// Bar //
var ctx90 = document.getElementById('lajuPenduduk');
var myPieChart90 = new Chart(ctx90, {
    type: 'bar',
    data: {
        labels: ["Indralaya", "Indralaya Mulya", "Indralaya Utara", "Pemulutan", "Tanjung Raja", "Tanjung Batu"],
      datasets: [{
        label: 'data-1',
        data: [2202, 2029, 3045, 1789, 2850, 2014, 2007],
        backgroundColor: "#536FC5"
      }]
    },
  options: {
    responsive: true,
    legend: {
      display: false,
    },
    animation: {
      animateScale: true,
      animateRotate: true
    },
    plugins: {
        title: {
            display: true,
            text: 'Chart Radar Js'
        }
    }
  },
});


// Bar //
var ctx100 = document.getElementById('kelompokUmur');
var myPieChart100 = new Chart(ctx100, {
    type: 'bar',
    data: {
        labels: [
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
      datasets: [{
        label: 'data-1',
        data: [2202, 2029, 3045, 1789, 2850, 2014, 2007,2202, 2029, 3045, 1789, 2850, 2014, 2007,  2850, 2014, 2007,2202, 2029, 3045, 1789, 2850],
        backgroundColor: "#536FC5"
      }]
    },
  options: {
    responsive: true,
    legend: {
      display: false,
    },
    animation: {
      animateScale: true,
      animateRotate: true
    },
    plugins: {
        title: {
            display: true,
            text: 'Chart Radar Js'
        }
    }
  },
});

// Bar //
var ctx101 = document.getElementById('kelompokPekerjaan');
var myPieChart101 = new Chart(ctx101, {
    type: 'bar',
    data: {
        labels: [
            "Tidak Bekerja", 
            "Petani", 
            "Pedagang", 
            "Pekebun", 
            "Guru", 
            "Karyawan BUMN",
            "Karyawan Swasta",
            "Dosen",
            "TNI/Polri",
            "Wartawan",
            "Dokter",
            "Aggota DPR/D",
            "Buruh",
            "Pensiun",
            "Mekanik",
            "Tukang Jahit",
        ],
      datasets: [{
        label: 'data-1',
        data: [2202, 2029, 3045, 1789, 2850, 2014, 2007,2202, 2029, 3045, 1789, 2850, 2014, 2007,  2850, 2014, 2007,2202, 2029, 3045, 1789, 2850],
        backgroundColor: "#536FC5"
      }]
    },
  options: {
    responsive: true,
    legend: {
      display: false,
    },
    animation: {
      animateScale: true,
      animateRotate: true
    },
    plugins: {
        title: {
            display: true,
            text: 'Chart Radar Js'
        }
    }
  },
});

var options = {
  series: [44, 55, 41, 17, 15],
  chart: {
  type: 'donut',
  height: 250,
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



var options = {
  series: [44, 55, 41, 17, 15],
  chart: {
  type: 'donut',
  height: 250,
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
  text: 'Hasil Evaluasi Akuntabilitas Kinerja Pemerintah Daerah Kabupaten Ogan Ilir',
  align: 'left'
},
legend: {
  position: 'bottom'
},
};

var chart = new ApexCharts(document.querySelector("#evalakip"), options);
chart.render();



var options = {
  series: [{
  name: 'Nilai Akhir',
  data: [
    87.59, 
    84.05, 
    86.57, 
    80.05, 
    78.88,
    71.64,
    75.63,
    77.01,
    79.63,
    81.94,
    68.42,
    81.73,
    80.29,
    76.06,
    83.15, 75.13, 81.18, 75.72, 81.85, 79.55, 77.19, 70.07, 84.37, 72.84, 84.46, 60.83, 81.81, 87.96, 83.50, 83.12, 83.18, 0, 98.61, 0, 76.41, 98.58, 86.25, 0, 0, 96.82, 97.87, 0, 91.64, 98.95, 78.96, 71.00, 65.17
   ]
}],
  chart: {
  type: 'bar',
  height: 750,
},
plotOptions: {
  bar: {
    horizontal: true,
    columnWidth: '100%',
    endingShape: 'rounded'
  },
},
dataLabels: {
  enabled: true
},
stroke: {
  show: false,
  width: 1,
  colors: ['transparent']
},
xaxis: {
  categories: [
'INSPEKTORAT DAERAH',
'DINAS PENDIDIKAN DAN KEBUDAYAAN',
'DINAS KESEHATAN',
'DINAS PUPR',
'DINAS PERKIMTAN',
'SATPOL PP',
'DINAS SOSIAL',
'DINAS KETAHANAN PANGAN DAN PERTANIAN',
'DINAS PERIKANAN',
'DISPERINDAGKOP UKM',
'DISPORPAR',
'BAPPEDA',
'DINAS PPPA PPKB',
'DINAS PERPUSTAKAAN',
'DINAS PM PTSP',
'DINAS PERHUBUNGAN',
'DINAS PMD',
'DINAS DUK CAPIL',
'DINAS LINGKUNGAN HIDUP',
'DINAS TRANSNAKER',
'BPKAD',
'DINAS DAMKAR',
'RSUD',
'BPBD',
'BADAN LITBANGDA',
'BADAN KESBANGPOL',
'BAPENDA',
'BKPSDM',
'SEKRETARIAT DAERAH',
'DINAS KOMINFO',
'SEKRETARIAT DPRD',
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
      return " " + val + " "
    }
  }
}
};

var chart = new ApexCharts(document.querySelector("#evalakipDua"), options);
chart.render();




// Apexchart
var options = {
  series: [{
  name: 'Nilai Akhir',
  data: [
    87.59, 
    84.05, 
    86.57, 
    80.05, 
    78.88,
    71.64,
    75.63,
    77.01,
    79.63,
    81.94,
    68.42,
    81.73,
    80.29,
    76.06,
   ]
}],
  chart: {
  type: 'bar',
  height: 750,
},
plotOptions: {
  bar: {
    horizontal: true,
    columnWidth: '100%',
    endingShape: 'rounded'
  },
},
dataLabels: {
  enabled: true
},
stroke: {
  show: false,
  width: 1,
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
      return " " + val + "jiwa"
    }
  }
}
};

var chart = new ApexCharts(document.querySelector("#pendudukPerKecamatan"), options);
chart.render();