
<!-- konten -->
<!-- sarana -->
<section class="container mt-5">
  <div class="row">
    <div class="col-md-12 mb-5">
      <h2 class="fw-bold text-center">Wisata | Nagari</h2>
    </div>
  </div>
<div class="col-12 d-flex justify-content-center">
<div class="row">
  <?php 
  include "config/koneksi.php";
  $query = $conn->query("SELECT * FROM wisata ORDER BY id_sapra DESC");
  foreach($query as $data) :
  ?>
 <div class="col mb-5">
  <div class="card" style="width: 15rem;">
    <img src="img nagari/wisata/<?= $data['foto']; ?>" class="card-img-top w-350" hight="400">
    <div class="card-body">
      <p class="card-text text-center"><?= $data['nama_sapra']; ?></p>
    </div>
  </div>
 </div>
 <?php endforeach; ?>
  <!-- bats -->
</div>
</div>
</div>
</div>
</section>
   