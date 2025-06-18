<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Halaman Tambah Agenda | Pengumuman</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                <div class="form-group">
                    <label>Judul</label>
                    <input type="text" required="" class="form-control" name="jdl">                 
                  </div>
                <div class="form-group">
                    <label>Keterangan</label>
                    <textarea name="ktrg" class="form-control" cols="4" rows="5"></textarea>                 
                  </div>
                  <div class="form-group">
                    <label>Tanggal</label>
                    <input type="date" required="" class="form-control" name="tgl">
                  </div>
                  <div class="form-group">
                    <label>Foto</label>
                    <input type="file" name="foto" accept="image/*" class="form-control">  
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-success" name="saveA">Tambah</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
</section>
<?php 
if(isset($_POST['saveA'])) {
  
    $jdl = $_POST['jdl'];
    $tgl = $_POST['tgl'];
    $pengumuman = $_POST['ktrg'];

    $foto = $_FILES['foto']['name'];
    
    $dir = 'img/kegiatan/';
    $tmpfile = $_FILES['foto']['tmp_name'];

    move_uploaded_file($tmpfile, $dir.$foto);

    $result = $conn->query("INSERT INTO pengumuman(judul,isi_pengumuman,tgl,foto) VALUES ('$jdl','$pengumuman','$tgl','$foto')")or die(mysqli_connect_error($conn));

    if($result > 0) {
        echo "<script>
                document.location.href= '?page=agenda';  
              </script>";
    } else {
        echo "Gagal Menambahkan data";
    }


}



?>