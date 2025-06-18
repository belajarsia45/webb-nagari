
<div class="akses">
<!-- corosuel -->
<div class="col-md-12">
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img nagari/Talang bungo.jpg" witdh="300" height="800" class="d-block w-100" >
      <div class="carousel-caption d-none d-md-block position-absolute top-50 start-50 translate-middle">
        <h1 style="color: black">Selamat Datang</h1>
        <h4 style="color: black">Di Web informasi Nagari Talang Babungo</h4>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img nagari/talang2.jpg" witdh="300" height="800" class="d-block w-100" >
      <div class="col-9 carousel-caption d-none d-md-block position-absolute top-50 start-50 translate-middle">
        <h1 style="color: black">Sekilas Tentang Nagari Talang Babungo</h1>
        <h4 style="color: black">Nagari Talang Babungo adalah salah satu nagari yang berada di Kecamatan Hiliran Gumanti, Kabupaten Solok, Provinsi Sumatera Barat. Terletak di daerah pegunungan yang sejuk dan asri, Nagari Talang Babungo dikenal sebagai nagari yang kaya akan potensi alam, budaya, dan tradisi masyarakat Minangkabau.</h4>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
<!-- corosuel -->

<!-- sejarah -->
<section class="container mt-5">
  <div class="row">
  <div class="col">
      <img src="img nagari/kpk.jpg" class="rounded" width="525" height="460">
    </div>
  <div class="col">
      <h3 align="justify" class="mb-3" style="color: blue">KPK RI LAKUKAN UJI PETIK HASIL PENILAIAN INSPEKTORAT PROVINSI KE NAGARI TALANG BABUNGO</h2>
      <p align="justify">Talang Babungo, 13 November 2024 - Komisi Pemberantasan Korupsi (KPK) melakukan monitoring hasil penilaian perluasan percontohan desa anti korupsi di Nagari Talang Babungo. Pasalnya Nagari Talang Babungo sebelumnya sudah dilakukan penilaian oleh Tim Penilai dari Inspektorat Provinsi dan Kabupaten dengan perolehan nilai 98. Kegiatan ini dilakukan di Aula Kantor Wali Nagari Talang Babungo.</p>
      <p align="justify">Dalam sambutannya PJS Bupati Solok, Akbar Ali menyampaikan apresiasi yang luar biasa  atas progres dalam menjadikan nagari Talang Babungo sebagai Nagari Percontohan antikorupsi yang bersih dan transparan sehingga bisa memperoleh 4 besar dari desa se-Provinsi Sumatera Barat yang di nominasikan sebagai desa/nagari anti korupsi.
      </p>
      <p align="justify">"Ini suatu kebanggaan bagi kita semua bagi seluruh perangkat, Kabupaten/Kota, Provinsi, dan Nagari beserta dukungan dari seluruh lembaga-lembaga yang ada di Nagari, " tuturnya.
      </p>
      <p align="justify">Pencapaian sebagai Nagari Percontohan antikorupsi memiliki dampak bagi nagari. Sehingga Pemerintah nagari bisa menjalankan sesuai aturan dan terhindar dari hal-hal yang melanggar hukum.Ketua Tim Penilaian desa antikorupsi Friesmount Wongso mengatakan, pihaknya hadir dalam melakukan monitoring penilaian Percontohan Nagari antikorupsi untuk memverifikasi hasil penilaian yang telah dilakukan oleh Tim Penilaian dari Provinsi dan Kabupaten.  Dalam monitoring tersebut tim penilai KPK melakukan monitoring langsung ke lapangan, kunjungan kantor, dan memberikan evaluasi beserta masukkan kepada pemerintah nagari untuk semakin baik kedepannya.</p>
</script>
    </div>
  </div>
</section>
<!-- sejarah -->

<!-- sarana -->
<section id="pengumuman" class="bg-primary">
<div class="container mt-100" style="background: green">
  <div class="row py-4">
    <div class="col-md-6">
    <h4 align="center" class="text-white fw-bold">WISATA NAGARI</h4>
      <!-- casosul -->
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">

  <?php 
  $i = 0;

  include "config/koneksi.php";
  $query = $conn->query("SELECT * FROM wisata");

while($data = mysqli_fetch_assoc($query)) {
 
   $active = ($i == 0) ? 'active' : '';
  ?>

    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?= $i; ?>" class="<?= $active; ?>"></button>

<?php 
 $i++; 
  }
 ?>

  </div>
  <div class="carousel-inner">

    <?php 
    include "config/koneksi.php";
    $query1 = $conn->query("SELECT * FROM wisata ORDER BY id_sapra DESC");
    $i = 0;
    while ($data1 = mysqli_fetch_assoc($query1)) { 
      $active = ($i == 0) ? 'active' : '';
      ?>
    <div class="carousel-item <?php echo $active; ?>">
      <img src="img nagari/wisata/<?= $data1['foto']; ?>" class="w-100" height="400">
    </div>
    
    <?php 
    $i++;
    }
     ?>

    
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
 
</div>
      <!-- casosul -->
  </div>
  <div class="col-md-6">
</div>
</section>
<!-- sarana -->

