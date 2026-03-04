<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Control Flow</title>
    <style>
      .tr{background-color: pink;}
      .tr2{background-color: silver;}
    </style>
  </head>
  <body>
    <!-- for -->
  <table border="1" cellspacing="0" cellpadding="20">
    <?php  for ($a = 1; $a <= 5; $a++) : ?>
      <?php if ($a%2 == 0) : ?>
        <tr class="tr">
      <?php else : ?>
        <tr class="tr2">
      <?php endif; ?>
        <?php for($b = 1; $b <= 6; $b++) : ?>
          <td><?php echo "$a,$b" ?></td>
        <?php endfor ?>
      </tr>
    <?php endfor ?>
  </table>
    <br>
    <hr>

    <!-- while -->
    <table border="1" cellspacing="0" cellpadding="20">
      <?php $x=0; while($x<3) : $x++; ?>
      <tr>
        <?php $y=0; while($y<3) : $y++; ?>
        <td><?php echo "$x-$y" ?></td>
        <?php endwhile ?>
      </tr>
      <?php endwhile ?>
    </table>
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

