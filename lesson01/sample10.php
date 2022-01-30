<?php
date_default_timezone_set('Asia/Tokyo');
$time = date('G');
?>
<?php if ($time < 9) : ?>
  <p>9時前なので営業時間外です</p>
<?php else : ?>
  <p>ようこそ</p>
<?php endif; ?>
