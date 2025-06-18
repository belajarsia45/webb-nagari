<?php
$id = $_GET['kode'];
$result = $conn->query("SELECT * FROM jamaah WHERE id_jamaah = '$id'");
$t = mysqli_fetch_assoc($result);
?>
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-success">
          <div class="card-header">
            <h3 class="card-title">Halaman Edit Data Penduduk</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="" method="POST" enctype="multipart/form-data">
            <div class="card-body">
              <div class="form-group">
                <label>Foto</label>
                <input type="file" class="form-control" name="fs" accept="image/*" value="<?= $t['foto']; ?>">
              </div>
              <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="nama_jamaah" value="<?= $t['nama_jamaah']; ?>">
              </div>
              <div class="form-group">
                <label>Jorong</label>
                <input type="text" class="form-control" name="organisasi" value="<?= $t['organisasi']; ?>">
              </div>
              <div class="form-group">
                <label>Alamat</label>
                <input type="text" class="form-control" name="jabatan" value="<?= $t['jabatan']; ?>">
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-success" name="editU">Edit Penduduk</button>
              </div>
          </form>
        </div>
        <!-- /.card -->
      </div>
    </div>
  </div>
</section>
<?php
if (isset($_POST['editU'])) {

  $nma = $_POST['nama_jamaah'];
  $org = $_POST['organisasi'];
  $jbtn = $_POST['jabatan'];
  $foto = $_FILES['fs']['name'];

  $dir = "img/";
  $tmp_file = $_FILES['fs']['tmp_name'];

  if ($foto == !null) {
    // proses hapus foto
    $hapusfoto = 'img/' . $t['fs'];
    unlink($hapusfoto);

    // proses update foto dan data
    move_uploaded_file($tmp_file, $dir . $foto);
    $result = $conn->query("UPDATE jamaah SET
      foto = '$foto',
      nama_jamaah = '$nma',
      organisasi = '$org',
      jabatan = '$jbtn'
      WHERE id_jamaah = '$id'") or die(mysqli_connect_error($conn));
  } else {
    $result = $conn->query("UPDATE jamaah SET
      nama_jamaah = '$nma',
      organisasi = '$org',
      jabatan = '$jbtn'
      WHERE id_jamaah = '$id'") or die(mysqli_connect_error($conn));
  }

  if ($result > 0) {
    echo "<script>
                document.location.href= '?page=user';  
              </script>";
  } else {
    echo "Gagal Edit data";
  }


}
?>