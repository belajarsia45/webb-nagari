<?php 
$id = $_GET['kode'];

$result = $conn->query("DELETE FROM data_pendidikan WHERE id_golongan = '$id'");

if($result > 0) {
    echo "<script>
            document.location.href= '?page=penduduk';  
          </script>";
} else {
    echo "Gagal hapus data";
}

?>