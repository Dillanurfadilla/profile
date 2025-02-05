console.log(typeof Chart);
console.log("script.js sudah dimuat!");

document.addEventListener("DOMContentLoaded", function () {
  let canvasElements = document.querySelectorAll(".chart-agama");
  console.log("Canvas ditemukan:", canvasElements);

  if (canvasElements.length === 0) {
      console.error("Elemen .chart-agama tidak ditemukan di halaman!");
      return;
  }

  canvasElements.forEach((canvasElement, index) => {
      const ctx = canvasElement.getContext("2d");
      new Chart(ctx, {
          type: "bar",
          data: {
              labels: ["Islam", "Kristen", "Hindu", "Budha", "Konghucu", "Katholik", "Kepercayaan lainnya"],
              datasets: [{
                  label: "Jumlah Penganut",
                  data: [427129, 7428, 72, 248, 12, 2737, 26],
                  backgroundColor: [
                      "rgba(255, 99, 132, 0.2)", "rgba(54, 162, 235, 0.2)",
                      "rgba(255, 206, 86, 0.2)", "rgba(75, 192, 192, 0.2)",
                      "rgba(153, 102, 255, 0.2)", "rgba(255, 159, 64, 0.2)",
                      "rgba(255, 206, 86, 0.2)"
                  ],
                  borderColor: [
                      "rgba(255, 99, 132, 1)", "rgba(54, 162, 235, 1)",
                      "rgba(255, 206, 86, 1)", "rgba(75, 192, 192, 1)",
                      "rgba(153, 102, 255, 1)", "rgba(255, 159, 64, 1)",
                      "rgba(255, 206, 86, 1)"
                  ],
                  borderWidth: 1
              }]
          },
          options: {
              responsive: true,
              scales: { y: { beginAtZero: true } }
          }
      });
  });
});

document.querySelectorAll('.btn-view-detail').forEach(button => {
  button.addEventListener('click', function() {
      const detailUrl = this.getAttribute('data-url'); // Pastikan tombol memiliki data-url
      window.open(detailUrl, '_blank'); // Buka di tab baru
  });
});



 // Grafik Data Agama
const agamaCanvas = document.querySelector(".chart-agama").getContext("2d");
const agamaChart = new Chart(agamaCanvas, {
  type: "bar",
  data: {
    labels: ["Islam", "Kristen", "Hindu", "Budha", "Konghucu", "Katholik", "Kepercayaan lainnya"],
    datasets: [
      {
        label: "Islam",
        data: [427129, 7428, 72, 248, 12, 2737, 26],
        backgroundColor: [
          "rgba(255, 99, 132, 0.2)",
          "rgba(54, 162, 235, 0.2)",
          "rgba(255, 206, 86, 0.2)",
          "rgba(75, 192, 192, 0.2)",
          "rgba(153, 102, 255, 0.2)",
          "rgba(255, 159, 64, 0.2)",
          "rgba(255, 206, 86, 0.2)",
        ],
        borderColor: [
          "rgba(255, 99, 132, 1)",
          "rgba(54, 162, 235, 1)",
          "rgba(255, 206, 86, 1)",
          "rgba(75, 192, 192, 1)",
          "rgba(153, 102, 255, 1)",
          "rgba(255, 159, 64, 1)",
          "rgba(255, 206, 86, 1)",
        ],
        borderWidth: 1,
      },
    ],
  },
  options: {
    responsive: true,
    scales: {
      y: {
        beginAtZero: true,
      },
    },
    plugins: {
      legend: {
        labels: {
          // Dynamically set label colors to match bar colors
          generateLabels: function(chart) {
            return chart.data.datasets[0].backgroundColor.map((color, index) => ({
              text: chart.data.labels[index],
              fillStyle: color,
              strokeStyle: color,
              lineWidth: 2,
            }));
          },
        },
      },
    },
  },
});

