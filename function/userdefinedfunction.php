<?php 
function salam($waktu = "Datang", $nama = "Admin"){ // membuat function dengan parameter waktu dan nama yang memiliki nilai default
    return "Selamat $waktu, $nama"; // mengembalikan nilai berupa string dengan format tertentu
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
    <!-- urutannya tidak boleh dibalik, karena akan mempengaruhi hasilnya -->
    <?php echo "<h1>". salam("Pagi", "Budi"); ?> 
</body>
</html>