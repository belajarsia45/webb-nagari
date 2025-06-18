<?php 
$id = $_GET['kode'];
$result = $conn->query("SELECT * FROM kas_keluar WHERE id_kaskeluar = '$id'");
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
                <h3 class="card-title">Halaman Edit Data Kas Keluar</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label>Keterangan</label>
                    <input type="text" class="form-control" name="ktr" value="<?= $t['keterangan_k']; ?>">
                  </div>
                  <div class="form-group">
                    <label>Tanggal</label>
                    <input type="date" required="" class="form-control" name="tgl" value="<?= $t['tanggal_k']; ?>">                 
                  </div>
                  <div class="form-group">
                    <label>Jumlah</label>
                    <input type="text" class="form-control" name="jml" value="<?= $t['keluar']; ?>">                 
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-success" name="updateM">Edit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
</section>
<?php 
if(isset($_POST['updateM'])) {
 
    $ktr = $_POST['ktr'];
    $tgl = $_POST['tgl'];
    $jml = $_POST['jml'];
   
    $result = $conn->query("UPDATE kas_keluar SET
    keterangan_k = '$ktr',
    tanggal_k = '$tgl',
    keluar = '$jml'
    WHERE id_kaskeluar = '$id'")or die(mysqli_connect_error($conn));

    if($result > 0) {
        echo "<script>
                document.location.href= '?page=keluar';  
              </script>";
    } else {
        echo "Gagal Edit data";
    }


}



?>