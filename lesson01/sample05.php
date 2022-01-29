<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  $sum = 100 + 200 + 150;
  echo $sum;
  ?>

  <p>合計金額は<?php echo $sum; ?>です。</p>
  <p>税込み金額は<?php echo $sum * 1.1; ?>です。</p>

</body>

</html>