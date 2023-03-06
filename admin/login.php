<?php
session_start();
require_once "../config.php";
$username = (isset($_POST['username']) ? $_POST['username'] : '');
$password = (isset($_POST['password']) ? $_POST['password'] : '');
if (isset($_POST['btnLogin'])) {
  $result = $conn->query("SELECT * FROM tb_user WHERE username = '$username' AND isactive = 1");
  if ($result->num_rows > 0) {
    $row = $result->fetch_array();
    if ($password == $row["password"]) {
      $_SESSION["login"] = true;
      $_SESSION['status'] = "login";
      $_SESSION['username'] = $row["username"];
      header("Location: dashboard.php");
    } else {
      $_SESSION["login"] = false;
      $_SESSION['status'] = "";
      $_SESSION['username'] = "";
      echo "<script>alert('Password Salah!')</script>";
    }
  } else {
    $_SESSION["login"] = false;
    $_SESSION['status'] = "";
    $_SESSION['username'] = "";
    echo "<script>alert('Username tidak tersedia!')</script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>WPS Login</title>

    <!-- Custom fonts for this template-->
    <link
      href="vendor/fontawesome-free/css/all.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet"
    />

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet" />
  </head>

  <body class="bg-gradient-primary">
    <div class="container">
      <!-- Outer Row -->
      <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">
          <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
              <!-- Nested Row within Card Body -->
              <div class="row">
                <!-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> -->
                <img src="../assets/img/logo.png" alt="Widya Presisi Solusi" class="col-lg-6 col-12">
                <div class="col-lg-6">
                  <div class="p-5">
                    <div class="text-center">
                      <h1 class="h4 text-gray-900 mb-4 font-weight-bold">Welcome Back!</h1>
                    </div>
                    <form class="user" method="post">
                      <div class="form-group">
                        <input
                          type="text"
                          class="form-control form-control-user"
                          id="username"
                          aria-describedby="username"
                          placeholder="Enter Username..."
                          name="username"
                        />
                      </div>
                      <div class="form-group">
                        <input
                          type="password"
                          class="form-control form-control-user"
                          id="password"
                          placeholder="Password"
                          name="password"
                        />
                      </div>
                      <!-- <div class="form-group">
                        <div class="custom-control custom-checkbox small">
                          <input
                            type="checkbox"
                            class="custom-control-input"
                            id="customCheck"
                          />
                          <label class="custom-control-label" for="customCheck"
                            >Remember Me</label
                          >
                        </div>
                      </div> -->
                      <button class="btn btn-primary btn-user btn-block" type="submit" name="btnLogin">
                      Login
                      </button>
                      <hr />
                      <!-- <a
                        href="index.html"
                        class="btn btn-google btn-user btn-block"
                      >
                        <i class="fab fa-google fa-fw"></i> Login with Google
                      </a>
                      <a
                        href="index.html"
                        class="btn btn-facebook btn-user btn-block"
                      >
                        <i class="fab fa-facebook-f fa-fw"></i> Login with
                        Facebook
                      </a> -->
                    </form>
                    <hr />
                    <div class="text-center">
                      <a class="small" href="../"
                        >Back to main!</a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
  </body>
</html>
