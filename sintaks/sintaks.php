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
// + - * / %
$a = 5;
$b = 4;

// penggabung string
// , .

// aoperator ssignment
// =, +=, -=, *=, /=, %=, .=
$x = 20;
$x = +10;
echo $x;
echo "\n";

$nama1 = "Sakha";
$nama1 .= " "; // mempermudah menggabungkan tipe data tanpa membuat variabel baru
$nama1 .= "Pratama";
$nama1 .= 1;
echo $nama1;
echo "\n";

// operator perbandingan
// < > <= >= ==
var_dump(10 == "10"); // akan true, karena == tidak mengecek tipe datanya, hanya mengecek nilainya 
var_dump(10 < 9);
var_dump(10 >= 9);

// operator identitas (disarankan menggunakan identitas jika ingin mengecek tipe data)
// === !==
var_dump(10 === "10"); // akan false, karena === mengecek tipe datanya bukan nilainya

// operator logika 
// && || !
// && = harus dua duanya benar
// || = jika 1 benar, maka hasilnya benar
$x = 10;
var_dump($x < 20 || $x % 2 == 0);
var_dump($x < 9 && $x % 2 == 0);

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
    <?php
    echo "<p>ini adalah paragraph</p>";
    echo "Hasil perkalian " . $a . " & ", $b, " Adalah " . $a * $b; ?> <!-- html didalam php -->
</body>

</html>