<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Halaman Tambah Daftar Penduduk</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label>Foto</label>
                    <input type="file" class="form-control" name="fs" accept="image/*">
                  </div>
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="nama_jamaah" required>
                  </div>
                  <div class="form-group">
                    <label>Jorong</label>
                    <input type="text" class="form-control" name="organisasi" required>
                  </div>
                  <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" class="form-control" name="jabatan" required>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-success" name="saveU">Tambah Penduduk</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
</section>
<?php 
if(isset($_POST['saveU'])) {

    $user = $_POST['nama_jamaah'];
    $org = $_POST['organisasi'];
    $jbt = $_POST['jabatan'];
    $foto = $_FILES['fs']['name'];

    $dir = "img/";
    $tmp_file = $_FILES['fs']['tmp_name'];
    move_uploaded_file($tmp_file, $dir.$foto);
    
    $result = $conn->query("INSERT INTO jamaah(foto,nama_jamaah,organisasi,jabatan) VALUES ('$foto','$user','$org','$jbt')")or die(mysqli_connect_error($conn));

    if($result > 0) {
        echo "<script>
                document.location.href= '?page=user';  
              </script>";
    } else {
        echo "Gagal Menambahkan data";
    }


}



?>