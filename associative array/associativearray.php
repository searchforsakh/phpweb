<?php
// Pendataan Daftar film

$biodatas = [
    [
        "film" => "Ali",
        "rilis" => "2001",
        "pemeran" => "Will Smith",
        "rating" => "8.8",
        "genre" => "Documentary",
        "gambar" => "ali.jpg"
    ],
    [
        "film" => "Queen",
        "rilis" => "2019",
        "pemeran" => "Rami Malek",
        "rating" => "8.8",
        "genre" => "Documentary",
        "gambar" => "queen.png"
    ],
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Film</title>
</head>

<body>
    <h1>DAFTAR FILM</h1>
    <?php foreach ($biodatas as $biodata) { ?>
        <ol type="1">
            <li><img src="img/<?php echo $biodata["gambar"] ?>" alt=""></li>
            <li>Nama Film: <?php echo $biodata["film"] ?></li>
            <li>Genre: <?php echo $biodata["genre"] ?></li>
            <li>Tahun Rilis: <?php echo $biodata["rilis"] ?></li>
            <li>Pemeran: <?php echo $biodata["pemeran"] ?></li>
            <li>Rating IMDB: <?php echo $biodata["rating"] ?></li>
        </ol>
    <?php } ?>
</body>

</html>