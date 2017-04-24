<div class="wrap">
  <div class="logoAbout">
    <svg class="logoAboutSVG" width="156px" height="128px" viewBox="0 0 156 128" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g id="Mocks" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="square">
            <g id="logo-svg" transform="translate(-786.000000, -166.000000)" stroke="#006e94" stroke-width="8">
                <g id="logo" transform="translate(790.500000, 170.000000)">
                    <path d="M38.6013986,0.41958042 L38.6013986,48.3693806" id="Line"></path>
                    <rect id="Rectangle-4" x="0" y="0" width="146.853147" height="120"></rect>
                </g>
            </g>
        </g>
    </svg>
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
      <a href=""><?= $page->email()->kirbytext() ?></a>
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
