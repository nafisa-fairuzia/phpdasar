<?php
require 'functions.php';

// ambil data di URL
$id = $_GET["id"];

// query data siswa berdasarkan id
$row = query("SELECT * FROM siswa WHERE id = $id")[0];


// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
	
	// cek apakah data berhasil diubah atau tidak
	if( ubah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil diubah!');
				document.location.href = 'index.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal diubah!');
				document.location.href = 'index.php';
			</script>
		";
	}


}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ubah data Siswa</title>
</head>
<body>
	<h1>Ubah data Siswa</h1>

	<form action="" method="post">
		<input type="hidden" name="id" value="<?= $row["id"]; ?>">
		<ul>
			<li>
				<label for="nisn">NISN : </label>
				<input type="text" name="nisn" id="nisn" required value="<?= $row["nisn"]; ?>">
			</li>
			<li>
				<label for="nama">Nama : </label>
				<input type="text" name="nama" id="nama" value="<?= $row["nama"]; ?>">
			</li>
			<li>
				<label for="email">Email :</label>
				<input type="text" name="email" id="email" value="<?= $row["email"]; ?>">
			</li>
			<li>
				<label for="jurusan">Jurusan :</label>
				<input type="text" name="jurusan" id="jurusan" value="<?= $row["jurusan"]; ?>">
			</li>
			<li>
				<label for="gambar">Gambar :</label>
				<input type="text" name="gambar" id="gambar" value="<?= $row["gambar"]; ?>">
			</li>
			<li>
				<button type="submit" name="submit">Ubah Data!</button>
			</li>
		</ul>

	</form>




</body>
</html>