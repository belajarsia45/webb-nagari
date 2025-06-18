<?php
$id = $_GET['kode'];
$result = $conn->query("SELECT * FROM data_pendidikan WHERE id_golongan = '$id'");
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
            <h3 class="card-title">Edit Data Pendidikan</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="" method="POST" enctype="multipart/form-data">
            <div class="card-body">
              <div class="form-group">
                <label>Kelompok</label>
                <input type="text" class="form-control" name="kelompok" value="<?= $t['kelompok']; ?>">
              </div>
              <div class="form-group">
                <label>Laki-Laki</label>
                <input type="number" class="form-control" name="laki_laki" value="<?= $t['laki_laki']; ?>">
              </div>
              <div class="form-group">
                <label>Perempuan</label>
                <input type="number" class="form-control" name="perempuan" value="<?= $t['perempuan']; ?>">
              </div>
              <div class="form-group">
                <label>Jumlah</label>
                <input type="number" class="form-control" name="jumlah" value="<?= $t['jumlah']; ?>">
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-success" name="editP">Edit Data Pendidikan</button>
              </div>
          </form>
        </div>
        <!-- /.card -->
      </div>
    </div>
  </div>
</section>
<?php
if (isset($_POST['editP'])) {

      $kelompok    = $_POST['kelompok'];
      $ll        = $_POST['laki_laki'];
      $p          = $_POST['perempuan'];
      $j          = $_POST['jumlah'];

    
     $result = $conn->query("UPDATE data_pendidikan SET
    kelompok = '$kelompok',
    laki_laki = '$ll',
    perempuan = '$p',
    jumlah = '$j'

    WHERE id_golongan = '$id'")or die(mysqli_connect_error($conn));

    if($result > 0) {
        echo "<script>
                document.location.href= '?page=penduduk';  
              </script>";
    } else {
        echo "Gagal Edit data";
    }


}
?>