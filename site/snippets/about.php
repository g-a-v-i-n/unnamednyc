<div class="wrap">
  <div class="logoAbout">
    <img src="assets/images/logo-blue.svg" />
  </div>
  <header>
    <div class="intro text">
      <?= $page->intro()->kirbytext() ?>
    </div>
  </header>

  <section class="text">
    <?= $page->text()->kirbytext() ?>
  </section>
  <section class="contact">
    <div class="contactItem">
      <h3> PHONE </h3>
      <a href="tel:<?= $page->PhoneNoExtraCharacters() ?>"><?= $page->phone()->kirbytext() ?></a>
    </div>
    <div class="contactItem">
      <h3> EMAIL </h3>
      <a href="mailto:<?= $page->email() ?>?Subject=Hello%20again" target="_top"><?= $page->email()->kirbytext() ?></a>
    </div>
  </section>

  <section class="connect">
    <h3> CONNECT </h3>
    <div class="connectList">
      <p><a href="<?= $page->Instagram() ?>">Instagram</a></p>
      <p><a href="<?= $page->Facebook() ?>">Facebook</a></p>
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
                <h2 ><?= $location->type()->html() ?></h2>
                <h2 ><?= $location->address()->html() ?></h2>
            </a>
        </div>

      <?php $index++; endforeach ?>

    </div>
  </section>
  <section class="spacer">
  </section>

</div>
