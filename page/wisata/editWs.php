<?php 
$id = $_GET['kode'];
$result = $conn->query("SELECT * FROM wisata WHERE id_sapra = '$id'");
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
                <h3 class="card-title">Edit Data Wisata | Kebudayaan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="nama"
                    value="<?= $t['nama_sapra']; ?>">
                  </div>
                  <div class="form-group">
                    <label>Foto</label>
                    <input type="file" class="form-control" name="foto" accept="image/*" value="<?= $t['foto']; ?>">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-success" name="updateWs">Edit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
</section>
<?php 
if(isset($_POST['updateWs'])) {
 
    $nama = $_POST['nama'];
    $foto = $_FILES['foto']['name'];

    $dir = "img nagari/wisata/";
    $tmp_file = $_FILES['foto']['tmp_name'];

    if($foto == !null) {
      // proses hapus foto
      $hapusfoto = 'img nagari/wisata/'.$t['foto'];
      unlink($hapusfoto);

      // proses update foto dan data
      move_uploaded_file($tmp_file, $dir.$foto);
      $result = $conn->query("UPDATE wisata SET
      nama_sapra = '$nama',
      foto = '$foto'
      WHERE id_sapra = '$id'")or die(mysqli_connect_error($conn));
    }else{
      $result = $conn->query("UPDATE wisata SET
      nama_sapra = '$nama'
      WHERE id_sapra = '$id'")or die(mysqli_connect_error($conn));
    }

    if($result > 0) {
        echo "<script>
                document.location.href= '?page=wisata';  
              </script>";
    } else {
        echo "Gagal Edit data";
    }


}



?>