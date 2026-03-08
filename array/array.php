<?php
// array = variabel yang dapat menyimpan banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda
// pasangan antara key dan value
// key-nya adalah index yang dimulai dari 0

$hari = ["senin", "selasa", "rabu"];
$bulan = ["Januari", "februari", "maret"];

// menampilkan array
var_dump($hari);
echo "<br>";
print_r($bulan);

// menampilkan salah satu elemen pada array, dengan cara memanggil indexnya
echo "<br>";
echo "hari ini adalah hari ", $hari[0];
echo "<br>";
echo "bulan ini adalah bulan ", $bulan[1];

// menambahkan elemen baru pada array
$hari[] = "kamis";
$bulan[] = "april";
echo "<br>";
print_r($hari);
echo "<br>";
print_r($bulan);
