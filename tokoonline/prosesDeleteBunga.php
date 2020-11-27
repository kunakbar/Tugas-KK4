<?php 
include_once('koneksi.php');

$koneksi = 	mysqli_connect($server,$user, $password, $database) OR DIE ("Koneksi Gagal");
$id = $_GET['id'];
$query = "DELETE FROM bunga WHERE id = '$id' ";
mysqli_query($koneksi, $query);
header("Location: adminBunga.php?v1=Berhasil Delete");
?>