document.addEventListener("DOMContentLoaded", function() {
  // Ensure the canvas element is found
  const agamaCanvas = document.querySelector(".chart-agama").getContext("2d");
  const agamaChart = new Chart(agamaCanvas, {
      type: "bar",
      data: {
          labels: ["Islam", "Kristen", "Hindu", "Budha", "Konghucu", "Katholik", "Kepercayaan lainnya"],
          datasets: [{
              label: "Data Agama",
              data: [427129, 7428, 72, 248, 12, 2737, 26],
              backgroundColor: [
                  "rgba(255, 99, 132, 0.2)",
                  "rgba(54, 162, 235, 0.2)",
                  "rgba(255, 206, 86, 0.2)",
                  "rgba(75, 192, 192, 0.2)",
                  "rgba(153, 102, 255, 0.2)",
                  "rgba(255, 159, 64, 0.2)",
                  "rgba(255, 206, 86, 0.2)",
              ],
              borderColor: [
                  "rgba(255, 99, 132, 1)",
                  "rgba(54, 162, 235, 1)",
                  "rgba(255, 206, 86, 1)",
                  "rgba(75, 192, 192, 1)",
                  "rgba(153, 102, 255, 1)",
                  "rgba(255, 159, 64, 1)",
                  "rgba(255, 206, 86, 1)",
              ],
              borderWidth: 1,
          }]
      },
      options: {
          responsive: true,
          scales: {
              y: {
                  beginAtZero: true
              }
          }
      }
  });
});


