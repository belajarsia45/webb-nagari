<?php 
$id = $_GET['kode'];

$result = $conn->query("DELETE FROM kas_keluar WHERE id_kaskeluar= '$id'");

if($result > 0) {
    echo "<script>
            document.location.href= '?page=keluar';  
          </script>";
} else {
    echo "Gagal hapus data";
}

?>