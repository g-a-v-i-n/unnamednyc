<div class="wrap">
  <div class="logoAbout">
    <img src="assets/images/logo-blue.svg" />
  </div>
  <header>
    <div class="intro text"> <?= $page->text()->kirbytext() ?></div>
  </header>

  <section>
      <?php foreach($page->spaces()->yaml() as $space): ?>
          <h3><?php echo $space['title'] ?></h3>
          <p><?php echo $space['description'] ?></p>
      <?php endforeach ?>
  </section>

  <section>
    <h3>ADDRESS</h3>
    <div class="intro text"> <?= $page->address()->kirbytext() ?></div>
    <div class="embed-container map" onClick="style.pointerEvents='none'">
      <iframe class='imbeddedMap' frameborder="0" style="border:0"
      src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJhdPiaKRewokRD002Pd8kz3E&key=AIzaSyAhOx7zVO-qQPa9eq_6oqSKLgafIlgIavQ" allowfullscreen></iframe>
      </div>
  </section>

  <section>
    <h3>BOOK</h3>
    <iframe src="https://app.acuityscheduling.com/schedule.php?owner=13336369" width="100%" height="800" frameBorder="0"></iframe>
    <script src="https://d3gxy7nm8y4yjr.cloudfront.net/js/embed.js" type="text/javascript"></script>
  </section>

  <section>
    <h3>HOURLY BOOKING</h3>
    <div class='list'>
      <?php foreach($page->rates()->yaml() as $rate): ?>
        <div class="optionItem">
          <h4><?php echo $rate['title'] ?></h4>
          <h4><?php echo $rate['rate'] ?></h4>
        </div>
      <?php endforeach ?>
    </div>
  </section>

  <section>
    <h3>MEMBERSHIP</h3>
    <div class='list'>
      <div class='optionList'>
        <p><?php echo $page->membershipType1Heading() ?>:</p>
        <?php foreach($page->membershipType1()->yaml() as $option): ?>
          <div class="optionItem">
            <div class="option"><h4><?php echo $option['commitment'] ?></h4></div>
            <div class="option"><h4><?php echo $option['rate'] ?></h4></div>
          </div>
        <?php endforeach ?>
      </div>
      <div class='optionList'>
        <p><?php echo $page->membershipType2Heading() ?>:</p>
        <?php foreach($page->membershipType2()->yaml() as $option): ?>
          <div class="optionItem">
            <div class="option"><h4><?php echo $option['commitment'] ?></h4></div>
            <div class="option"><h4><?php echo $option['rate'] ?></h4></div>
          </div>
        <?php endforeach ?>
      </div>
    </div>
  </section>

  <section>
    <h3>EQUIPMENT (INCLUDED IN RENTAL)</h3>
    <div class='list'>
      <?php foreach($page->Equipment()->yaml() as $item): ?>
        <div class="listItem">
          <h4><?php echo $item['item'] ?></h4>
        </div>
      <?php endforeach ?>
    </div>
  </section>

  <section>
    <h3>CAMERAS FOR RENT</h3>
    <div class='list'>
      <?php foreach($page->Cameras()->yaml() as $item): ?>
        <div class="listItem">
          <h4><?php echo $item['item'] ?></h4>
        </div>
      <?php endforeach ?>
    </div>
  </section>

  <section class="spacer">
  </section>

</div>
