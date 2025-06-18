<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Tambah Data Pendidikan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label>Kelompok</label>
                    <input type="text" class="form-control" name="kelompok" required>
                  </div>
                  <div class="form-group">
                    <label>Laki-Laki</label>
                    <input type="number" class="form-control" name="laki_laki" required>
                  </div>
                  <div class="form-group">
                    <label>Perempuan</label>
                    <input type="number" class="form-control" name="perempuan" required>
                  </div>
                  <div class="form-group">
                    <label>Jumlah</label>
                    <input type="number" class="form-control" name="jumlah" required>
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-success" name="saveP">Tambah Data Pendidikan</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
</section>
<?php 
if(isset($_POST['saveP'])) {

      $kelompok    = $_POST['kelompok'];
      $ll        = $_POST['laki_laki'];
      $p          = $_POST['perempuan'];
      $j          = $_POST['jumlah'];

    
    $result = $conn->query("INSERT INTO data_pendidikan(kelompok,laki_laki,perempuan,jumlah) VALUES ('$kelompok','$ll','$p','$j')")or die(mysqli_connect_error($conn));

    if($result > 0) {
        echo "<script>
                document.location.href= '?page=penduduk';  
              </script>";
    } else {
        echo "Gagal Menambahkan data";
    }


}

?>