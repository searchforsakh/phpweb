<?php
// Membuat koneksi ke database MySQL
// Urutan: Nama Host, Username DB, Password DB, Nama Database
$db = mysqli_connect("localhost", "root", "", "phpweb");

// Membuat fungsi bernama 'querry' untuk mempermudah pengambilan data
function querry()
{
    // Mengambil variabel $db dari luar agar bisa digunakan di dalam fungsi ini
    global $db;

    // Menjalankan perintah SQL (SELECT) ke database
    $result = mysqli_query($db, "SELECT * FROM film");

    // Menyiapkan wadah kosong (array) untuk menampung data-data dari database
    $rows = [];

    // Mengambil satu per satu baris data dari database
    // Lalu memasukkannya ke dalam wadah $rows
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    // Mengembalikan hasil akhir (wadah berisi semua data) ke si pemanggil fungsi
    return $rows;
}
