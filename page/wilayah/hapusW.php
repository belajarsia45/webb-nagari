<?php 
$id = $_GET['kode'];

$result = $conn->query("DELETE FROM data_wilayah WHERE id_jorong = '$id'");

if($result > 0) {
    echo "<script>
            document.location.href= '?page=wilayah';  
          </script>";
} else {
    echo "Gagal hapus data";
}

?>