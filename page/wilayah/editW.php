<?php
$id = $_GET['kode'];
$result = $conn->query("SELECT * FROM data_wilayah WHERE id_jorong = '$id'");
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
            <h3 class="card-title">Edit Data Populasi Perwilayah</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="" method="POST" enctype="multipart/form-data">
            <div class="card-body">
              <div class="form-group">
                <label>Wilayah/Jorong</label>
                <input type="text" class="form-control" name="wilayah_jorong" value="<?= $t['wilayah_jorong']; ?>">
              </div>
              <div class="form-group">
                <label>KK</label>
                <input type="number" class="form-control" name="kk" value="<?= $t['kk']; ?>">
              </div>
              <div class="form-group">
                <label>L</label>
                <input type="number" class="form-control" name="l" value="<?= $t['l']; ?>">
              </div>
              <div class="form-group">
                <label>P</label>
                <input type="number" class="form-control" name="p" value="<?= $t['p']; ?>">
              </div>
              <div class="form-group">
                <label>L+P</label>
                <input type="number" class="form-control" name="l_p" value="<?= $t['l_p']; ?>">
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-success" name="editW">Edit Data Wilayah</button>
              </div>
          </form>
        </div>
        <!-- /.card -->
      </div>
    </div>
  </div>
</section>
<?php
if (isset($_POST['editW'])) {

      $wilayah    = $_POST['wilayah_jorong'];
      $kk         = $_POST['kk'];
      $l          = $_POST['l'];
      $p          = $_POST['p'];
      $lp         = $_POST['l_p'];

    
     $result = $conn->query("UPDATE data_wilayah SET
    wilayah_jorong = '$wilayah',
    kk = '$kk',
    l = '$l',
    p = '$p',
    l_p = '$lp'
    WHERE id_jorong = '$id'")or die(mysqli_connect_error($conn));

    if($result > 0) {
        echo "<script>
                document.location.href= '?page=wilayah';  
              </script>";
    } else {
        echo "Gagal Edit data";
    }


}
?>