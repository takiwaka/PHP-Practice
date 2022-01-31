<?php
$file = file_get_contents('data/feed.json');
$json = json_decode($file);
?>

<p>
  <?php
  echo $json->title;
  echo $json->items[0]->title;
  ?>
</p>

<?php
foreach ($json->items as $item) :
?>

  <p>
    <a href="<?php echo $item->url; ?>">
      <?php echo $item->title; ?>
    </a>
    <br>
  </p>

<?php
endforeach;
?>