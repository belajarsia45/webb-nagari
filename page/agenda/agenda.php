<?php 
session_start();
if(!isset($_SESSION['username'])){
  header('Location: login.php'); 
  exit;
}
?>
<div class="card">
<div class="card-header">
<a href="?page=tambahA" class="btn btn-success btn-sm">Tambah Data Agenda</a>
</div>
<div class="card-body">
<table id="example1" class="table table-bordered table-striped">
<thead>
<tr>
    <th width="40">No</th>
    <th>Judul</th>
    <th>Tanggal</th>
    <th>Keterangan</th>
    <th>Foto</th>
    <th>Aksi</th>
</tr>
</thead>
<tbody>
    <?php 
    $result = $conn->query("SELECT * FROM pengumuman ORDER BY id_pengumuman DESC");
    foreach($result as $data):
    ?>
<tr>
    <td><?= ++$no; ?></td>
    <td><?= $data['judul']; ?></td>
    <td><?= date("d/M/Y", strtotime($data['tgl'])); ?></td>
    <td><?= substr($data['isi_pengumuman'],0,50); ?></td>
    <td> <img src="img/kegiatan/<?= $data['foto']; ?>" width="90"></td>
    <td>
        <a href="?page=editA&kode=<?= $data['id_pengumuman']; ?>" class="btn btn-warning btn-sm"><i class="far fa-edit"></i></a>&nbsp;
        <a href="?page=hapusA&kode=<?= $data['id_pengumuman']; ?>" class="btn btn-info btn-sm" onclick="return confirm('Yakin akan menghapus data ini?');"><i class="fas fa-trash"></i></a>
    </td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
</div>
</div>
