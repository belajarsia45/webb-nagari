<?php 
$id = $_GET['kode'];

$result = $conn->query("DELETE FROM kas_masuk WHERE id_kasmasuk = '$id'");

if($result > 0) {
    echo "<script>
            document.location.href= '?page=masuk';  
          </script>";
} else {
    echo "Gagal hapus data";
}

?>