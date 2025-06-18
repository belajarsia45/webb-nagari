<?php 
session_start();
if(!isset($_SESSION['username'])){
  header('Location: login.php'); 
  exit;
}
?>
<div class="card">
<div class="card-header">
<a href="?page=tambahP" class="btn btn-success btn-sm">Tambah Data Pendidikan</a>
</div>
<div class="card-body">
<table id="example1" class="table table-bordered table-striped">
<thead>
        <tr>
            <th>No</th>
            <th>Kelompok</th>
            <th>Laki-Laki</th>
            <th>Perempuan</th>
            <th>Jumlah</th>
        </tr>
</thead>
<tbody>
    <?php 
    $result = $conn->query("SELECT * FROM data_pendidikan ORDER BY id_golongan DESC");
    foreach($result as $data):
    ?>
<tr>
    <td><?= ++$no; ?></td>
    <td><?= $data['kelompok']; ?></td>
    <td><?= $data['laki_laki']; ?></td>
    <td><?= $data['perempuan']; ?></td>
    <td><?= $data['jumlah']; ?></td>
    <td>
        <a href="?page=editP&kode=<?= $data['id_golongan']; ?>" class="btn btn-warning btn-sm"><i class="far fa-edit"></i></a>&nbsp;
        <a href="?page=hapusP&kode=<?= $data['id_golongan']; ?>" class="btn btn-info btn-sm" onclick="return confirm('Yakin akan menghapus data ini?');"><i class="fas fa-trash"></i></a>
    </td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
</div>
</div>
