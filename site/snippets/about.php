<div class="wrap">
  <div class="logoAbout">
  </div>

  <section class="text">
    <?= $page->text()->kirbytext() ?>
    <div id='signature'>
      <div class='emDash'></div>
      <div><h4><?= $page->signature() ?></h4></div>
    </div>
  </section>
  <section class="contact">
    <div class="contactItem">
      <h3> PHONE </h3>
      <a href="tel:<?= $page->PhoneNoExtraCharacters() ?>"><p><?= $page->phone() ?></p></a>
    </div>
    <div class="contactItem">
      <h3> EMAIL </h3>
      <p ><?= $page->email() ?></p>
    </div>
  </section>

  <section class="connect">
    <h3> CONNECT </h3>
    <div class="connectList">
      <a href="<?= $page->Instagram() ?>"><p>Instagram</p></a>
      <a href="<?= $page->Facebook() ?>"><p>Facebook</p></a>
    </div>
  </section>

  <section class="locations">
    <h3> LOCATIONS </h3>
    <div class="locationList">
      <?php
      $locations = page('locations')->children()->visible();
      $index = 0;
      ?>
      <?php foreach($locations as $location): ?>
        <div class="locationItem">
            <a href="<?= $location->url() ?>" >
                <h5 ><?= $location->title()->html() ?></h5>
                <h4 ><?= $location->address()->html() ?></h4>
            </a>
        </div>
      <?php $index++; endforeach ?>
    </div>
  </section>

  <?php snippet("copyright") ?>

</div>
