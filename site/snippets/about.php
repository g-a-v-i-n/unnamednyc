<div>
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
                <h5 ><?= $location->type()->html() ?></h5>
                <h4 ><?= $location->address()->html() ?></h4>
            </a>
        </div>
      <?php $index++; endforeach ?>
    </div>
  </section>
</div>
  <?php snippet("copyright") ?>
</div>
