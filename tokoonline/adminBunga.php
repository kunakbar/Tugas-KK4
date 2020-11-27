<?php
	include_once("koneksi.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Halaman Admin Tanaman Bunga</title>
</head>
<body>
	<!-- tabel -->
	<table border="1">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Harga</th>
			<th>Stok</th>
			<th colspan="2">Action</th>
		</tr>
		<?php
		$koneksi = 	mysqli_connect($server,$user, $password, $database) OR DIE ("Koneksi Gagal");
		$query = mysqli_query($koneksi, "SELECT * FROM bunga");

		// memasukan isi query ke var nama $row dg format array
		$no = 1;
		while ($row = mysqli_fetch_array($query)) {
			echo "<tr>";
			echo "<td> $no </td>";
			echo "<td> $row[nama] </td>";
			echo "<td> $row[harga] </td>";
			echo "<td> $row[stok] </td>";
			echo "<td><a href='formEditBunga.php?id=$row[id]';> Edit </a></td>";
			echo "<td><a href='prosesDeleteBunga.php?id=$row[id]';> Delete </a></td>";
			echo "</tr>";
			$no++;
		}
		?>
	</table>
</body>
</html>
