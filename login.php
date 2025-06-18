<?php
include "config/koneksi.php";
session_start();
if (isset($_SESSION['username'])) {
  header('Location: dashboard1.php');
  exit;
}

if (isset($_POST['login'])) {

  $user = htmlspecialchars($_POST['user']);
  $pass = htmlspecialchars($_POST['pass']);

  $query = $conn->query("SELECT * FROM admin WHERE username = '$user' AND password = '$pass'");

  if ($query->num_rows > 0) {
    $row = mysqli_fetch_assoc($query);
    $_SESSION['username'] = $row['username'];
    $_SESSION['foto'] = $row['foto'];
    header('location: dashboard1.php');

  } else {

    echo "<script>alert('Username atau Password Anda Salah.Silahkan Coba Lagi!');</script>";
  }

}


?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="boostrap/css/style.css">
  <!-- Bootstrap CSS -->
  <link href="boostrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="boostrap/css/style.css">
  <title>Halaman Login</title>
</head>

<body>

  <!-- login -->
  <section class="vh-100 bg-success">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem;">
            <div class="row g-0">
              <div class="col-md-6 col-lg-5 d-none d-md-block">
                <img src="img nagari/logo2.jpg" alt="login form" class="img-fluid"
                  style="border-radius: 1rem 0 0 1rem; height: 630px;" />
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">
                  <form action="" method="POST">
                    <div class="d-flex align-items-center mb-3 pb-1">
                      <i class="fas fa-cubes fa-2x me-3" style="color: green;"></i>
                      <a class="navbar-brand" href="#">
                       <center><img src="img nagari/talang bungo.jpg" style="box-sahdow: 5px 5px " width="200" height="200">
                      </a></center> 
                    </div>
                    <h2 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;" align="center">Silahkan Login</h2>
                    <div class="form-outline mb-4">
                      <input type="text" id="Username" class="form-control form-control-lg" autofocus required
                        name="user" />
                      <label class="form-label" for="Username">Username</label>
                    </div>
                    <div class="form-outline mb-4">
                      <input type="password" id="password" class="form-control form-control-lg" name="pass" required />
                      <label class="form-label" for="password">Password</label>
                    </div>
                    <div class="pt-1 mb-4">
                      <button class="btn btn-primary btn-lg btn-block" type="submit" name="login">Login</button>
                      <a href="index.php" class="btn btn-success btn-lg btn-block">Batal</a>
                    </div>
                    <h7 style="color: red;">Login hanya diperuntukkan untuk pengurus/Admin</h7>
              </div>

            </div>
          </div>

        </div>
      </div>
    </div>
    </div>
  </section>
  <!-- login -->

  <script src="boostrap/umd/popper.min.js"></script>
  <script src="boostrap/js/bootstrap.min.js"></script>
</body>

</html>