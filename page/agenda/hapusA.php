<?php 
$id = $_GET['kode'];
$query = $conn->query("SELECT foto FROM pengumuman WHERE id_pengumuman='$id'");
$foto = mysqli_fetch_assoc($query);
$hapus = 'img/kegiatan/'.$foto['foto'];
unlink($hapus);

$result = $conn->query("DELETE FROM pengumuman WHERE id_pengumuman = '$id'");

if($result > 0) {
    echo "<script>
            document.location.href= '?page=agenda';  
          </script>";
} else {
    echo "Gagal hapus data";
}

?>