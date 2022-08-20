<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta id="" name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta id="" name="description" content="">
    <meta id="" name="author" content="">

    <title>Edit</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
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
              <li class="breadcrumb-item"><a href="/data/student.php">Siswa</a></li>
              <li class="breadcrumb-item active" aria-current="page">Edit</li>
            </ol>
        </nav>          

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-lg-5">

                <div class="bg-gradient-light card o-hidden border-0 shadow-lg my-3 bg-light">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row justify-content-center">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Edit data</h1>
                                    </div>

                                    <!-- handle self req -->
                                    <?php

                                    $server="localhost";
                                    $user="rka";
                                    $pass="rinokapi";
                                    $db="dts_db";

                                    $edit=$_GET['edit'];
                                    $alias=$_GET['alias'];
                                    $jenisk=$_GET['jk'];
                                    $hobi=$_GET['hobi'];
                                    $asal=$_GET['asal'];

                                    $conn=mysqli_connect($server, $user, $pass, $db);

                                        $nama=$_REQUEST['nama'];
                                        $alias=$_REQUEST['alias'];
                                        $jk=$_REQUEST['jenisk'];
                                        $hobi=$_REQUEST['hobi'];
                                        $asal=$_REQUEST['asal'];

                                        if($nama!=$edit) {
                                            $sql="update dts_siswa set nama='$nama', alias='$alias', jk='$jk', hobi='$hobi', asal='$asal' where nama='$edit'";
                                            mysqli_query($conn, $sql);
                                        }

                                        if(isset($nama)) {
                                            echo "<script type='text/javascript'> document.location = '/data/student.php'; </script>";
                                        }

                                    mysqli_close($conn);

                                    ?>

                                    <!-- form edit -->
                                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="was-validated">
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                              <input placeholder="Nama Lengkap" type="text" class="form-control is-invalid" id="nama" name="nama" required <?php echo "value=".$edit; ?> >
                                            </div>
                                            <div class="col-md-6 mb-3">
                                              <input placeholder="Alias" type="text" class="form-control is-invalid" id="alias" name="alias" required <?php echo "value=".$alias; ?> >
                                            </div>
                                          </div>
                                      <div class="custom-control custom-checkbox mb-3">
                                        <h6>Hobi</h6>
                                        <div>
                                            <input type="checkbox" class="custom-control-input" id="hobi" name="hobi" value="Musik" <?php if($hobi=='Musik'){echo 'checked';} ?> >
                                            <label class="custom-control-label" for="hobi">Musik</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" class="custom-control-input" id="hobi2" name="hobi" value="Olahraga" <?php if($hobi=='Olahraga'){echo 'checked';} ?> >
                                            <label class="custom-control-label" for="hobi2">Olahraga</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" class="custom-control-input" id="hobi3" name="hobi" value="Menari" <?php if($hobi=='Menari'){echo 'checked';} ?> >
                                            <label class="custom-control-label" for="hobi3">Menari</label>
                                        </div>
                                      </div>
                                      <div class="custom-control custom-radio">
                                        <h6>Jenis Kelamin</h6>
                                        <input type="radio" class="custom-control-input" id="jk" name="jenisk" required value="Pria" <?php if($jenisk=='Pria'){echo 'checked';} ?> >
                                        <label class="custom-control-label" for="jk">Pria</label>
                                      </div>
                                      <div class="custom-control custom-radio mb-3">
                                        <input type="radio" class="custom-control-input" name="jenisk" id="jk2" required value="Wanita" <?php if($jenisk=='Wanita'){echo 'checked';} ?> >
                                        <label class="custom-control-label" for="jk2">Wanita</label>
                                      </div>

                                      <div class="mb-5">
                                        <h6 class="custom-control">Asal</h6>
                                        <select class="custom-select" required id="asal" name="asal">
                                          <option <?php echo 'value='.$asal ?> > <?php echo $asal ?> </option>
                                          <option value="Kupang">Kupang</option>
                                          <option value="Banyuwangi">Banyuwangi</option>
                                          <option value="Sumba">Sumba</option>
                                        </select>
                                      </div>
                                        <button type="submit" class="text-center btn btn-info btn-block" onclick="alert('Data berhasil diedit')">Submit</button>
                                    </form>  <!-- /form -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  <!-- end card -->
            </div>
        </div>
    </div> <!-- end container -->

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
