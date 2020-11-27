<?php
	include_once("koneksi.php");
	$koneksi = 	mysqli_connect($server,$user, $password, $database) OR DIE ("Koneksi Gagal");
	$id = $_GET['id'];
	$query = mysqli_query($koneksi, "SELECT * FROM populer WHERE id = '$id' ");
	$row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
	<title>Form Edit Tanaman Populer</title>
</head>
<body>
	<form action="prosesEditTnmPop.php?id=<?php echo $id; ?>" method="post">
		<label>Nama tanaman</label>
		<div><input type="text" name="input-nama" value="<?php echo $row['nama']?>"></div>
		<label>Harga</label>
		<div><input type="text" name="input-harga" value="<?php echo $row['harga']?>"></div>
		<label>Stok</label>
		<div><input type="text" name="input-stok" value="<?php echo $row['stok']?>"></div>
		<div id="div_submit"><input type="submit" id="submit" value="Update" name="tombol-update"></div>
	</form>
</body>
</html>