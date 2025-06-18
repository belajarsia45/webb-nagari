<?php 
session_start();
if(!isset($_SESSION['username'])){
  header('Location: login.php'); 
  exit;
}
?>
<div class="card">
<div class="card-header">
<a href="?page=tambahK" class="btn btn-success btn-sm"> Tambah Data Kajian</a>
</div>
<div class="card-body">
<table id="example1" class="table table-bordered table-striped">
<thead>
<tr>
    <th>No</th>
    <th>Kajian</th>
    <th>Penceramah</th>
    <th>Opsi</th>
</tr>
</thead>
<tbody>
    <?php 
    $result = $conn->query("SELECT * FROM kajian ORDER BY id_kajian DESC");
    foreach($result as $data):
    ?>
<tr>
    <td><?= ++$no; ?></td>
    <td><?= $data['nm_kajian']; ?></td>
    <td><?= $data['nm_ustad']; ?></td>
    <td>
        <a href="?page=editK&kode=<?= $data['id_kajian']; ?>" class="btn btn-warning btn-sm"><i class="far fa-edit"></i></a>&nbsp;
        <a href="?page=hapusK&kode=<?= $data['id_kajian']; ?>" class="btn btn-info btn-sm" onclick="return confirm('Yakin akan menghapus data ini?');"><i class="fas fa-trash"></i></a>
    </td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
</div>
</div>
