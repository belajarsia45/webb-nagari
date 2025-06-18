<?php 
$id = $_GET['kode'];
$result = $conn->query("SELECT * FROM pengumuman WHERE id_pengumuman = '$id'");
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
                <h3 class="card-title">Halaman Edit Agenda</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                <div class="form-group">
                    <label>Judul</label>
                    <input type="text" class="form-control" name="jdl" value="<?= $t['judul']; ?>">
                  </div>
                  <div class="form-group">
                    <label>Keterangan</label>
                    <textarea class="form-control" name="ktrg" cols="4" rows="8"><?= $t['isi_pengumuman']; ?></textarea>
                  </div>
                  <div class="form-group">
                    <label>Tanggal</label>
                    <input type="date" class="form-control" name="tgl" value="<?= $t['tgl']; ?>">
                  </div>
                  <div class="form-group">
                    <label>Foto</label>
                    <input type="file"class="form-control" accept="image/*" name="foto" value="<?= $t['foto']; ?>">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-success" name="updateA">Edit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
</section>
<?php 
if(isset($_POST['updateA'])) {
 
    $jdl = $_POST['jdl'];
    $ktrg = $_POST['ktrg'];
    $tgl = $_POST['tgl'];
    $foto = $_FILES['foto']['name'];

    $dir = "img/kegiatan/";
    $tmp_file = $_FILES['foto']['tmp_name'];

   
    if($foto == !null) {
      // proses hapus foto
      $hapusfoto = 'img/kegiatan/'.$t['foto'];
      unlink($hapusfoto);

      // proses update foto dan data
      move_uploaded_file($tmp_file, $dir.$foto);
      $result = $conn->query("UPDATE pengumuman SET
      judul = '$jdl',
      isi_pengumuman = '$ktrg',
      tgl = '$tgl',
      foto = '$foto'
      WHERE id_pengumuman = '$id'")or die(mysqli_connect_error($conn));
    }else{
      $result = $conn->query("UPDATE pengumuman SET
      judul = '$jdl',
      isi_pengumuman = '$ktrg',
      tgl = '$tgl'
      WHERE id_pengumuman = '$id'")or die(mysqli_connect_error($conn));
    }

    if($result > 0) {
        echo "<script>
                document.location.href= '?page=agenda';  
              </script>";
    } else {
        echo "Gagal Edit data";
    }


}







?>