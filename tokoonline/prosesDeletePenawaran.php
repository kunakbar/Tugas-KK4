<?php 
include_once('koneksi.php');

$koneksi = 	mysqli_connect($server,$user, $password, $database) OR DIE ("Koneksi Gagal");
$id = $_GET['id'];
$query = "DELETE FROM penawaran WHERE id = '$id' ";
mysqli_query($koneksi, $query);
header("Location: adminPenawaran.php?v1=Berhasil Delete");
?>
