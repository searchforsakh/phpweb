<?php
// looping pada array
// for / foreach
$angka = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div.kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            line-height: 50px;
            text-align: center;
            margin: 3px;
            float: left;
            transition: 1s;
        }

        .clear {
            clear: both;
        }

        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50px;
        }
    </style>
</head>

<body>
    <!-- looping array cara 1 -->
    <?php for ($i = 0; $i < count($angka); $i++) { ?>
        <div class="kotak"><?php echo $angka[$i] ?></div>
    <?php } ?>
    <div class="clear"></div>

    <!-- looping array cara 2 -->
    <?php foreach ($angka as $a) { ?>
        <div class="kotak"><?php echo $a ?></div>
    <?php } ?>
    <div class="clear"></div>


    <!-- loop array didalam array -->
    <?php
    $numbers = [
        [1, 2, 3],
        [6, 5, 4],
        [7, 8, 9]
    ]
    ?>

    <?php foreach ($numbers as $number) : // mengakses indeks luar 
    ?>
        <?php foreach ($number as $numb) : // mengakses indeks dalam 
        ?>
            <div class="kotak"><?= $numb ?></div>
        <?php endforeach ?>
    <?php endforeach ?>




</body>

</html>