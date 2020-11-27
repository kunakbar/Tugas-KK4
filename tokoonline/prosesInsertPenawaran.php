<?php 
// 1. Panggil file koneksi.php
include_once('koneksi.php');

// 2. Buat var untuk menampung data form
$nama = $_POST['input-nama'];
$harga = $_POST['input-harga'];
$stok = $_POST['input-stok'];

// koneksi db
$koneksi = 	mysqli_connect($server,$user, $password, $database) OR DIE ("Koneksi Gagal");

// 3. Memasukan data ke db
$query = "INSERT INTO penawaran (nama, harga, stok) VALUES ('$nama', '$harga', '$stok')";
mysqli_query($koneksi, $query);

// berhasil jika tampil berpindah lokasi file, disertai mengirim value v1
header("Location: formInsertPenawaran.php?v1=Berhasil Input data");
// header adalah fungsi memasukan nilai pada URL
?>
