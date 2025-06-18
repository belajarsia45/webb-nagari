<?php 
$id = $_GET['kode'];

$result = $conn->query("DELETE FROM kajian WHERE id_kajian = '$id'");

if($result > 0) {
    echo "<script>
            document.location.href= '?page=kajian';  
          </script>";
} else {
    echo "Gagal hapus data";
}

?>