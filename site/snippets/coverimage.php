<?php if($image = $item->coverimage()->toFile()): ?>
  <div class='frame'>
    <div class="imgWrapper">
      <img src="<?= $image->url() ?>" alt="" />
    </div>
  </div>
<?php endif ?>
