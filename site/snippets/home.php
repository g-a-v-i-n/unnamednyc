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


<div class="gallery">
  <div class="galleryMover">
    <?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
      <div class='frame'>
        <div class="imgWrapper">
          <img src="<?= $image->url() ?>" alt="<?= $page->title()->html() ?>" />
        </div>
      </div>
    <?php $index++; endforeach ?>
</div>
</div>
<div class="contentArrowContainer">
  <img class="galleryArrowLeft" src="<?php echo kirby()->urls()->assets() . '/images/arrow-on.svg' ?>" />
  <img class="galleryArrowRight" src="<?php echo kirby()->urls()->assets() . '/images/arrow-on.svg' ?>" />
</div>