// Grafik Data Pendidikan
const pendidikanCanvas = document.querySelector(".chart-pendidikan").getContext("2d");
const pendidikanChart = new Chart(pendidikanCanvas, {
  type: "line",
  data: {
    labels: [
      "BELUM SEKOLAH",
      "BELUM TAMAT SD SEDERAJAT",
      "TAMAT SD SEDERAJAT",
      "SLTP SEDERAJAT",
      "SLTA SEDERAJAT",
      "DIPLOMA I II",
      "AKADEMI DIPLOMA III SMUDA",
      "DIPLOMA IV STRATA I",
      "STRATA II",
      "STRATA III",
    ],
    datasets: [
      {
        label: "Pendidikan",
        data: [500065, 272922, 740980, 377409, 452624, 4439, 20074, 66174, 3044, 168],
        backgroundColor: [
          "rgba(54, 162, 235, 0.2)",
          "rgba(75, 192, 192, 0.2)",
          "rgba(255, 206, 86, 0.2)",
          "rgba(153, 102, 255, 0.2)",
          "rgba(255, 159, 64, 0.2)",
          "rgba(255, 99, 132, 0.2)",
          "rgba(54, 162, 235, 0.2)",
          "rgba(75, 192, 192, 0.2)",
          "rgba(255, 206, 86, 0.2)",
          "rgba(153, 102, 255, 0.2)",
        ],
        borderColor: [
          "rgba(54, 162, 235, 1)",
          "rgba(75, 192, 192, 1)",
          "rgba(255, 206, 86, 1)",
          "rgba(153, 102, 255, 1)",
          "rgba(255, 159, 64, 1)",
          "rgba(255, 99, 132, 1)",
          "rgba(54, 162, 235, 1)",
          "rgba(75, 192, 192, 1)",
          "rgba(255, 206, 86, 1)",
          "rgba(153, 102, 255, 1)",
        ],
        borderWidth: 1,
      },
    ],
  },
  options: {
    responsive: true,
    scales: {
      y: {
        beginAtZero: true,
      },
    },
  },
});


 // Grafik Golongan Darah (Pie Chart)
 const golonganDarahCtx = document.querySelector(".chart-golonganDarah").getContext("2d");
 new Chart(golonganDarahCtx, {
   type: "line",
   data: {
     labels: ["A", "A-", "A+", "B", "B-", "B+", "AB", "AB-", "AB+","O", "O-", "O+", "LAINNYA"],
     datasets: [
       {
         label: "Golongan Darah",
         data: [68578, 155, 5187, 80199, 144, 5814, 30920, 148, 1903, 117838, 1262, 6822, 2118929], // Data jumlah golongan darah
         backgroundColor: [
          "rgba(255, 99, 132, 0.8)", "rgba(54, 162, 235, 0.8)", "rgba(255, 206, 86, 0.8)",
          "rgba(75, 192, 192, 0.8)", "rgba(255, 159, 64, 0.8)", "rgba(99, 132, 255, 0.8)",
          "rgba(162, 235, 54, 0.8)", "rgba(206, 86, 255, 0.8)", "rgba(192, 75, 75, 0.8)",
          "rgba(102, 153, 102, 0.8)", "rgba(64, 255, 159, 0.8)", "rgba(132, 99, 255, 0.8)",
          "rgba(235, 64, 52, 0.8)"
           ],
         borderColor: [
          "rgba(255, 99, 132, 1)", "rgba(54, 162, 235, 1)", "rgba(255, 206, 86, 1)",
          "rgba(75, 192, 192, 1)", "rgba(255, 159, 64, 1)", "rgba(99, 132, 255, 1)",
          "rgba(162, 235, 54, 1)", "rgba(206, 86, 255, 1)", "rgba(192, 75, 75, 1)",
          "rgba(102, 153, 102, 1)", "rgba(64, 255, 159, 1)", "rgba(132, 99, 255, 1)",
          "rgba(235, 64, 52, 1)"
           ],
         borderWidth: 1,
       },
     ],
   },
   options: {
     responsive: true,
     plugins: {
       legend: {
         position: "top",
       },
       title: {
         display: true,
       },
     },
   },
 });

 // Grafik Data Disabilitas (Doughnut Chart)
 const disabilitasCtx = document.querySelector(".chart-disabilitas").getContext("2d");
 new Chart(disabilitasCtx, {
   type: "doughnut",
   data: {
     labels: ["Disabilitas Fisik","Fisik & Mental", "Tuna Netra", "Mental jiwa", "Tuna Rungu", "Lainnya"],
     datasets: [
       {
         label: "Disabilitas",
         data: [207, 124, 338, 993, 39, 142], // Data jumlah orang dengan jenis disabilitas
         backgroundColor: [
          "rgba(193, 39, 45, 1)", // Light Red
          "rgba(54, 162, 235, 0.8)", // Light Blue
          "rgba(255, 105, 180, 1)", // Light Yellow
          "rgba(255, 159, 64, 0.8)", // Gray (for Mental Jiwa)
          "rgba(153, 102, 255, 0.8)", // Light Purple
          "rgba(162, 235, 54, 0.8)"  
         ],
         borderColor: [
          "rgba(193, 39, 45, 1)", 
          "rgba(54, 162, 235, 1)", 
          "rgba(255, 105, 180, 1)", 
          "rgba(255, 159, 64, 0.8)", // Gray (for Mental Jiwa)
          "rgba(153, 102, 255, 1)", 
          "rgba(162, 235, 54, 0.8)"
         ],
         borderWidth: 1,
       },
     ],
   },
   options: {
     responsive: true,
     plugins: {
       legend: {
         position: "top",
       },
       title: {
         display: true,
       },
     },
   },
 });


  // Grafik Status Kawin (Bar Chart dengan animasi)
  const statusKawinCtx = document.querySelector(".chart-StatusKawin").getContext("2d");
  new Chart(statusKawinCtx, {
    type: "pie",
    data: {
      labels: ["Belum Kawin", "Kawin", "Cerai Hidup", "Cerai Mati"],
      datasets: [{
        label: "Status Kawin",
        data: [1063673, 1189245, 60848, 24470],
        backgroundColor: [
          "rgba(54, 162, 235, 0.8)",
          "rgba(255, 0, 0, 1)",
          "rgba(255, 105, 180, 1)",
          "rgba(0, 0, 0, 0.6)"  
        ],
        borderColor: [
          "rgba(54, 162, 235, 0.8)",
          "rgba(255, 0, 0, 1)",
          "rgba(255, 105, 180, 1)",
          "rgba(0, 0, 0, 0.6)"  
        ],
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
      animation: {
        duration: 2000, // Durasi animasi
        easing: 'easeInOutBounce', // Easing effect untuk animasi
      },
      plugins: {
        legend: {
          position: 'top',
        },
        title: {
          display: true,
        }
      }
    }
  });

  // Grafik Kepemilikan KK (Bar Chart dengan animasi equalizer)
  const kepemilikanKkCtx = document.querySelector(".chart-kepemilikanKk").getContext("2d");
  new Chart(kepemilikanKkCtx, {
    type: "bar",
    data: {
      labels: ["Punya KK", "Tidak Punya KK" , "KK"],
      datasets: [{
        label: "Kepemilikan KK",
        data: [820501, 572, 821073],
        backgroundColor: [
          "rgba(255, 159, 64, 0.6)",
          "rgba(75, 192, 192, 0.6)",
          "rgba(139, 69, 19, 0.6)"
        ],
        borderColor: [
          "rgba(255, 159, 64, 1)",
          "rgba(75, 192, 192, 1)",
          "rgba(139, 69, 19, 0.6)" //cklt//
        ],
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
      animation: {
        duration: 1500,
        easing: 'easeInOutElastic', // Efek animasi equalizer
        animateScale: true, // Animasi scale pada grafik
        animateRotate: true // Animasi rotasi pada grafik
      },
      plugins: {
        legend: {
          position: 'top',
        },
        title: {
          display: true,
        }
      }
    }
  });

  // Grafik Pekerjaan (Bar Chart dengan animasi equalizer)
const pekerjaanCtx = document.querySelector(".chart-pekerjaan").getContext("2d");
new Chart(pekerjaanCtx, {
  type: "line",
  data: {
    labels: ["BELUM/TIDAK BEKERJA L", "BELUM/TIDAK BEKERJA P", "LRT", "IRT", "PELAJAR/MAHASISWA L", "PELAJAR/MAHASISWA P", "PENSIUNAN L", "PENSIUNAN P", "PNS L", "PNS P", "TNI L", "TNI P", 
    "KEPOLISIAN-RI L", "KEPOLISIAN-RI P", "PERDAGANGAN L", "PERDAGANGAN P", "PETANI/PEKEBUN L", "PETANI/PEKEBUN P", "PETERNAK L", "PETERNAK P", "NELAYAN/PERIKANAN L", "NELAYAN/PERIKANAN P", 
    "INDUSTRI L", "INDUSTRI P", "KONSTRUKSI L", "KONSTRUKSI P", "TRANSPORTASI L", "TRANSPORTASI P", "KARYAWAN-SWASTA L", "KARYAWAN-SWASTA P", "KARYAWAN-BUMN L", "KARYAWAN-BUMN P", 
    "KARYAWAN-BUMD L", "KARYAWAN-BUMD P", "KARYAWAN-HONORER L", "KARYAWAN-HONORER P", "BURUH-HARIAN-LEPAS L", "BURUH-HARIAN-LEPAS P", "BURUH TANI/PERKEBUNAN L", "BURUH TANI/PERKEBUNAN P",
     "BURUH NELAYAN/PERIKANAN L", "BURUH NELAYAN/PERIKANAN P", "BURUH PETERNAKAN L", "BURUH PETERNAKAN P", "ART L", "ART P", "TUKANG CUKUR L", "TUKANG CUKUR P", "TUKANG LISTRIK L", "TUKANG LISTRIK P", 
     "TUKANG BATU L", "TUKANG BATU P", "TUKANG KAYU L", "TUKANG KAYU P", "TUKANG SOL L", "TUKANG SOL P", "TUKANG LAS L", "TUKANG LAS P", "TUKANG JAHIT L", "TUKANG JAHIT P", "TUKANG GIGI L", "TUKANG GIGI P", 
     "PENATA RIAS L", "PENATA RIAS P", "PENATA BUSANA L", "PENATA BUSANA P", "PENATA RAMBUT L", "PENATA RAMBUT P", "MEKANIK L", "MEKANIK P", "SENIMAN L", "SENIMAN P", "TABIB L", "TABIB P", "PARAJI L", "PARAJI P",
      "PERANCANG BUSANA L", "PERANCANG BUSANA P", "PENTERJEMAH L", "PENTERJEMAH P", "IMAM MASJID L", "IMAM MASJID P", "PENDETA L", "PENDETA P", "PASTOR L", "PASTOR P",
      "WARTAWAN L", "WARTAWAN P", "USTADZ L", "USTADZ P", "JURU MASAK L", "JURU MASAK P", "PROMOTOR ACARA L", "PROMOTOR ACARA P", "ANGGOTA DPR RI L", "ANGGOTA DPR RI P", "ANGGOTA DPD RI L", "ANGGOTA DPD RI P", "ANGGOTA BPK L", "ANGGOTA BPK P", "PRESIDEN L", "PRESIDEN P", "WAKIL PRESIDEN L", "WAKIL PRESIDEN P", "ANGGOTA MAHKAMAH KONSTITUSI L", "ANGGOTA MAHKAMAH KONSTITUSI P", "ANGGOTA KABINET KEMENTRIAN L", "ANGGOTA KABINET KEMENTRIAN P", "DUTA BESAR L", "DUTA BESAR P", "GUBERNUR L", "GUBERNUR P", "WAKIL GUBERNUR L", "WAKIL GUBERNUR P", "BUPATI L", "BUPATI P", "WAKIL BUPATI L", "WAKIL BUPATI P", "WALIKOTA L", "WALIKOTA P", "WAKIL WALIKOTA L", "WAKIL WALIKOTA P", "DPRD PROP.L", "DPRD PROP.P", "DPRD KAB/KOTA L", "DPRD KAB/KOTA P", "DOSEN L", "DOSEN P", "GURU L", "GURU P", "PILOT L", "PILOT P", "PENGACARA L", "PENGACARA P", "NOTARIS L", "NOTARIS P", "ARSITEK L", "ARSITEK P", "AKUNTAN L", "AKUNTAN P", "KONSULTAN L", "KONSULTAN P", "DOKTER L", "DOKTER P", "BIDAN L", "BIDAN P", "PERAWAT L", "PERAWAT P", "APOTEKER L", "APOTEKER P", "PSIKIATER/PSIKOLOG L", "PSIKIATER/PSIKOLOG P", "PENYIAR TELEVISI L", "PENYIAR TELEVISI P", "PENYIAR RADIO L", "PENYIAR RADIO P", "PELAUT L", "PELAUT P", "PENELITI L", "PENELITI P", "SOPIR L", "SOPIR P", "PIALANG L", "PIALANG P", "PARANORMAL L", "PARANORMAL P", "PEDAGANG L", "PEDAGANG P", "PERANGKAT DESA L", "PERANGKAT DESA P", "KEPALA DESA L", "KEPALA DESA P", "BIARAWAN/BIARAWATI L", "BIARAWAN/BIARAWATI P", "WIRASWASTA L", "WIRASWASTA P", "LEMB.TINGGI LAINNYA L", "LEMB.TINGGI LAINNYA P", "ARTIS L", "ARTIS P", "ATLIT L", "ATLIT P", "CHEFF L", "CHEFF P", "MANAJER L", "MANAJER P", "TATA USAHA L", "TATA USAHA P", "OPERATOR L", "OPERATOR P", "PENGRAJIN L", "PENGRAJIN P", "TEKNISI L", "TEKNISI P", "ASISTEN AHLI L", "ASISTEN AHLI P", "LAINNYA L", "LAINNYA P"],
    datasets: [{
      label: "Jumlah Orang",
      data: [307107, 264077, 50, 619739, 216734, 194268, 5589, 2067, 9883, 8160, 2336, 17, 2173, 104, 15796, 3301, 28318, 5602, 109, 7, 12588, 25, 157, 33, 197, 0, 371, 4, 104762, 30591, 2149, 500, 405, 155, 3475, 3742, 160049, 13244, 32750, 5835, 2915, 10, 40, 2, 3, 256, 38, 0, 17, 0, 803, 1, 2008, 2, 5, 1, 157, 0, 285, 142, 2, 0, 12, 32, 1, 3, 12, 11,
        384, 0, 156, 30, 8, 0, 1, 12, 0, 1, 1, 0, 16, 0, 19, 0, 0, 0, 75, 0, 184, 14, 3, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 0, 20, 6, 389, 246, 4148, 7368, 1, 0, 69, 5, 10, 16, 18, 1, 0, 1, 32, 6, 253, 371, 0, 1317, 452, 1182, 38, 109, 0, 4, 0, 0, 7, 1, 314, 1, 10, 6, 6890, 0, 4, 1, 12, 2, 44922, 15468,
         1616, 211, 231, 24, 0, 0, 264700, 23226, 31, 15, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 3, 5 
      ],
      backgroundColor: [
        "rgba(54, 162, 235, 0.6)",
        "rgba(255, 206, 86, 0.6)",
        "rgba(75, 192, 192, 0.6)",
        "rgba(153, 102, 255, 0.6)",
        "rgba(255, 159, 64, 0.6)",
        "rgba(255, 99, 132, 0.6)",
        "rgba(139, 69, 19, 0.6)"
      ],
      borderColor: [
        "rgba(54, 162, 235, 1)",
        "rgba(255, 206, 86, 1)",
        "rgba(75, 192, 192, 1)",
        "rgba(153, 102, 255, 1)",
        "rgba(255, 159, 64, 1)",
        "rgba(255, 99, 132, 1)",
        "rgba(139, 69, 19, 1)"
      ],
      borderWidth: 1
    }]
  },
  options: {
    responsive: true,
    animation: {
      duration: 1500,
      easing: 'easeInOutElastic',
      animateScale: true,
      animateRotate: true
    },
    plugins: {
      legend: {
        position: 'top',
      },
      title: {
        display: true,
      }
    }
  }
});

//Grafik Data Disabilitas (Doughnut Chart)
 const umurCtx = document.querySelector(".chart-umur").getContext("2d");
 new Chart(umurCtx, {
   type: "bar",
   data: {
     labels: ["0 TAHUN (LK)", "0 TAHUN (PR)", "1 TAHUN (LK)", "1 TAHUN (PR)", "2 TAHUN (LK)", "2 TAHUN (PR)", 
     "3 TAHUN (LK)", "3 TAHUN (PR)", "4 TAHUN (LK)", "4 TAHUN (PR)", "5 TAHUN (LK)", "5 TAHUN (PR)", "6 TAHUN (LK)", 
     "6 TAHUN (PR)", "7 TAHUN (LK)", "7 TAHUN (PR)", "8 TAHUN (LK)", "8 TAHUN (PR)", "9 TAHUN (LK)", "9 TAHUN (PR)",
     "10 TAHUN (LK)", "10 TAHUN (PR)", "11 TAHUN (LK)", "11 TAHUN (PR)", "12 TAHUN (LK)", "12 TAHUN (PR)", "13 TAHUN (LK)",
      "13 TAHUN (PR)", "14 TAHUN (LK)", "14 TAHUN (PR)", "15 TAHUN (LK)", "15 TAHUN (PR)", "16 TAHUN (LK)", "16 TAHUN (PR)",
      "17 TAHUN (LK)", "17 TAHUN (PR)", "18 TAHUN (LK)", "18 TAHUN (PR)", "19 TAHUN (LK)", "19 TAHUN (PR)", "20 TAHUN (LK)", 
      "20 TAHUN (PR)", "21 TAHUN (LK)", "21 TAHUN (PR)", "22 TAHUN (LK)", "22 TAHUN (PR)", "23 TAHUN (LK)", "23 TAHUN (PR)", 
      "24 TAHUN (LK)", "24 TAHUN (PR)", "25 TAHUN (LK)", "25 TAHUN (PR)", "26 TAHUN (LK)", "26 TAHUN (PR)", "27 TAHUN (LK)",
       "27 TAHUN (PR)", "28 TAHUN (LK)", "28 TAHUN (PR)", "29 TAHUN (LK)", "29 TAHUN (PR)", "30 TAHUN (LK)", "30 TAHUN (PR)", 
       "31 TAHUN (LK)", "31 TAHUN (PR)", "32 TAHUN (LK)", "32 TAHUN (PR)", "33 TAHUN (LK)", "33 TAHUN (PR)", "34 TAHUN (LK)",
        "34 TAHUN (PR)", "35 TAHUN (LK)", "35 TAHUN (PR)", "36 TAHUN (LK)", "36 TAHUN (PR)", "37 TAHUN (LK)", "37 TAHUN (PR)", 
        "38 TAHUN (LK)", "38 TAHUN (PR)", "39 TAHUN (LK)", "39 TAHUN (PR)", "40 TAHUN (LK)", "40 TAHUN (PR)", "41 TAHUN (LK)", 
        "41 TAHUN (PR)", "42 TAHUN (LK)", "42 TAHUN (PR)", "43 TAHUN (LK)", "43 TAHUN (PR)", "44 TAHUN (LK)", "44 TAHUN (PR)",
         "45 TAHUN (LK)", "45 TAHUN (PR)", "46 TAHUN (LK)", "46 TAHUN (PR)", "47 TAHUN (LK)", "47 TAHUN (PR)", "48 TAHUN (LK)",
          "48 TAHUN (PR)", "49 TAHUN (LK)", "49 TAHUN (PR)", "50 TAHUN (LK)", "50 TAHUN (PR)", "51 TAHUN (LK)", "51 TAHUN (PR)",
           "52 TAHUN (LK)", "52 TAHUN (PR)", "53 TAHUN (LK)", "53 TAHUN (PR)", "54 TAHUN (LK)", "54 TAHUN (PR)", "55 TAHUN (LK)", 
      "55 TAHUN (PR)", "56 TAHUN (LK)", "56 TAHUN (PR)", "57 TAHUN (LK)", "57 TAHUN (PR)", "58 TAHUN (LK)", "58 TAHUN (PR)",
      "59 TAHUN (LK)", "59 TAHUN (PR)", "60 TAHUN (LK)", "60 TAHUN (PR)", "61 TAHUN (LK)", "61 TAHUN (PR)", "62 TAHUN (LK)", "62 TAHUN (PR)",
       "63 TAHUN (LK)", "63 TAHUN (PR)", "64 TAHUN (LK)", "64 TAHUN (PR)", "65 TAHUN (LK)", "65 TAHUN (PR)", "66 TAHUN (LK)", "66 TAHUN (PR)", "67 TAHUN (LK)", "67 TAHUN (PR)", "68 TAHUN (LK)", "68 TAHUN (PR)", "69 TAHUN (LK)", "69 TAHUN (PR)", 
       "70 TAHUN (LK)", "70 TAHUN (PR)", "71 TAHUN (LK)", "71 TAHUN (PR)", "72 TAHUN (LK)", "72 TAHUN (PR)", "73 TAHUN (LK)", "73 TAHUN (PR)", "74 TAHUN (LK)", "74 TAHUN (PR)", "75 TAHUN (LK)", "75 TAHUN (PR)", "76 TAHUN (LK)", "76 TAHUN (PR)", 
       "77 TAHUN (LK)", "77 TAHUN (PR)", "78 TAHUN (LK)", "78 TAHUN (PR)", "79 TAHUN (LK)", "79 TAHUN (PR)", "80 TAHUN (LK)", "80 TAHUN (PR)", "81 TAHUN (LK)", "81 TAHUN (PR)", "82 TAHUN (LK)", "82 TAHUN (PR)", "83 TAHUN (LK)", "83 TAHUN (PR)", 
       "84 TAHUN (LK)", "84 TAHUN (PR)", "85 TAHUN (LK)", "85 TAHUN (PR)", "86 TAHUN (LK)", "86 TAHUN (PR)", "87 TAHUN (LK)", "87 TAHUN (PR)", "88 TAHUN (LK)", "88 TAHUN (PR)", "89 TAHUN (LK)", "89 TAHUN (PR)", "90 TAHUN (LK)", "90 TAHUN (PR)", 
       "91 TAHUN (LK)", "91 TAHUN (PR)", "92 TAHUN (LK)", "92 TAHUN (PR)", "93 TAHUN (LK)", "93 TAHUN (PR)", "94 TAHUN (LK)", "94 TAHUN (PR)", "95 TAHUN (LK)", "95 TAHUN (PR)", "96 TAHUN (LK)", "96 TAHUN (PR)", "97 TAHUN (LK)", "97 TAHUN (PR)", 
       "98 TAHUN (LK)", "98 TAHUN (PR)", "99 TAHUN (LK)", "99 TAHUN (PR)", "100 TAHUN (LK)", "100 TAHUN (PR)", "101 TAHUN (LK)", "101 TAHUN (PR)", "102 TAHUN (LK)", "102 TAHUN (PR)", "103 TAHUN (LK)", "103 TAHUN (PR)", "104 TAHUN (LK)", "104 TAHUN (PR)", "105 TAHUN (LK)", "105 TAHUN (PR)", "106 TAHUN (LK)", "106 TAHUN (PR)", "107 TAHUN (LK)", "107 TAHUN (PR)", "108 TAHUN (LK)", "108 TAHUN (PR)", "109 TAHUN (LK)", "109 TAHUN (PR)", "110 TAHUN (LK)", "110 TAHUN (PR)", "111 TAHUN (LK)", "111 TAHUN (PR)", "112 TAHUN (LK)", "112 TAHUN (PR)", "113 TAHUN (LK)", "113 TAHUN (PR)", "114 TAHUN (LK)", "114 TAHUN (PR)", "115 TAHUN (LK)", "115 TAHUN (PR)", "116 TAHUN (LK)", "116 TAHUN (PR)", "117 TAHUN (LK)", "117 TAHUN (PR)", "118 TAHUN (LK)", "118 TAHUN (PR)", "119 TAHUN (LK)", "119 TAHUN (PR)", "120 TAHUN (LK)", "120 TAHUN (PR)", "121 TAHUN (LK)", "121 TAHUN (PR)"],
     datasets: [
       {
         label: "umur",
         data: [14224, 13241, 18460, 17185, 20818, 19680, 21666, 20358, 22382, 20975, 22321, 20614, 21850, 20391, 21957, 20197, 22082, 20819, 22152, 20440, 21475, 19781, 21939, 20201, 20920, 19648, 20305, 18724, 19526, 18487, 19536, 18482, 11161, 10729, 9492, 10098, 15905, 16044, 18716, 18206, 19424, 18682, 19977, 19125, 19991, 19343, 22387, 21317, 21984, 20647, 20468, 19195, 21143, 19805, 21660, 20044, 21796, 20023, 20921, 19243, 20747, 19158, 20964, 19375, 20161, 18508, 21713, 19356, 20699, 19328, 18853, 17347, 19060, 18040, 19347, 18907, 21566, 20774, 20542, 20175, 20482, 20721, 22888, 23280, 18703, 18564, 21070, 21307, 19058, 18959, 18219, 18406, 18173, 17862, 17725, 17877, 18683, 19437, 15341, 15775, 16238, 16406, 16944, 16363, 12701, 12452, 16167, 15932, 13501, 12861, 13220, 13436, 11345, 11911, 9894, 10136, 12668, 13610, 8958, 9005, 9591, 10050, 9325,
        9773, 6598, 6669, 10895, 11872, 6751, 6781, 7651, 8031, 6781, 7007, 5397, 5840, 6541, 7486, 4904, 4645, 5062, 5185, 5232, 4676, 3239, 3154, 5027, 5929, 2293, 2491, 2719, 3374, 2051, 2574, 1549, 2069, 2440, 3434, 1168, 1277, 1511, 2071, 1669, 1806, 825, 976, 1359, 2198, 523, 688, 641, 961, 445, 621, 280, 444, 389, 738, 182, 265, 259, 391, 184, 237, 106, 146, 200, 372, 53, 50, 68, 88, 31, 48, 25, 31, 30, 45, 11, 17, 11, 31, 13, 9, 3, 8, 11, 21, 1, 3, 1, 5, 0, 1, 0, 0, 1, 0, 1, 0, 0, 2, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0], 
         backgroundColor: [
          "rgba(255, 99, 132, 0.6)", "rgba(54, 162, 235, 0.6)", "rgba(255, 206, 86, 0.6)",
          "rgba(75, 192, 192, 0.6)", "rgba(153, 102, 255, 0.6)", "rgba(255, 159, 64, 0.6)"
        
         ],
         borderColor: [
          "rgba(255, 99, 132, 1)", "rgba(54, 162, 235, 1)", "rgba(255, 206, 86, 1)",
          "rgba(75, 192, 192, 1)", "rgba(153, 102, 255, 1)", "rgba(255, 159, 64, 1)"
        
         ],
         borderWidth: 1,
       },
     ],
   },
   options: {
     responsive: true,
     plugins: {
       legend: {
         position: "top",
       },
       title: {
         display: true,
       },
     },
   },
 });





  $(document).ready(function () {
    $(".data-table").each(function (_, table) {
      $(table).DataTable();
    });
  });
  
