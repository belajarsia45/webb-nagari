<style>
    .list a:hover{
        color: green;
    }
</style>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="../boostrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../boostrap/css/style.css">
<title>Nagari Talang babungo</title>
</head>
<body>
<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <div class="container pb-1">
    <a class="navbar-brand fs-3 fw-bold" href="#">
    <img src="../img/logo.png" wwidth="55" height="75" class="d-inline-block align-text-top"> 
    Nagari Talang Babungo  
  </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse isi" id="navbarNav">
      <ul class="navbar-nav ms-auto ps-4">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
        </li>
        <div class="btn-group">
          <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuClickableInside" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
            Profil Nagari
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickableInside">
            <li><a class="dropdown-item" href="../index.php?page=sejarah">Sejarah Nagari</a></li>
            <li><a class="dropdown-item" href="../index.php?page=Visimisi">Visi & Misi</a></li>
            <li><a class="dropdown-item" href="../index.php?page=organisasi">Struktur Organisasi</a></li>
          </ul>
        </div>

        <div class="btn-group">
          <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuClickableInside" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
            Data Nagari
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickableInside">
            <li><a class="dropdown-item" href="../index.php?page=wilayah">Data Wilayah</a></li>
            <li><a class="dropdown-item" href="../index.php?page=penduduk">Data Pendidikan</a></li>
          </ul>
        </div>
        <!-- batas -->  
        <li class="nav-item">
          <a class="nav-link active" href="../index.php?page=wisata">Wisata</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="../index.php?page=agenda">Agenda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="../index.php?page=kontak">Kontak</a>
        </li>
        <li class="nav-item">
          <a href="../login.php" class="nav-link btn" style="padding: 6px 16px; background: #red; color: red; border-radius: 4px; border: 1px solid red; display: inline-block;">
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
include "../config/koneksi.php";
$kode = $_GET['id'];


$query = $conn->query("SELECT * FROM pengumuman WHERE id_pengumuman = '$kode'");
$t = mysqli_fetch_assoc($query);

?>

<div class="container mt-5">
    <div class="row">
        <div class="col">
            <h2 class="fw-bold"><?= $t['judul']; ?></h2>
            <div class=" mt-3">
            <img src="../img/kegiatan/<?= $t['foto']; ?>" class="rounded" width="700">
            <div class="row mt-5">
                <div class="col-sm-12">
                <p><span class="fw-bold"><?= $t['tgl']; ?>: </span><?= $t['isi_pengumuman']; ?></p>
                </div>
            </div>
             <!-- batas col -->               
          </div>
        </div>
        <!-- batas col -->
        <div class="col ps-5">
                 <h5>Informasi Terkini</h5>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                <?php 
                $query1 = $conn->query("SELECT * FROM pengumuman");
                foreach($query1 as $g) :
                ?>
                <li class="list-group-item"><a href="
                konten.php?id=<?php echo $g['id_pengumuman'] ?>" class="text-success"><?= $g['judul']; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div> 
    </div>
</div>
<a href="http://localhost/proyeck%20nagari%20tl.babungo/index.php?page=agenda" class="kembali">← Kembali ke daftar berita</a>
<!-- konten -->


<!-- about -->
<footer class="fot mt-5 py-5 text-white">
  <div class="container">
    <div class="row">
      <div class="col ps-1">
        <h4 style="color: green" align="center">Nagari Talang Babungo</h4>
        <center><img src="../img nagari/kantor wali.jpg" width="300" height="240" class="d-inline-block align-text-top"> </center>
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
              <img src="../img/sosial/facebook.png" width="40">
            </a>
            <a href="https://www.instagram.com/nagari_talang_babungo/" target="_blank">
              <img src="../img/sosial/instagram.png" width="40">
            </a>
            <a href="https://www.youtube.com/@TalangBabungoofficial" target="_blank">
              <img src="../img/sosial/youtube.png" width="40">
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
<script src="../boostrap/js/popper.min.js"></script>
<script src="../boostrap/js/bootstrap.min.js"></script>
  </body>
</html>
