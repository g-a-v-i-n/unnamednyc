<?php
$locations = page('locations')->children()->visible();
  if(isset($limit)) $locations = $locations->limit($limit);
  $index = 0;
?>

<div class="mainMenu disable-select">
  <div class="siteTitle">
    <?php if($page->Comingsoon()->bool()): ?>
      <h1><?= $page->menuTitle()->html() ?> (Coming Soon)</h1>
    <?php else: ?>
      <h1><?= $page->menuTitle()->html() ?></h1>
    <?php endif ?>
  </div>


  <?php foreach($locations as $location): ?>
    <?php if($location->isOpen() === false): ?>
      <div class="location menuItem_<?= $index?>" id="menuItem_<?= $index?>">
        <a href="<?php echo $location->url() ?>" >
          <?php if($location->Comingsoon()->bool()): ?>
            <h2 ><?= $location->menuTitle() ?> (Coming Soon)</h2>
          <?php else: ?>
            <h2 ><?= $location->menuTitle() ?></h2>
          <?php endif ?>
        </a>
      </div>
    <?php $index++; else: ?>
      <div class="location menuItem_<?= $index?>" id="menuItem_<?= $index?>">
        <a href="<?= $site->homePage()->url() ?>" >
          <h2 ><?= $site->homePage()->menuTitle() ?></h2>
        </a>
      </div>
    <?php $index++; endif ?>
  <?php endforeach ?>
</div>
