<?php
// SUPERGLOBALS
// variabel array global milik PHP yang dapat diakses dari mana saja (dalam fungsi, kelas, atau file)
// bentuknya adalah array associative

echo $_SERVER["HTTP_SEC_CH_UA"];
echo "<br>";
// get
var_dump($_GET);
echo "<br>";

$biodatas = [
    [
        "film" => "Ali",
        "rilis" => "2001",
        "pemeran" => "Will Smith",
        "rating" => "8.9",
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
    <title>GET</title>
</head>
<!-- metode request get adalah metode pengiriman data melalui url dan data tsb bisa ditangkap oleh variabel superglobal get -->

<body>
    <h1>Daftar Film</h1>
    <ol>
        <?php foreach ($biodatas as $biodata) : ?>
            <li>
                <a href="latihanget.php?film=<?php echo $biodata["film"] ?>&rilis=<?php echo $biodata["rilis"] ?>&pemeran=<?php echo $biodata["pemeran"] ?>&rating=<?php echo $biodata["rating"] ?>&gambar=<?php echo $biodata["gambar"] ?>">Nama Film = <?php echo $biodata["film"] ?></a>
            </li>
        <?php endforeach ?>
    </ol>
</body>

</html>