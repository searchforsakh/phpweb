<?php
// date menampilkan tanggal dengan format tertentu, yang bisa dimanipulasi oleh function lain
// format untuk menampilkan tanggal
// d = tanggal dengan angka 2 digit (01-31)
// D = hari dengan format singkat (Mon-Sun)         
// l = hari dengan format lengkap (Monday-Sunday)
// m = bulan dengan angka 2 digit (01-12)   
// M = bulan dengan format singkat (Jan-Dec)
// F = bulan dengan format lengkap (January-December)           
// Y = tahun dengan angka 4 digit (2020)
// y = tahun dengan angka 2 digit (20)
echo date("l, d-M-Y");
print "<br>";

// time
// time tidak memerlukan parameter didalamnya, relative terhadap detik saat ini
echo time(); // menampilkan detik dari 1 jan 1970 sampai hari ini
print "<br>";

// menggabungkan function, menentukan hari ke 31 setelah hari ini
echo date("l, d-M-Y",time()+60*60*24*31); // detik dihari itu diubah oleh date menjadi hari apa
print "<br>";

// mktime
// membuat sendiri detik dari 1 jan 1970 sampai ke detik yang diinginkan
mktime(0,0,0,0,0,0); // terdiri dari 6 parameter
// jam, menit, detik, bulan, tanggal, tahun

// menentukan hari lahir
echo date("l", mktime(0,0,0,11,6,2006)); // detik dihari itu diubah oleh date menjadi hari apa
print "<br>";


strtotime("10:30pm April 15 2020"); // mengubah string menjadi detik
echo date("l", strtotime("April 15 2020")); // detik dihari itu, diubah oleh date menjadi hari apa
print "<br>";
?>