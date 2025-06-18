<?php 
session_start();
if(!isset($_SESSION['username'])){
  header('Location: login.php'); 
  exit;
}
?>
<div class="card">
<div class="card-header">
<a href="?page=tambahW" class="btn btn-success btn-sm">Tambah Data Wilayah</a>
</div>
<div class="card-body">
<table id="example1" class="table table-bordered table-striped">
<thead>
<tr>
            <th>NO</th>
            <th>Wilayah/Jorong</th>
            <th>KK</th>
            <th>L</th>
            <th>P</th>
            <th>L + P</th>
            <th>Aksi</th>
        </tr>
</thead>
<tbody>
    <?php 
    $result = $conn->query("SELECT * FROM data_wilayah ORDER BY id_jorong DESC");
    foreach($result as $data):
    ?>
<tr>
    <td><?= ++$no; ?></td>
    <td><?= $data['wilayah_jorong']; ?></td>
    <td><?= $data['kk']; ?></td>
    <td><?= $data['l']; ?></td>
    <td><?= $data['p']; ?></td>
    <td><?= $data['l_p']; ?></td>
    <td>
        <a href="?page=editW&kode=<?= $data['id_jorong']; ?>" class="btn btn-warning btn-sm"><i class="far fa-edit"></i></a>&nbsp;
        <a href="?page=hapusW&kode=<?= $data['id_jorong']; ?>" class="btn btn-info btn-sm" onclick="return confirm('Yakin akan menghapus data ini?');"><i class="fas fa-trash"></i></a>
    </td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
</div>
</div>
