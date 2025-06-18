<?php 
$id = $_GET['kode'];
$query = $conn->query("SELECT foto FROM wisata WHERE id_sapra='$id'");
$foto = mysqli_fetch_assoc($query);
$hapus = 'img nagari/wisata/'.$foto['foto'];
unlink($hapus);


$result = $conn->query("DELETE FROM wisata WHERE id_sapra = '$id'");

if($result > 0) {
    echo "<script>
            document.location.href= '?page=wisata';  
          </script>";
} else {
    echo "Gagal hapus data";
}

?>