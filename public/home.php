<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <style type="text/css">
        .carda{
          position: relative;
          overflow: hidden;
          display: flex;
          
          width: 500px; /* Box dimensions */
          height: 400px; 
          
          border-radius: 4px; /* Styling */
          box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14), 0 3px 1px -2px rgba(0,0,0,0.12), 0 1px 5px 0 rgba(0,0,0,0.2);  
          transition: box-shadow 0.56s ease-in-out; /* Animation */
          /* background-color: rgba(0,0,0,.2); /* for debugging */
        }
        /* Shows an outer shadow */
        .carda:hover{ /* Just for styling */
          cursor: pointer;
          box-shadow: 0 24px 38px 3px rgba(0,0,0,0.14), 0 9px 46px 8px rgba(0,0,0,0.12), 0 11px 15px -7px rgba(0,0,0,0.2);
        }

        /* Cards titles styling
        ------------------------------------------ */
        .card__title{ /* Just for styling */
            align-self: flex-end; padding: 2rem;
            color: rgba(255,255,255,.90); font-size: 1.5rem;
            line-height: 2;font-weight: 600; }  

        /* Styles for:
        ** - Using IMG tag inside a container
        ------------------------------------------ */
        /* The image container */
        .card__thumbnail{
          position: relative;
          overflow: hidden;  
          display: flex;
          justify-content: center; /* horizontal center */
          align-items: center; /* vertical center */
          
          width: 100%; /* Thumbnail dimensions. */
          height: 100%; /*** Change the height to make the image smaller ***/
          /* background-color: rgba(0,0,0,.2);  /* for debugging */
          
        }
        /* Sets the image dimensions */
        .card__thumbnail > img{ /* Tip: use 1:1 ratio images */
          width: 100%; /* or width when img.width > img.height */ 
        }  
        /* Styles the title inside the img container */
        .card__thumbnail > .card__title{ /* Just for styling */
          position: absolute; left: 50; bottom: 30px; }
    </style>

    <title>Home</title>
    
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/public/css/style.css" rel="stylesheet">

</head>

<body class="bg-gradient-light">

    <!-- begin content -->
    <?php

    session_start();

    if(!isset($_SESSION['admin'])) {
        header('location:/login/login.php');
    }

    ?>

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

      <!-- breadcrumb -->
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb" style="background-color: transparent;">
          <li class="breadcrumb-item active" aria-current="page">Home</li>
        </ol>
      </nav>

        <div class="carda my-4 col-lg-12 p-2">
    <!-- The background image -->
            <figure class="card__thumbnail">
              <img src="/public/img/home.jpg">
              <span class="card__title">
                <h2 class="display-4 mb-5 text-light text-center disp">Selamat Datang<br>Admin</h2>
                <a href="/register/register.php" class="mb-2 text-dark" style="padding-left: 110px;"><b><kbd>Daftar</kbd></b></a>
                <a href="/data/student.php" class="mb-2 text-dark" style="padding-left: 20px"><b><kbd>Data</kbd></b></a>
              </span>
            </figure>
        </div>
    </div>
    <!-- end content -->

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
