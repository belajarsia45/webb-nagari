<!doctype html>
<html lang="en">
  <head>
    <!-- Bootstrap CSS -->
    <link href="boostrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="boostrap/css/style.css">
    
<title>Nagari Talang Babungo</title>
</head>
<body>
<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <div class="container pb-1">
    <a class="navbar-brand fs-3 fw-bold" href="#">
    <img src="img/logo.png" width="55" height="75" class="d-inline-block align-text-top">                     
    Nagari Talang Babungo  
    </a>


    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse isi" id="navbarNav">
      <ul class="navbar-nav ms-auto ps-4">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <div class="btn-group">
          <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuClickableInside" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
            Profil Nagari
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickableInside">
            <li><a class="dropdown-item" href="?page=sejarah">Sejarah Nagari</a></li>
            <li><a class="dropdown-item" href="?page=Visimisi">Visi & Misi</a></li>
            <li><a class="dropdown-item" href="?page=organisasi">Struktur Organisasi</a></li>
          </ul>
        </div>

        <div class="btn-group">
          <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuClickableInside" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
            Data Nagari
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickableInside">
            <li><a class="dropdown-item" href="?page=wilayah">Data Wilayah</a></li>
            <li><a class="dropdown-item" href="?page=penduduk">Data Pendidikan</a></li>
          </ul>
        </div>
        <!-- batas -->  
        <li class="nav-item">
          <a class="nav-link active" href="?page=wisata">Wisata</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="?page=agenda">Agenda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="?page=kontak">Kontak</a>
        </li>
        <li class="nav-item">
          <a href="login.php" class="nav-link btn" style="padding: 6px 16px; background: #red; color: red; border-radius: 4px; border: 1px solid red; display: inline-block;">
            <i class="fa fa-sign-in-alt"></i> Login
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- navbar -->

<!-- konten -->
<?php 
include "config/koneksi.php";
session_start();

 error_reporting (E_ALL ^ (E_NOTICE | E_WARNING)); //notif error

  if($_GET['page'] == ''){
    include "halaman.php";
  } 
  else if($_GET['page'] == 'sejarah'){
    include 'frontend/sejarah.php';
  } 
  else if($_GET['page'] == 'Visimisi'){
    include 'frontend/Visimisi.php';
  }
  else if($_GET['page'] == 'organisasi'){
    include 'frontend/organisasi.php';
  } 
  else if($_GET['page'] == 'wilayah'){
    include 'frontend/wilayah.php';
  } 
  else if($_GET['page'] == 'penduduk'){
    include 'frontend/penduduk.php';
  }
  else if($_GET['page'] == 'kontak'){
    include 'frontend/kontak.php';
  }
  else if($_GET['page'] == 'agenda'){
    include 'frontend/agenda.php';
  }
  else if($_GET['page'] == 'wisata'){
    include 'frontend/wisata.php';
  }
    // Form Pembayaran
// Form Pembayaran

if(isset($_POST['submit_pembayaran'])) {
  // Proses pengiriman data pembayaran ke database
  $nma = $_POST['nama'];
  $jml = $_POST['jumlah'];
  $ktr = $_POST['keterangan'];

  // Tanggal saat ini
  $tgl = date('Y-m-d');

  // masukkan data ke tabel kas_masuk
  $result = $conn->query ("INSERT INTO kas_masuk(nama,keterangan, tanggal, masuk) VALUES ('$nma','$ktr', '$tgl', '$jml')");

  if ($result == TRUE) {
      echo '<div class="alert alert-success" role="alert">Pembayaran berhasil disubmit dan masuk ke kas masuk!</div>';
  } else {
      echo '<div class="alert alert-danger" role="alert">Error: ' . $conn->error . '</div>';
  }
}
if (!isset($_GET['page']) || $_GET['page'] === 'index'){
  ?>
  <!-- Form Pembayaran -->
  <div class="container mt-5">
      <h2>Anda ingin Berpartisipasi?</h2>
      <form method="post" action="">
          <div class="mb-3">
              <label for="nama" class="form-label">Nama Pembayar</label>
              <input type="text" class="form-control" id="nama" name="nama" required>
          </div>
          <div class="mb-3">
              <label for="jumlah" class="form-label">Nominal Pembayaran</label>
              <input type="int" class="form-control" id="nominal" name= "jumlah" required>
          </div>
          <div class="mb-3">
              <label for="keterangan" class="form-label">Keterangan Pembayaran</label>
              <textarea class="form-control" id="keterangan" name="keterangan" rows="3" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary" name="submit_pembayaran">Submit Pembayaran</button>
      </form>
  </div>
<?php
}
?>
<!-- konten -->

<!-- about -->
<footer class="fot mt-5 py-5 text-white">
  <div class="container">
    <div class="row">
      <div class="col ps-1">
        <h4 style="color: green" align="center">Nagari Talang Babungo</h4>
        <center><img src="img nagari/kantor wali.jpg" width="300" height="240" class="d-inline-block align-text-top"> </center>
      </div>
      <!-- batas -->
      <div class="col">
        <h4 style="color: blue" align="center">Hubungi Kami</h4>
        <p>Jln Pembaharuan Kiliran Jao KM.1 Kecamatan Hiliran Gumanti, Kabupaten Solok – Sumatera Barat 27372</p>
        <p>Tlp. 0852 7264 6512</p>
        <p>Email. anggra1904@gmail.com</p><br>
          <center>
          <div class="sosial">
            <a href="https://web.facebook.com/pages/Talang%20Babungo,%20Hiliran%20Gumanti,%20Solok/331401950379324/#" target="_blank">
              <img src="img/sosial/facebook.png" width="40">
            </a>
            <a href="https://www.instagram.com/nagari_talang_babungo/" target="_blank">
              <img src="img/sosial/instagram.png" width="40">
            </a>
            <a href="https://www.youtube.com/@TalangBabungoofficial" target="_blank">
              <img src="img/sosial/youtube.png" width="40">
            </a>
          </div>
          </center>
      </div>
      <!-- batas -->
      <div class="col">
        <h4 style="color: blue" align="center">Bersama Kita Bangun Nagari</h4>
        <p align="justify">Terima kasih telah mengunjungi website resmi Nagari Talang Babungo.
        Mari bersama membangun nagari yang lebih maju, sejahtera, dan beradat.
        Hubungi kami jika ada saran atau pertanyaan!</p>
      </div>
      <!-- batas -->
    </div>
  </div>
  <div class="copy pt-5 text-center">
    Copyright &copy; 2025 by AnggraPernando
  </div>
</footer>
<!-- about -->
<script src="boostrap/umd/popper.min.js"></script>
<script src="boostrap/js/bootstrap.min.js"></script>
  </body>
</html>
