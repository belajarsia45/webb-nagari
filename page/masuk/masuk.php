<?php 
session_start();
if(!isset($_SESSION['username'])){
  header('Location: login.php'); 
  exit;
}
?>
<div class="card">
<div class="card-header">
<a href="?page=tambahM" class="btn btn-success btn-sm">Tambah Data Kas Masuk</a>
</div>
<div class="card-body">
<table id="example1" class="table table-bordered table-striped">
<thead>
<tr>
    <th width="40">No</th>
    <th>nama</th>
    <th>Keterangan</th>
    <th>Tanggal</th>
    <th>Jumlah</th>
    <th>Opsi</th>
</tr>
</thead>
<tbody>
    <?php 
    $result = $conn->query("SELECT * FROM kas_masuk ORDER BY tanggal DESC");
    foreach($result as $data):
    ?>
<tr>
    <td><?= ++$no; ?></td>
    <td><?= $data['nama']; ?></td>
    <td><?= $data['keterangan']; ?></td>
    <td><?= date("d/M/Y", strtotime($data['tanggal'])); ?></td>
    <td>Rp.<?= number_format($data['masuk']); ?></td>
    <td>
        <a href="?page=editM&kode=<?= $data['id_kasmasuk']; ?>" class="btn btn-warning btn-sm"><i class="far fa-edit"></i></a>&nbsp;
        <a href="?page=hapusM&kode=<?= $data['id_kasmasuk']; ?>" class="btn btn-info btn-sm" onclick="return confirm('Yakin akan menghapus data ini?');"><i class="fas fa-trash"></i></a>
    </td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
</div>
</div>
