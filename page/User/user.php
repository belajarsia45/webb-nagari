<?php 
session_start();
if(!isset($_SESSION['username'])){
  header('Location: login.php'); 
  exit;
}
?>

<div class="card">
  <div class="card-header">
    <a href="?page=tambahU" class="btn btn-success btn-sm">Tambah Data Penduduk</a>
  </div>
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>Foto</th>
          <th>Nama</th>
          <th>Jorong</th>
          <th>Alamat</th>
          <th>Opsi</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        $result = $conn->query("SELECT * FROM jamaah ORDER BY id_jamaah DESC");
        foreach($result as $data):
        ?>
        <tr>
          <td><?= ++$no; ?></td>
          <td><img src="img/<?= $data['foto']; ?>" width="100"></td>
          <td><?= $data['nama_jamaah']; ?></td>
          <td><?= $data['organisasi']; ?></td>
          <td><?= $data['jabatan']; ?></td>
          <td>
            <a href="?page=editU&kode=<?= $data['id_jamaah']; ?>" class="btn btn-warning btn-sm"><i class="far fa-edit"></i></a>&nbsp;
            <a href="?page=hapusU&kode=<?= $data['id_jamaah']; ?>" class="btn btn-info btn-sm" onclick="return confirm('Yakin akan menghapus data ini?');"><i class="fas fa-trash"></i></a>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>
