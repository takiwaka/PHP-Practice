<?php
$random = rand(0,10);
echo $random.'<br>';

if ($random === 0){
  echo '当たりです';
}else{
  echo 'ハズレです';
}
