<?php
if (isset($_POST["submit"])) {
    if ($_POST["username"] == "admin" && $_POST["password"] == 123) {
        header("Location: admin.php"); // header tidak dapat membawa isi dari variabel post ke admin.php
    } else {
        $error = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>

<body>
    <h1>Login Page</h1>
    <?php if (isset($error)) { ?>
        <p style="color: red;">Password dan username salah</p>
    <?php } ?>
    <ul>
        <form action="" method="post"> <!-- action tidak di isi karena akan ada proses pengecekan if yang menggunakan header sebagai function redirect ke admin.php -->
            <li>
                <label for="username">Username: </label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">password: </label>
                <input type="password" name="password" id="password">
            </li>
            <li><button type="submit" name="submit">Kirim</button></li>

        </form>
    </ul>
</body>

</html>