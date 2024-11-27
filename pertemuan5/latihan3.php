<?php
$siswa = [
    ["Nafisa Fairuzia", "04738925", "Rekayasa Perangkat Lunak", "nafisa@gmail.com"],
    ["Putri Karsilia", "02378216", "Teknik Jaringan dan Telekomunikasi", "putrikna@gmail.com"],
    ["Amelya Fernanda", "03754399", "Agribisnis Tanaman Pangan dan Hortikultura", "amelya@gmail.com"]
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
            <li>Nama : <?= $s[0]; ?></li>
            <li>NISN : <?= $s[1]; ?></li>
            <li>Jurusan : <?= $s[2]; ?></li>
            <li>Email : <?= $s[3]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>