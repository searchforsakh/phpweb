<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- metode request get adalah metode pengiriman data melalui url dan data tsb bisa ditangkap oleh variabel superglobal get -->
    <ul>
        <li><img src="img/<?php echo $_GET["gambar"] ?>" alt=""></li>
        <li>Nama Film: <?php echo $_GET["film"] ?></li>
        <li>Tahun Rilis: <?php echo $_GET["rilis"] ?></li>
        <li>Nama Pemeran: <?php echo $_GET["pemeran"] ?></li>
        <li>Rating: <?php echo $_GET["rating"] ?></li>
    </ul>
    <a href="superglobals.php">Kembali ke halaman utama</a>
</body>

</html>