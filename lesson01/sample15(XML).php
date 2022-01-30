<?php
$xmlTree = simplexml_load_file('data/rss.xml');

foreach ($xmlTree->channel->item as $item) :
?>

  <p>
    <a href="<?php echo $item->link; ?>">
      <?php echo $item->title; ?>
    </a>
    <br>
  </p>

<?php
endforeach;
?>