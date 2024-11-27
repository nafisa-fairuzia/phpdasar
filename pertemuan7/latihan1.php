 <?php 
// $_GET
$siswa = [
	[	
		"nisn" => "043040023",
		"nama" => "Nafisa Fairuzia",
		"email" => "nafisa@gmail.com",
		"jurusan" => "Rekayasa Perangkat Lunak",
		"gambar" => "gb1.jpg"
	],
	[
		"nama" => "Amelya Fernanda Putri", 
		"nisn" => "033040001",
		"email" => "amelya@gmail.com",
		"jurusan" => "Agribisnis Tanaman Pangan dan Hortikultura",
		"gambar" => "gb2.jpg"
	]
];
?>
<!DOCTYPE html>
<html>
<head>
	<title>GET</title>
</head>
<body>
<h1>Daftar Siswa</h1>
<ul>
<?php foreach( $siswa as $s ) : ?>
	<li>
		<a href="latihan2.php?nama=<?= $s["nama"]; ?>&nisn=<?= $s["nisn"]; ?>&email=<?= $s["email"]; ?>&jurusan=<?= $s["jurusan"]; ?>&gambar=<?= $s["gambar"]; ?>"><?= $s["nama"]; ?></a>
	</li>
<?php endforeach; ?>
</ul>


</body>
</html>