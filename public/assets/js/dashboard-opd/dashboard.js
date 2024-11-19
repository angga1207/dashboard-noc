// CHART PRESENSI
var options = {
    series: [44, 55, 41, 17, 15],
    chart: {
      type: 'donut',
      height: 393,
    },
    labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember',],
    responsive: [{
      breakpoint: 480,
      options: {
        chart: {
          width: 200,
        },
        legend: {
          position: 'bottom'
        },
      }
    }, ],
    title: {
      text: 'Dinas Komunikasi Informatika Statistik dan Persandian',
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

  var chart = new ApexCharts(document.querySelector("#chartPresensiSemestaDb"), options);
  chart.render();



//   JAM TANGGAL DAN TAHUN
var tw = new Date();
if (tw.getTimezoneOffset() == 0)(a = tw.getTime() + (7 * 60 * 60 * 1000))
else(a = tw.getTime());
tw.setTime(a);
var tahun = tw.getFullYear();
var hari = tw.getDay();
var bulan = tw.getMonth();
var tanggal = tw.getDate();
var hariarray = new Array("Minggu,", "Senin,", "Selasa,", "Rabu,", "Kamis,", "Jum'at,", "Sabtu,");
var bulanarray = new Array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September",
    "Oktober", "Nopember", "Desember");
document.getElementById("waktuAja").innerHTML = " Pukul : " + ((tw.getHours() < 10) ? "0" : "") + tw.getHours() +
    ":" +
    ((tw.getMinutes() <
        10) ? "0" :
    "") + tw.getMinutes() + (" WIB");


var tw = new Date();
if (tw.getTimezoneOffset() == 0)(a = tw.getTime() + (7 * 60 * 60 * 1000))
else(a = tw.getTime());
tw.setTime(a);
var tahun = tw.getFullYear();
var hari = tw.getDay();
var bulan = tw.getMonth();
var tanggal = tw.getDate();
var hariarray = new Array("Minggu,", "Senin,", "Selasa,", "Rabu,", "Kamis,", "Jum'at,", "Sabtu,");
var bulanarray = new Array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September",
    "Oktober", "Nopember", "Desember");
document.getElementById("tanggalwaktu").innerHTML = hariarray[hari] + " " + tanggal + " " + bulanarray[bulan] +
    " " + tahun;

// SELECT MODAL
$(document).ready(function () {
    // Inisialisasi Datepicker
    $('.fc-datepicker').datepicker({
      dateFormat: "mm/dd/yy"
    });

    // Inisialisasi Select2
    $('.select2-show-search').select2({
      width: '100%'
    });

    // Ketika filter diubah, perbarui daftar surat
    $('#modalSurat').on('change', 'input.fc-datepicker, .select2-show-search', function () {
      const startDate = $('.fc-datepicker').eq(0).val(); // Ambil tanggal awal
      const endDate = $('.fc-datepicker').eq(1).val(); // Ambil tanggal akhir
      const category = $('.select2-show-search').val(); // Ambil kategori surat

      // Buat permintaan AJAX untuk mendapatkan data surat sesuai filter
      $.ajax({
        url: 'url_endpoint_anda', // Ganti dengan URL API atau server untuk mengambil data surat
        method: 'GET',
        data: {
          startDate,
          endDate,
          category
        },
        success: function (response) {
          // Perbarui konten modal berdasarkan respons
          $('#modalSurat .modal-body').html(
            response); // Ini contoh, sesuaikan berdasarkan struktur respons Anda
        },
        error: function () {
          alert('Gagal memuat data surat.');
        }
      });
    });
  });


  // CHART PRESENSI
