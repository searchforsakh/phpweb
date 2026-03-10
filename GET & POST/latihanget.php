<?php
// cek apakah tidak ada data di $_GET
if (
    // !isset($_GET["gambar"]) artinya: "Apakah data 'gambar' TIDAK ADA?"
    // Simbol || (OR) artinya: "Atau".
    // Logikanya: Jika (Gambar tidak ada) ATAU (Judul Film tidak ada) ATAU (Tahun Rilis tidak ada), dan seterusnya... maka kondisinya terpenuhi (dianggap bermasalah).

    // Isi di dalam kurung kurawal { ... } HANYA akan jalan jika hasil akhir di dalam kurung if (...) bernilai TRUE (Benar).
    // isset artinya: "Apakah ada?" (Hasilnya TRUE jika ada).
    // !isset artinya: "Apakah TIDAK ada?" (Hasilnya TRUE jika datanya hilang).

    // kondisi if ini mengharuskan user memasukkan semua data yang diperlukan (gambar, film, rilis, pemeran, rating) agar bisa melihat detail film. Jika salah satu data tidak ada, maka user akan diarahkan kembali ke halaman utama (superglobals.php) untuk memilih film lagi.
    !isset($_GET["gambar"]) ||
    !isset($_GET["film"]) ||
    !isset($_GET["rilis"]) ||
    !isset($_GET["pemeran"]) ||
    !isset($_GET["rating"])
) {
    header("Location: superglobals.php"); // redirect ke halaman superglobals.php jika salah satu data tidak ada
    exit; // exit - fungsi untuk menghentikan eksekusi script selanjutnya
}

?>


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