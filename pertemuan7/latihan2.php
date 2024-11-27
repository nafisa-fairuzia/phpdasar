<?php 
// cek apakah tidak ada data di $_GET
if( !isset($_GET["nama"]) ||
	!isset($_GET["nisn"]) || 
	!isset($_GET["email"]) || 
	!isset($_GET["jurusan"]) ||
	!isset($_GET["gambar"])) {
	// redirect
	header("Location: latihan1.php");
	exit;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Detail Siswa</title>
</head>
<body>

<ul>
	<li><img src="img/<?= $_GET["gambar"]; ?>" width="150px"></li>
	<li><?= $_GET["nama"]; ?></li>
	<li><?= $_GET["nisn"]; ?></li>
	<li><?= $_GET["email"]; ?></li>
	<li><?= $_GET["jurusan"]; ?></li>
</ul>

<a href="latihan1.php">Kembali ke daftar Siswa</a>

</body>
</html>