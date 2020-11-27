<?php 
include_once('koneksi.php');

$nama = $_POST['input-nama'];
$harga = $_POST['input-harga'];
$stok = $_POST['input-stok'];

$id = $_GET['id'];

$koneksi = 	mysqli_connect($server,$user, $password, $database) OR DIE ("Koneksi Gagal");
$query = "UPDATE penawaran SET nama='$nama', harga='$harga', stok='$stok' WHERE id='$id'";
mysqli_query($koneksi, $query);
header("Location: adminPenawaran.php?v1=Berhasil Update");
?>
