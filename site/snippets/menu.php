<?php

$locations = page('locations')->children()->visible();
$index = 0;
if(isset($limit)) $locations = $locations->limit($limit);

?>

<div class="mainMenu disable-select">
  <div class="siteTitle ">
    <h1><?= $site->title()->html() ?></h1>
  </div>

  <?php foreach($locations as $location): ?>
    <div class="location menuItem_<?= $index?>" id="menuItem_<?= $index?>">
        <a href="<?= $location->url() ?>" >
            <h2 ><?= $location->menuTitle() ?></h2>
        </a>
    </div>
  <?php $index++; endforeach ?>

</div>
