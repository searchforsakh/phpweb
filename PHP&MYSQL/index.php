<?php
// Memanggil file functions.php agar fungsi-fungsi di dalamnya bisa digunakan di sini
require 'functions.php';

// Menjalankan fungsi querry untuk mengambil data dari tabel 'film'
// Hasilnya disimpan ke dalam variabel $film (berupa array)
$film = querry();

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
        <?php foreach ($film as $row) : ?>
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
        <?php endforeach ?>
    </table>
</body>

</html>