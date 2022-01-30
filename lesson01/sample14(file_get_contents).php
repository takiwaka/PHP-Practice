<?php
//変数に入れる
$news = file_get_contents('data/news.txt');
echo $news;

//ファイルに追記
$news = $news . "<br>ニュースを追加";
$success = file_put_contents('data/news.txt', $news);

if ($success !== false) {
  echo 'ファイルの書き込みが完了しました';
} else {
  echo 'ファイルの書き込みに失敗しました';
}

//そのまま出力
// readfile('data/news.txt');
