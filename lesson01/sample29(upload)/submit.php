<?php
$file = $_FILES['picture'];
if (
  $file['type'] === 'image/png' || $file['type'] === 'image/jpeg'
) {
  $path = 'images/'.$file['name'];
  $success = move_uploaded_file($file['tmp_name'], $path);
  if ($success) {
    echo '成功しました';
  } else {
    echo '失敗しました';
  }
} else {
  echo 'ファイル形式が不正です';
}
