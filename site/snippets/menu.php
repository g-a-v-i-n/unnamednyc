<?php

$locations = page('locations')->children()->visible();
$index = 0;
/*

The $limit parameter can be passed to this snippet to
display only a specified amount of locations:

```
<?php snippet('showcase', ['limit' => 3]) ?>
```

Learn more about snippets and parameters at:
https://getkirby.com/docs/templates/snippets

*/

if(isset($limit)) $locations = $locations->limit($limit);

?>

<div class="mainMenu disable-select">
  <div class="siteTitle ">
    <h1><?= $site->title()->html() ?></h1>
  </div>

  <?php foreach($locations as $location): ?>

    <div class="location menuItem_<?= $index?>" id="menuItem_<?= $index?>">
        <a href="<?= $location->url() ?>" >
            <h2 ><?= $location->menuTitle()->html() ?></h2>
        </a>
    </div>

  <?php $index++; endforeach ?>

</div>
