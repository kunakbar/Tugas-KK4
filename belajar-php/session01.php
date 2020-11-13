<?

// harus di baris pertama
// dicantumkan pada halaman yg memakai session

session_start();

$_SESSION["nama"] = "Achmad Solichin";
echo "<a href='session02.php'>Menuju ke halaman kedua</a>";

?>