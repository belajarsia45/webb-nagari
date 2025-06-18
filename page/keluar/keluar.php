<?php 
session_start();
if(!isset($_SESSION['username'])){
  header('Location: login.php'); 
  exit;
}
?>
<div class="card">
<div class="card-header">
<a href="?page=tambahKa" class="btn btn-success btn-sm">Tambah Data Kas Keluar</a>
</div>
<div class="card-body">
<table id="example1" class="table table-bordered table-striped">
<thead>
<tr>
    <th width="40">No</th>
    <th>Keterangan</th>
    <th>Tanggal</th>
    <th>Jumlah</th>
    <th>Opsi</th>
</tr>
</thead>
<tbody>
    <?php 
    $result = $conn->query("SELECT * FROM kas_keluar ORDER BY tanggal_k DESC");
    foreach($result as $data):
    ?>
<tr>
    <td><?= ++$no; ?></td>
    <td><?= $data['keterangan_k']; ?></td>
    <td><?= date("d/M/Y", strtotime($data['tanggal_k'])) ?></td>
    <td>Rp.<?= number_format($data['keluar']); ?></td>
    <td>
        <a href="?page=editKa&kode=<?= $data['id_kaskeluar']; ?>" class="btn btn-warning btn-sm"><i class="far fa-edit"></i></a>&nbsp;
        <a href="?page=hapusKa&kode=<?= $data['id_kaskeluar']; ?>" class="btn btn-info btn-sm" onclick="return confirm('Yakin akan menghapus data ini?');"><i class="fas fa-trash"></i></a>
    </td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
</div>
</div>
