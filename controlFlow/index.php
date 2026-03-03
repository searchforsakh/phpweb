<?php 
// pengulangan
// for, while, do while, foreach(pengulangan khusus array)

// for
for($x = 0; $x < 5; $x++){ // (inisialisasi;kondisi;increment/decrement)
    echo "Sakha Pratama","<br>", "\n"; // "\n" newline didalam web, hanya berperan sebagai spasi, bukan sebagai enter
    // web menampilkan enter jika sintaksnya br
    }
echo "<br>";

// while
$x = 1;
while($x <= 5){ // sama seperti for, namun hanya memerlukan kondisi saja
echo "Sakha Pratama <br>";
$x++;
}
echo "<br>";

// do while
// sama seperti while, tetapi do while akan menjalankan kode terlebih dahulu, baru akan melihat kondisinya
$a = 1;
do {
    echo "Hi Sakha!<br>";
    $a++;
    } while($a <= 5);
?>