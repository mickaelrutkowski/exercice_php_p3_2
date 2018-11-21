<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>PHP</title>
</head>
<body>
  <?php
  $min = 0;
  $max = 100;
  while ($min <= 20) {
    $result = $min * $max;
    echo $result . ' ' ;
   $min++;
  }
 ?>
</body>
</html>
