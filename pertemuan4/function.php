<?php
function salam($waktu = "datang", $nama = "nafisa")
{
    return "selamat $waktu, $nama!";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>latihan function</title>
</head>

<body>
    <h1><?= salam(); ?></h1>
</body>

</html>