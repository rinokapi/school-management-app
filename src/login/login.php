<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta id="" name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta id="" name="description" content="">
    <meta id="" name="author" content="">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/public/css/style.css" rel="stylesheet">

</head>

<body class="bg-gradient-light">

    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-lg-5">

                <div class="bg-gradient-light card o-hidden border-0 shadow-lg my-5 bg-light">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row justify-content-center">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Login</h1>
                                    </div>
                                    
                                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="was-validated">
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                              <input placeholder="Username" type="text" class="form-control is-invalid" id="usernama" name="username" required>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                              <input placeholder="Password" type="password" class="form-control is-invalid" id="password" name="password" required>
                                            </div>
                                          </div>
                                        <button type="submit" class="text-center btn btn-info btn-block">Login</button>
                                    </form>

                                    <?php

                                    $server="localhost";
                                    $user="rka";
                                    $pass="rinokapi";
                                    $db="dts_db";

                                    $conn=mysqli_connect($server, $user, $pass, $db);

                                    if($_SERVER["REQUEST_METHOD"]=="POST") {

                                        $username=$_REQUEST['username'];
                                        $password=$_REQUEST['password'];

                                        $sql="select * from dts_pengguna where user='$username' and pass='$password'";

                                        $result=mysqli_query($conn, $sql);

                                        if(mysqli_num_rows($result)==1) {
                                            session_start();
                                            $_SESSION['admin']=$username;
                                            header("location: /");
                                        }
                                        
                                    }

                                    mysqli_close($conn);

                                    ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="toast-header">
        <img src="..." class="rounded mr-2" alt="...">
        <strong class="mr-auto">Bootstrap</strong>
        <small>11 mins ago</small>
        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="toast-body">
        Hello, world! This is a toast message.
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
