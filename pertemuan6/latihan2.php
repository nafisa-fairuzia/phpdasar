<?php
$siswa = [
    [
        "nisn" => "04738925",
        "nama" => "Nafisa Fairuzia",
        "email" => "nafisa@gmail.com",
        "jurusan" => "Rekayasa Perangkat Lunak",
        "gambar" => "gb1.jpg"
    ],
    [
        "nisn" => "03754399",
        "nama" => "Amelya Fernanda",
        "email" => "amelya@gmail.com",
        "jurusan" => "Agribisnis Tanaman Pangan dan Hortikultura",
        "gambar" => "gb2.jpg"
    ]
];
?>

<!DOCTYPE html>
<html>

<head>
    <title>Daftar Siswa</title>
</head>

<body>
    <h1>Daftar Siswa</h1>

    <?php foreach ($siswa as $s): ?>
        <ul>
            <li>
                <img src="img/<?= $s["gambar"]; ?>" width="150px">
            </li>
            <li>Nama : <?= $s["nama"]; ?></li>
            <li>NISN : <?= $s["nisn"]; ?></li>
            <li>Jurusan : <?= $s["jurusan"]; ?></li>
            <li>Email : <?= $s["email"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>