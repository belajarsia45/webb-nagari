<?php 
$id = $_GET['kode'];
$result = $conn->query("SELECT * FROM kajian WHERE id_kajian = '$id'");
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
                <h3 class="card-title">Halaman Edit Data Kajian</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="POST" >
                <div class="card-body">
                  <div class="form-group">
                    <label>Kajian</label>
                    <input type="text" class="form-control" name="kajian" value="<?= $t['nm_kajian']; ?>">
                  </div>
                  <div class="form-group">
                    <label>Penceramah</label>
                    <input type="text" class="form-control" name="penceramah" value="<?= $t['nm_ustad']; ?>">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-success" name="updatek">Edit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
</section>
<?php 
if(isset($_POST['updatek'])) {
 
    $kajian = $_POST['kajian'];
    $penceramah = $_POST['penceramah'];

    $result = $conn->query("UPDATE kajian SET
    nm_kajian = '$kajian',
    nm_ustad = '$penceramah'
    WHERE id_kajian = '$id'")or die(mysqli_connect_error($conn));

    if($result > 0) {
        echo "<script>
                document.location.href= '?page=kajian';  
              </script>";
    } else {
        echo "Gagal Edit data";
    }


}



?>