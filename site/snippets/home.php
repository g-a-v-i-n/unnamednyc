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
          <div class="caption"><?php echo $image->caption() ?>
          </div>
        </div>

      </div>
    <?php $index++; endforeach ?>
</div>
</div>
<div class="contentArrowContainer">
  <svg class='galleryArrowLeft' width="28px" height="28px" viewBox="0 0 28 28" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      <defs>
          <polygon id="path-1" points="2 -3.55271368e-15 26 -3.55271368e-15 14 28"></polygon>
          <mask id="mask-2" maskContentUnits="userSpaceOnUse" maskUnits="objectBoundingBox" x="0" y="0" width="24" height="28" fill="white">
              <use xlink:href="#path-1"></use>
          </mask>
      </defs>
      <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <g id="arrow-outline" stroke="#1E1E1E" stroke-width="6" fill="transparent">
              <use id="arrow" mask="url(#mask-2)" transform="translate(14.000000, 14.000000) rotate(-90.000000) translate(-14.000000, -14.000000) " xlink:href="#path-1"></use>
          </g>
      </g>
  </svg>
  <svg class='galleryArrowRight' width="28px" height="28px" viewBox="0 0 28 28" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      <defs>
          <polygon id="path-1" points="2 -3.55271368e-15 26 -3.55271368e-15 14 28"></polygon>
          <mask id="mask-2" maskContentUnits="userSpaceOnUse" maskUnits="objectBoundingBox" x="0" y="0" width="24" height="28" fill="white">
              <use xlink:href="#path-1"></use>
          </mask>
      </defs>
      <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <g id="arrow-outline" stroke="#1E1E1E" stroke-width="6" fill="transparent">
              <use id="arrow" mask="url(#mask-2)" transform="translate(14.000000, 14.000000) rotate(-90.000000) translate(-14.000000, -14.000000) " xlink:href="#path-1"></use>
          </g>
      </g>
  </svg>
