<?php 
global $conn;
$conn = mysqli_connect("localhost", "root", "", "nagari");
if(!$conn) {
    die("koneksi gagal");
}

?>