<?
$conn = mysqli_connect("localhost", "root", "makanbakso123", "phpdasar");

function registrasi($data) {
	global $conn;

	$username = strtolower(stripslashes($data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);

	//usernam esama
	$result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

	if (mysqli_fetch_assoc($result)) {
		echo "<script>alert('username yang dipilih sudah terdaftar!')</script>";
		return false;
	}
	//cek konfirmasi password
	if ($password !== $password2) {
		echo "<script>alert('konfirmasi password tidak sesuai')</script>";
		return false;
	}

	//enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);

	//tambahkan user baru ke database
	mysqli_query($conn, "INSERT INTO user VALUES(0, '$username', '$password')");

	return mysqli_affected_rows($conn);
}

?>