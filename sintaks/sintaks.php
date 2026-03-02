<?php

// standar output
// echo, print, print_r
// var_dump = untuk mengecek tipe data dan ukuruannya berapa

// penulisana sintaks php
// 1. php didalam html 
// 2. html didalam php

// variable dan tipe data
// variabel = tidak boleh diawali dengan angka, tapi boleh mengandung angka *disarankan menggunakan petik 2
$nama = "Ole Romeny";

// operator aritmatika

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan PHP</title>
</head>
<body>
    <h1>Selamat datang <?php print $nama ?></h1> <!-- php didalam html -->
    <?php echo "<p>ini adalah paragraph</p>" ?> <!-- html didalam php -->
</body>
</html>