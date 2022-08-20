<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Siswa</title>

    <!-- Custom fonts for this template-->
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/public/css/style.css" rel="stylesheet">

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
              <li class="breadcrumb-item active" aria-current="page">Siswa</li>
              <li class="breadcrumb-item"><a href="/laporan/stats.php">Laporan</a></li>
            </ol>
        </nav>

        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-lg-12">

            <!-- export to excel -->
            <a href='export.php' class='btn btn-success btn-sm btn-icon-split'>
                <span class="icon text-white-50">
                    <i class='fas fa-print'></i>
                </span>
                <span class="text">Export</span>
            </a>

                <div class="bg-gradient-light card o-hidden border-0 shadow-lg my-3 bg-light">
                    <div class="card-body p-0">

                        <!-- Nested Row within Card Body -->
                        <div class="row justify-content-center">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Siswa Terdaftar</h1>
                                    </div>

                                    <div class="table-responsive">
                
                                        <!-- dynamic table content -->
                                        <?php

                                        $server="localhost";
                                        $user="rka";
                                        $pass="rinokapi";
                                        $db="dts_db";

                                        $conn=mysqli_connect($server, $user, $pass, $db);

                                        $sql="select * from dts_siswa";

                                        $result=mysqli_query($conn, $sql);

                                        if(mysqli_num_rows($result) > 0) {
                                          echo '
                                          <table class="table table-borderless">
                                                <tr>
                                                    <th>Nama Lengkap</th>
                                                    <th>Alias</th>
                                                    <th>Jenis Kelamin</th>
                                                    <th>Hobi</th>
                                                    <th>Asal</th>
                                                    <th class="text-center">Action</th>
                                                </tr>
                                            <tbody>';

                                          while($row=mysqli_fetch_assoc($result)){

                                            echo "
                                            <tr>
                                                <td>".$row["nama"]."</td>
                                                <td>".$row["alias"]."</td>
                                                <td>".$row["jk"]."</td>
                                                <td>".$row["hobi"]."</td>
                                                <td>".$row["asal"]."</td>
                                                <td class='text-center'>

                                                    <!-- send variable using get -->
                                                    <a href='edit.php?edit=$row[nama]&&alias=$row[alias]&&jk=$row[jk]&&hobi=$row[hobi]&&asal=$row[asal]' class='btn-circle btn btn-warning btn-sm'>
                                                        <i class='icon text-white-50 fas fa-pen'></i>
                                                    </a>
                                                    <a href='card.php?edit=$row[nama]' class='btn-circle btn btn-info btn-sm'>
                                                        <i class='fas fa-eye icon text-white-50'></i>
                                                    </a>
                                                    <a href='$_SERVER[PHP_SELF]?del=$row[nama]' class='btn-circle btn btn-danger btn-sm' onclick=alert('Dihapus')>
                                                        <i class='fas fa-trash icon text-white-50'></i>
                                                    </a>
                                                </td>
                                            </tr>";

                                        }
                                            echo "</tbody>";
                                            echo "</table>";
                                        } else {
                                          echo "No Data";
                                        }

                                        mysqli_close($conn);

                                        ?>

                                        <!-- send $del variable -->
                                        <?php

                                        $server="localhost";
                                        $user="rka";
                                        $pass="rinokapi";
                                        $db="dts_db";

                                        $del=$_GET['del'];

                                        $conn=mysqli_connect($server, $user, $pass, $db);
                                        $sql="delete from dts_siswa where nama='$del'";

                                        mysqli_query($conn, $sql);

                                        mysqli_close($conn);

                                        if(isset($del)) {

                                        echo "<script type='text/javascript'> document.location = '/data/student.php'; </script>";
                                        }

                                        ?>

                                    </div>
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

</body>

</html>
