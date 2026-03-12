<?php
// halaman index untuk seorang admin

// langkah2
// 1. Koneksi ke database 
$db = mysqli_connect("localhost", "root", "", "phpweb"); // "hostname", "username", "password", "database"

// 2. ambil data dari table film/querry data
$result = mysqli_query($db, "SELECT * FROM film"); // koneksi ke database, "sintaks mysql"
if ($result == false) { // untuk mengecek apakah sintaks yg kita tulis saat menghubungkan ke table itu benar
    mysqli_error($db);
};

// 3. ambil data (fetch) film dari object result
// mysqli_fetch_row() = mengembalikkan array dgn indeks numerik
// mysqli_fetch_assoc() = mengembalikan array dgn indeks assosiative berdasarkan field tabel
// mysqli_fetch_array() = mengembalikan array numerik dan assosiative (tidak disarankan karena datanya bisa double)
// mysqli_fetch_object() = mengembalikan object (tidak mempunyai key numerik dan assosiative)
// while ($film = mysqli_fetch_assoc($result)) {
//     var_dump($film);
// };

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Film</th>
            <th>Rilis</th>
            <th>Genre</th>
            <th>Pemeran</th>
        </tr>

        <?php $i = 1 ?>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?= $i ?></td>
                <td>
                    <a href="">Ubah</a> |
                    <a href="">Hapus</a>
                </td>
                <td><img src="img/<?= $row["gambar"] ?>" width="50" alt=""></td>
                <td><?= $row["film"] ?></td>
                <td><?= $row["rilis"] ?></td>
                <td><?= $row["genre"] ?></td>
                <td><?= $row["pemeran"] ?></td>
            </tr>
            <?php $i++ ?>
        <?php endwhile ?>
    </table>
</body>

</html>