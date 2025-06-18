<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Halaman Tambah Data Kas Keluar</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label>Keterangan</label>
                    <input type="text" required="" class="form-control" name="ktr">
                  </div>
                  <div class="form-group">
                    <label>Tanggal</label>
                    <input type="date" required="" class="form-control" name="tgl">                 
                  </div>
                  <div class="form-group">
                    <label>Jumlah</label>
                    <input type="text" required="" class="form-control" name="jml">                 
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-success" name="saveM">Tambah</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
</section>
<?php 
if(isset($_POST['saveM'])) {
  
    $ktr = $_POST['ktr'];
    $tgl = $_POST['tgl'];
    $jml = $_POST['jml'];

    $result = $conn->query("INSERT INTO kas_keluar(keterangan_k,tanggal_k,keluar) VALUES ('$ktr','$tgl','$jml')")or die(mysqli_connect_error($conn));

    if($result > 0) {
        echo "<script>
                document.location.href= '?page=keluar';  
              </script>";
    } else {
        echo "Gagal Menambahkan data";
    }


}



?>