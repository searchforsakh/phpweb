<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Control Flow</title>
  <style>
    .tr {
      background-color: pink;
    }

    .tr2 {
      background-color: silver;
    }
  </style>
</head>

<body>
  <!-- for -->
  <table border="1" cellspacing="0" cellpadding="20"> <!-- Membuat tabel dengan border, cellspacing, dan cellpadding -->
    <?php for ($a = 1; $a <= 5; $a++) : ?> <!-- Perulangan luar: $a dari 1 sampai 5 (untuk 5 baris) -->
      <?php if ($a % 2 == 0) : ?> <!-- Jika $a genap, gunakan class "tr" (pink) -->
        <tr class="tr"> <!-- Baris dengan background pink -->
        <?php else : ?> <!-- Jika $a ganjil -->
        <tr class="tr2"> <!-- Baris dengan background silver -->
        <?php endif; ?> <!-- Akhir kondisi if-else -->
        <?php for ($b = 1; $b <= 6; $b++) : ?> <!-- Perulangan dalam: $b dari 1 sampai 6 (untuk 6 kolom) -->
          <td><?php echo "$a,$b" ?></td> <!-- Sel tabel dengan nilai "a,b" -->
        <?php endfor ?> <!-- Akhir perulangan dalam -->
        </tr> <!-- Tutup baris tabel -->
      <?php endfor ?> <!-- Akhir perulangan luar -->
  </table> <!-- Tutup tabel -->
  <br>
  <hr>

  <!-- while -->
  <table border="1" cellspacing="0" cellpadding="20"> <!-- Membuat tabel dengan border, cellspacing, dan cellpadding -->
    <?php $x = 0;
    while ($x < 3) : $x++; ?> <!-- Inisialisasi $x=0, lalu loop selama $x < 3 (3 baris), increment $x setiap iterasi -->
      <tr> <!-- Buat baris tabel -->
        <?php $y = 0;
        while ($y < 3) : $y++; ?> <!-- Inisialisasi $y=0, lalu loop selama $y < 3 (3 kolom), increment $y setiap iterasi -->
          <td><?php echo "$x-$y" ?></td> <!-- Sel tabel dengan nilai "x-y" -->
        <?php endwhile ?> <!-- Akhir perulangan dalam (while $y) -->
      </tr> <!-- Tutup baris tabel -->
    <?php endwhile ?> <!-- Akhir perulangan luar (while $x) -->
  </table> <!-- Tutup tabel -->
  <br>
  <hr>

  <!-- contoh tabel html -->
  <!-- tr untuk membuat baris -->
  <!-- td untuk membuat kolom kesamping -->
  <table border="1" cellspacing="0" cellpadding="20">
    <tr>
      <td>1,1</td>
      <td>1,1</td>
      <td>1,1</td>
    </tr>
    <tr>
      <td>1,1</td>
      <td>1,1</td>
      <td>1,1</td>
    </tr>
    <tr>
      <td>1,1</td>
      <td>1,1</td>
      <td>1,1</td>
    </tr>
  </table>
</body>

</html>