<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>

<body>
    <!-- form di page ini -->
    <?php if (isset($_POST["submit"])) // menandakan tombol submit apakah sudah dipencet atau belum, jika sudah maka tampilkan perintah
    { ?>
        <h1>Selamat Datang, <?= $_POST["nama"] ?></h1>
    <?php } ?>
    <form action="" method="post">
        Masukkan Nama =
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">Kirim</button>
    </form>
    <br>
    <hr>
    <!-- form ke page lain -->
    <form action="latihanpost2.php" method="post"> <!-- atribut action(tujuan form) dan method wajib ada -->
        Masukkan Nama =
        <input type="text" name="nama"> <!-- atribut type dan name(key untuk array asosiative post) wajib ada supaya post nya jalan -->
        <br>
        <button type="submit" name="submit">Kirim!</button> <!-- button wajib memiliki type submit dan name submit -->
    </form>
</body>

</html>