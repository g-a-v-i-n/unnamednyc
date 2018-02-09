<?php
$locations = page('locations')->children()->visible();
  if(isset($limit)) $locations = $locations->limit($limit);
  $index = 0;
?>

<div class="mainMenu disable-select">
  <div class="siteTitle menuBorderOff">
    <h1><?= $page->menuTitle()->html() ?></h1>
  </div>
  <?php foreach($locations as $location): ?>
    <?php if($location->isOpen() === false): ?>
      <a class="location menuItem_<?= $index?>" id="menuItem_<?= $index?>" href="<?php echo $location->url() ?>">
        <h2 ><?= $location->menuTitle() ?></h2>
      </a>
    <?php $index++; else: ?>
      <a class="location menuItem_<?= $index?>" id="menuItem_<?= $index?>" href="<?= $site->homePage()->url() ?>">
        <h2 ><?= $site->homePage()->menuTitle() ?></h2>
      </a>
    <?php $index++; endif ?>
  <?php endforeach ?>
</div>
