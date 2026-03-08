<?php
// database array 
$students = [
    ["Sakha Pratama", 20250801037, "Teknik Informatika", "skhpratama13@gmail.com"],
    ["Saha Pratama", 20250801037, "Teknik Informatika", "skhpratama13@gmail.com"],
    ["Sakha Pratama", 20250801037, "Teknik Informatika", "skhpratama13@gmail.com"]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach</title>
</head>

<body>
    <?php foreach ($students as $student) : ?>
        <ol type="1">
            <li>Nama : <?php echo $student[0]; ?></li>
            <li>NIM : <?php echo $student[1]; ?></li>
            <li>Program Studi : <?php echo $student[2]; ?></li>
            <li>Email : <?php echo $student[3]; ?></li>
        </ol>
    <?php endforeach ?>
</body>

</html>