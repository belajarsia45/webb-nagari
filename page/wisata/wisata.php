<?php 
session_start();
if(!isset($_SESSION['username'])){
  header('Location: login.php'); 
  exit;
}
?>
<div class="card">
<div class="card-header">
<a href="?page=tambahWs" class="btn btn-success btn-sm">Tambah Data Wisata</a>
</div>
<div class="card-body">
<table id="example1" class="table table-bordered table-striped">
<thead>
<tr>
    <th>No</th>
    <th>Wisata | Nagari</th>
    <th>Foto</th>
    <th>Opsi</th>
</tr>
</thead>
<tbody>
    <?php 
    $result = $conn->query("SELECT * FROM wisata ORDER BY id_sapra DESC");
    foreach($result as $data):
    ?>
<tr>
    <td><?= ++$no; ?></td>
    <td><?= $data['nama_sapra']; ?></td>
    <td><img src="img nagari/wisata/<?= $data['foto']; ?>" width="100"></td>
    <td>
        <a href="?page=editWs&kode=<?= $data['id_sapra']; ?>" class="btn btn-warning btn-sm"><i class="far fa-edit"></i></a>&nbsp;
        <a href="?page=hapusWs&kode=<?= $data['id_sapra']; ?>" class="btn btn-info btn-sm" onclick="return confirm('Yakin akan menghapus data ini?');"><i class="fas fa-trash"></i></a>
    </td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
</div>
</div>
