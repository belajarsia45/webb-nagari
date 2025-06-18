<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Halaman Tambah Data Kajian</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="POST" >
                <div class="card-body">
                  <div class="form-group">
                    <label>Kajian</label>
                    <input type="text" required="" class="form-control" name="kajian">
                  </div>
                  <div class="form-group">
                    <label>Penceramah</label>
                    <input type="text" required="" class="form-control" name="penceramah">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-success" name="savek">Tambah</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
</section>
<?php 
if(isset($_POST['savek'])) {
    $kajian = $_POST['kajian'];
    $penceramah = $_POST['penceramah'];

    $result = $conn->query("INSERT INTO kajian(nm_kajian,nm_ustad) VALUES ('$kajian','$penceramah')")or die(mysqli_connect_error($conn));

    if($result > 0) {
        echo "<script>          
          document.location.href= '?page=kajian';
    </script>";
    } else {
        echo "Gagal Menambahkan data";
    }


}



?>