var options = {
  series: [44, 55],
  chart: {
    type: 'pie',
    height: 250,
  },
  labels: ['Sudah Realisasi', 'Belum Realisasi',],
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
    text: 'Dinas Komunikasi Informatika Statistik dan Persandian',
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

var chart = new ApexCharts(document.querySelector("#realisasiProgram"), options);
chart.render();


  // CHART PRESENSI
  var options = {
    series: [44, 55],
    chart: {
      type: 'pie',
      height: 250,
    },
    labels: ['Sudah Realisasi', 'Belum Realisasi',],
    colors: ['#FF1493', '#1E90FF',],
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
      text: 'Dinas Komunikasi Informatika Statistik dan Persandian',
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
  
  var chart = new ApexCharts(document.querySelector("#realisasiKegiatan"), options);
  chart.render();

    // Realisasi Pendapatan
    var options = {
      series: [44, 55],
      chart: {
        type: 'pie',
        height: 250,
      },
      labels: ['Sudah Realisasi', 'Belum Realisasi',],
      colors: ['#00FA9A', '#DA70D6',],
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
        text: 'Dinas Komunikasi Informatika Statistik dan Persandian',
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
    
    var chart = new ApexCharts(document.querySelector("#realisasiPendapatan"), options);
    chart.render();


        // Realisasi Belanja
        var options = {
          series: [44, 55],
          chart: {
            type: 'pie',
            height: 250,
          },
          labels: ['Sudah Realisasi', 'Belum Realisasi',],
          colors: ['#FFA500', '#00CED1',],
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
            text: 'Dinas Komunikasi Informatika Statistik dan Persandian',
            align: 'left'
          },
          legend: {
            position: 'bottom'
          },
          dataLabels: {
            enabled: true,
            formatter: function (label, opts) {
              return opts.w.config.series[opts.seriesIndex]; // Menggunakan nilai asli data
            }
          }
        };
        
        var chart = new ApexCharts(document.querySelector("#realisasiBelanja"), options);
        chart.render();


        // Chart Line
        var options = {
          series: [{
            name: 'Presensi',
            data: [44, 55, 41, 17, 15, 44, 55, 41, 17, 15, 44, 55,] // Replace with appropriate y-axis data
          }],
          chart: {
            type: 'line',
            height: 375,
          },
          xaxis: {
            categories: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember',],// Labels for x-axis
          },
          title: {
            text: 'Dinas Komunikasi Informatika Statistik dan Persandian',
            align: 'left'
          },
          legend: {
            position: 'bottom'
          },
          dataLabels: {
            enabled: true,
            formatter: function (val, opts) {
              return opts.w.config.series[0].data[opts.dataPointIndex]; // Display actual data values
            }
          },
          responsive: [{
            breakpoint: 480,
            options: {
              chart: {
                width: 200,
              },
              legend: {
                position: 'bottom'
              },
            }
          }]
        };
        
        var chart = new ApexCharts(document.querySelector("#chartPresensiSemestaDbLine"), options);
        chart.render();
        
        // Realisasi Belanja
        var options = {
          series: [94, 55],
          chart: {
            type: 'donut',
            height: 215,
          },
          labels: ['PNS', 'PPPK',],
          colors: ['#00CED1', '#FFA500',],
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
            text: 'Jumlah PNS dan PPPK',
            align: 'top'
          },
          legend: {
            position: 'bottom'
          },
          dataLabels: {
            enabled: true,
            formatter: function (val, opts) {
              return opts.w.config.series[opts.seriesIndex] +  val  + "Orang"; // Menggunakan nilai asli data
            }
          }
        };
        
        var chart = new ApexCharts(document.querySelector("#jumlahAsnSemesta"), options);
        chart.render();



        // Kondisi NON ASN
        var options = {
          series: [{
            name: 'Jumlah',
            data: [44, 122] // Data values for each category
          }],
          chart: {
            type: 'bar',
            height: 170,
          },
          plotOptions: {
            bar: {
              horizontal: true,
              distributed: true // Distribute colors for each bar
            }
          },
          colors: ['#1E90FF', '#FF6347'], // Set individual colors for each bar
          xaxis: {
            categories: ['Laki-laki', 'Perempuan'] // Labels for each bar
          },
          legend: {
            position: 'bottom'
          },
          dataLabels: {
            enabled: true,
            formatter: function (val, opts) {
              return opts.w.config.series[0].data[opts.dataPointIndex]; // Display actual data values
            }
          },
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
          }]
        };
        
        var chart = new ApexCharts(document.querySelector("#kondisiNonAsn"), options);
        chart.render();
        
        
        
