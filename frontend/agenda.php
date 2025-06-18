
<!-- konten -->
<div class="container mt-5">
 <div class="row">
<h2 style="color: #c62828; text-align: center; font-size: 28px;">Halaman Tambah Agenda | Pengumuman</h2>
    <?php 
    include "config/koneksi.php";
    $query1 = $conn->query("SELECT * FROM pengumuman ORDER BY tgl DESC");
    foreach($query1 as $data):
    ?>

    <div class="col-md-6 mt-4">
    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-4">
            <img src="img/kegiatan/<?= $data['foto']; ?>" class="img-fluid rounded-start" width="500">
            </div>
            <div class="col-md-8">
            <div class="card-body">
                <a href="frontend/konten.php?id=<?php echo $data['id_pengumuman'] ?>" class="text-success"><p class="card-text fs-5"><?= $data['judul'] ?></p></a>  
                <p class="card-text"><?= substr($data['isi_pengumuman'],0,100); ?></p>
                <p class="card-text"><small class="text-muted"><?= date("d/M/Y", strtotime($data['tgl'])); ?></small></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- batas -->
    <?php endforeach; ?>   
    
  </div>
</div>
<!-- konten -->
