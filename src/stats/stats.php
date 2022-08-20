<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Laporan</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/public/css/style.css" rel="stylesheet">

    <script src="/vendor/chart.js/Chart.js"></script>

</head>

<body class="bg-gradient-light">

    <!-- begin content -->
    <div class="container">

        <!-- navbar -->
      <nav class="navbar navbar-expand navbar-light sticky-top bg-light">
        <div class="container-sm">
          <a class="navbar-brand" href="/">
            <img src="/public/img/logo.png" alt="logo-lspdigital" height="60" width="60" />
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="/"
                  >Home <span class="sr-only">(current)</span></a
                >
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="/register/register.php">Daftar</a>
              </li>
              <li class="nav-item active">
                <a
                  class="nav-link"
                  href="/data/student.php"
                  >Data</a
                >
              </li>
              <li class="nav-item active">
                <a
                  class="nav-link"
                  href="/laporan/stats.php"
                  >Laporan</a
                >
              </li>
              <li class="nav-item dropdown active">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  Contact
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a target="_blank" class="dropdown-item" href="https://www.facebook.com/lsptd/">Facebook</a>
                  <a target="_blank" class="dropdown-item" href="https://www.instagram.com/lsp.td/">Instagram</a>
                  <a target="_blank" class="dropdown-item" href="https://www.youtube.com/channel/UCzzAznco5deIbDVZS4acb9w">Youtube</a>
                </div>
              </li>
            </ul>
            <nav class="nav justify-content-end my-3">
                <a class="nav-link active" href="/logout/logout.php
            ">Logout</a>
            </nav>
          </div>
        </div>
      </nav>
      <!-- /nav -->

      <nav aria-label="breadcrumb">
        <ol class="breadcrumb my-3" style="background-color: transparent;">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item"><a href="/data/student.php">Siswa</a></li>
          <li class="breadcrumb-item active" aria-current="page">Laporan</li>
        </ol>
      </nav>  

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-lg-12">

                <!-- card -->
                <div class="bg-gradient-light card o-hidden border-0 shadow-lg my-3 bg-light">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row justify-content-center">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Laporan Hobi Siswa</h1>
                                    </div>

                                    <!-- Area Chart -->
                                    <div class="chart-area">
                                        <canvas id="myAreaChart"></canvas>
                                    </div>

                                    <!-- define each variable data -->
                                    <?php

                                    $server="localhost";
                                    $user="rka";
                                    $pass="rinokapi";
                                    $db="dts_db";

                                    $conn=mysqli_connect($server, $user, $pass, $db);

                                    $sql="select * from dts_siswa where hobi='Musik'";
                                    $sql2="select * from dts_siswa where hobi='Olahraga'";
                                    $sql3="select * from dts_siswa where hobi='Menari'";

                                    $result=mysqli_query($conn, $sql);
                                    $result2=mysqli_query($conn, $sql2);
                                    $result3=mysqli_query($conn, $sql3);

                                    $musik=mysqli_num_rows($result);
                                    $olahraga=mysqli_num_rows($result2);
                                    $menari=mysqli_num_rows($result3);

                                    mysqli_close($conn);

                                    ?>

                                    <!-- chart with javascript -->
                                    <script type="text/javascript">
                                        // Set new default font family and font color to mimic Bootstrap's default styling
                                        Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
                                        Chart.defaults.global.defaultFontColor = '#858796';

                                        function number_format(number, decimals, dec_point, thousands_sep) {
                                      // *     example: number_format(1234.56, 2, ',', ' ');
                                      // *     return: '1 234,56'
                                      number = (number + '').replace(',', '').replace(' ', '');
                                      var n = !isFinite(+number) ? 0 : +number,
                                        prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
                                        sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
                                        dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
                                        s = '',
                                        toFixedFix = function(n, prec) {
                                          var k = Math.pow(10, prec);
                                          return '' + Math.round(n * k) / k;
                                        };
                                      // Fix for IE parseFloat(0.55).toFixed(0) = 0;
                                      s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
                                      if (s[0].length > 3) {
                                        s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
                                      }
                                      if ((s[1] || '').length < prec) {
                                        s[1] = s[1] || '';
                                        s[1] += new Array(prec - s[1].length + 1).join('0');
                                      }
                                      return s.join(dec);
                                    }

                                    // Area Chart Example
                                    var ctx = document.getElementById("myAreaChart");
                                    var myLineChart = new Chart(ctx, {
                                      type: 'line',
                                      data: {
                                        labels: ["Musik", "Olahraga", "Menari"],
                                        datasets: [{
                                          label: "Jumlah",
                                          lineTension: 0.3,
                                          backgroundColor: "rgba(78, 115, 223, 0.09)",
                                          borderColor: "rgba(78, 115, 223, 1)",
                                          pointRadius: 3,
                                          pointBackgroundColor: "rgba(78, 115, 223, 1)",
                                          pointBorderColor: "rgba(78, 115, 223, 1)",
                                          pointHoverRadius: 3,
                                          pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
                                          pointHoverBorderColor: "rgba(78, 115, 223, 1)",
                                          pointHitRadius: 10,
                                          pointBorderWidth: 2,
                                          data: [<?php echo $musik.', '.$olahraga.', '.$menari ?>],
                                        }],
                                      },
                                      options: {
                                        maintainAspectRatio: false,
                                        layout: {
                                          padding: {
                                            left: 10,
                                            right: 25,
                                            top: 25,
                                            bottom: 0
                                          }
                                        },
                                        scales: {
                                          xAxes: [{
                                            time: {
                                              unit: 'date'
                                            },
                                            gridLines: {
                                              display: false,
                                              drawBorder: false
                                            },
                                            ticks: {
                                              maxTicksLimit: 7
                                            }
                                          }],
                                          yAxes: [{
                                            ticks: {
                                              maxTicksLimit: 5,
                                              padding: 10,
                                              // Include a dollar sign in the ticks
                                              callback: function(value, index, values) {
                                                return number_format(value);
                                              }
                                            },
                                            gridLines: {
                                              color: "rgb(234, 236, 250)",
                                              zeroLineColor: "rgb(234, 236, 244)",
                                              drawBorder: false,
                                              borderDash: [2],
                                              zeroLineBorderDash: [2]
                                            }
                                          }],
                                        },
                                        legend: {
                                          display: false
                                        },
                                        tooltips: {
                                          backgroundColor: "rgb(255,255,255)",
                                          bodyFontColor: "#858796",
                                          titleMarginBottom: 10,
                                          titleFontColor: '#6e707e',
                                          titleFontSize: 14,
                                          borderColor: '#dddfeb',
                                          borderWidth: 1,
                                          xPadding: 15,
                                          yPadding: 15,
                                          displayColors: false,
                                          intersect: false,
                                          mode: 'index',
                                          caretPadding: 10,
                                          callbacks: {
                                            label: function(tooltipItem, chart) {
                                              var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                                              return datasetLabel + ': ' + number_format(tooltipItem.yLabel);
                                            }
                                          }
                                        }
                                      }
                                    });

                                    </script> <!-- end chart -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end card -->
            </div>
        </div>
    </div> <!-- end container -->

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Page level plugins -->
    

    <!-- Page level custom scripts -->
    <!-- <script src="chart.js"></script>
 -->
</body>

</html>