<?php 
include_once('koneksi.php');

$koneksi = 	mysqli_connect($server,$user, $password, $database) OR DIE ("Koneksi Gagal");
$id = $_GET['id'];
$query = "DELETE FROM populer WHERE id = '$id' ";
mysqli_query($koneksi, $query);
header("Location: adminTnmPop.php?v1=Berhasil Delete");
?>