<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta id="" name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta id="" name="description" content="">
    <meta id="" name="author" content="">

    <title>Daftar</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/public/css/style.css" rel="stylesheet">

    <!-- ext lib: jquery -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>

    <script type="text/javascript">
    // toast on doc ready
    $(document).ready(function() {
        $(".toast").toast('show');
    });
    </script>

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
        <ol class="breadcrumb my-6" style="background-color: transparent;">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Daftar</li>
        </ol>
      </nav>

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-lg-5">

                <div class="bg-gradient-light card o-hidden border-0 shadow-lg my-2 bg-light">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row justify-content-center">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Daftar Siswa Baru</h1>
                                    </div>

                                    <!-- regis form -->
                                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="was-validated">
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                              <input placeholder="Nama Lengkap" type="text" class="form-control is-invalid" id="nama" name="nama" required>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                              <input placeholder="Alias" type="text" class="form-control is-invalid" id="alias" name="alias" required>
                                            </div>
                                          </div>
                                      <div class="custom-control custom-checkbox mb-3">
                                        <h6>Hobi</h6>
                                        <div>
                                            <input type="checkbox" class="custom-control-input" id="hobi" name="hobi" value="Musik">
                                            <label class="custom-control-label" for="hobi">Musik</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" class="custom-control-input" id="hobi2" name="hobi" value="Olahraga">
                                            <label class="custom-control-label" for="hobi2">Olahraga</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" class="custom-control-input" id="hobi3" name="hobi" value="Menari">
                                            <label class="custom-control-label" for="hobi3">Menari</label>
                                        </div>
                                      </div>
                                      <div class="custom-control custom-radio">
                                        <h6>Jenis Kelamin</h6>
                                        <input type="radio" class="custom-control-input" id="jk" name="jenisk" required value="Pria">
                                        <label class="custom-control-label" for="jk">Pria</label>
                                      </div>
                                      <div class="custom-control custom-radio mb-3">
                                        <input type="radio" class="custom-control-input" name="jenisk" id="jk2" required value="Wanita">
                                        <label class="custom-control-label" for="jk2">Wanita</label>
                                      </div>

                                      <div class="mb-5">
                                        <h6 class="custom-control">Asal</h6>
                                        <select class="custom-select" required id="asal" name="asal">
                                          <option value="">Pilih...</option>
                                          <option value="Kupang">Kupang</option>
                                          <option value="Banyuwangi">Banyuwangi</option>
                                          <option value="Sumba">Sumba</option>
                                        </select>
                                      </div>
                                        <button type="submit" class="text-center btn btn-info btn-block" onclick="alert('Berhasil Input')">Submit</button>
                                    </form>

                                    <!-- handle self req -->
                                    <?php

                                    $server="localhost";
                                    $user="rka";
                                    $pass="rinokapi";
                                    $db="dts_db";

                                    $conn=mysqli_connect($server, $user, $pass, $db);

                                    if($_SERVER["REQUEST_METHOD"]=="POST") {

                                        $nama=$_REQUEST['nama'];
                                        $alias=$_REQUEST['alias'];
                                        $jk=$_REQUEST['jenisk'];
                                        $hobi=$_REQUEST['hobi'];
                                        $asal=$_REQUEST['asal'];

                                        $sql="insert into dts_siswa values(NULL, '$nama', '$alias', '$jk', '$hobi', '$asal')";

                                        mysqli_query($conn, $sql);
                                    }

                                    mysqli_close($conn);

                                    if(isset($nama)) {
                                        echo "<script type='text/javascript'> document.location = '/'; </script>";
                                    }

                                    ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- toast -->
            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-autohide="true" style="position: absolute; bottom: 0; right: 0; margin-right: 20px; margin-bottom: 20px;" data-delay="10000">
              <div class="toast-header" style="">
                <i class='icon fas fa-info' style="padding-right: 10px;"></i>
                <strong class="mr-auto">Info</strong>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="toast-body">
                
                <!-- dynamic toast body -->
                <?php

                $server="localhost";
                $user="rka";
                $pass="rinokapi";
                $db="dts_db";

                $conn=mysqli_connect($server, $user, $pass, $db);

                $sql="select alias, asal from dts_siswa order by id desc limit 1";

                $result=mysqli_query($conn, $sql);

                $row=mysqli_fetch_assoc($result);

                echo $row['alias']. ' dari ' .$row['asal']. ' baru saja mendaftar';

                mysqli_close($conn);

                ?>

              </div>
            </div>
        </div>

        

    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
