<?php
$json_sample = [
  "title" => "jsonサンプル",
  "items" => ["りんご", "いちご", "みかん"]
];

$json = json_encode($json_sample, JSON_UNESCAPED_UNICODE);
echo $json;

file_put_contents('data/json_sample.json', $json);
