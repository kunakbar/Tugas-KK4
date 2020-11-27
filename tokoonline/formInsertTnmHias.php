<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Form Insert Tanaman Hias</title>
</head>
<body>
	<form action="prosesInsertTnmHias.php" method="post">
		<label>Nama tanaman</label>
		<div><input type="text" name="input-nama"></div>
		<label>Harga</label>
		<div><input type="text" name="input-harga"></div>
		<label>Stok</label>
		<div><input type="text" name="input-stok"></div>
		<div id="div_submit"><input type="submit" id="submit" value="Tambah" name="tombol-insert"></div>
	</form>
</body>
</html>
