<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta id="" name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta id="" name="description" content="">
    <meta id="" name="author" content="">

    <title>Card</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/public/css/style.css" rel="stylesheet">

</head>

<body class="bg-gradient-light">

    <!-- get $name variable -->
    <?php

    $server="localhost";
    $user="rka";
    $pass="rinokapi";
    $db="dts_db";

    $edit=$_GET['edit'];

    $conn=mysqli_connect($server, $user, $pass, $db);
    $sql="select nama from dts_siswa where nama='$edit'";

    $result=mysqli_query($conn, $sql);
    $nama=mysqli_fetch_assoc($result);
    $nam=$nama['nama'];

    mysqli_close($conn);

    ?>

    <!-- begin container -->
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
              <li class="breadcrumb-item active" aria-current="page">Card</li>
            </ol>
        </nav>  

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-lg-4">

                <div class="bg-gradient-secondary card o-hidden border-4 border-danger shadow-lg my-5 bg-light">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row justify-content-center">
                            <div class="col-lg">
                                <div class="p-0">
                                    <div class="text-center">
                                        <h4 class="h4 text-gray-200 my-4">Kartu Siswa</h4>
                                        <h6 class="h6 text-gray-200 mb-1"><?php echo $nam; ?></h6>
                                    </div>
                                   <div class="row justify-content-center">

                                    <div class="col-lg-8">

                                        <!-- kartu siswa -->
                                        <div class="bg-gradient-light card o-hidden border-0 shadow-lg my-3 mb-5 bg-light">
                                            <div class="card-body p-0">
                                                <!-- Nested Row within Card Body -->
                                                <div class="row justify-content-center">
                                                    <div class="p-0">
                                                        <img src="/public/img/home.jpg" style="width: 345px; height: 250px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end kartu siswa -->
                                    </div>
                                </div>
                                <h5 class="h5 text-gray-200 mb-5 text-center">Siswa</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card -->
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
