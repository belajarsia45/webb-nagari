<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Tambah Data Populasi Perwilayah</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label>Wilayah/Jorong</label>
                    <input type="text" class="form-control" name="wilayah_jorong" required>
                  </div>
                  <div class="form-group">
                    <label>KK</label>
                    <input type="number" class="form-control" name="kk" required>
                  </div>
                  <div class="form-group">
                    <label>L</label>
                    <input type="number" class="form-control" name="l" required>
                  </div>
                  <div class="form-group">
                    <label>P</label>
                    <input type="number" class="form-control" name="p" required>
                  </div>
                  <div class="form-group">
                    <label>L+P</label>
                    <input type="number" class="form-control" name="l_p" required>
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-success" name="saveW">Tambah Data Wilayah</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
</section>
<?php 
if(isset($_POST['saveW'])) {

      $wilayah    = $_POST['wilayah_jorong'];
      $kk         = $_POST['kk'];
      $l          = $_POST['l'];
      $p          = $_POST['p'];
      $lp         = $_POST['l_p'];

    // $dir = "img/";
    // $tmp_file = $_FILES['fs']['tmp_name'];
    // move_uploaded_file($tmp_file, $dir.$foto);
    
    $result = $conn->query("INSERT INTO data_wilayah(wilayah_jorong,kk,l,p,l_p) VALUES ('$wilayah','$kk','$l','$p','$lp')")or die(mysqli_connect_error($conn));

    if($result > 0) {
        echo "<script>
                document.location.href= '?page=wilayah';  
              </script>";
    } else {
        echo "Gagal Menambahkan data";
    }


}

?>