<div class="wrap">
  <div class="logoAbout">
    <svg class="logoAboutSVG" width="156px" height="128px" viewBox="0 0 156 128" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g id="Mocks" stroke="none" stroke-width="1" fill="transparent" fill-rule="evenodd" stroke-linecap="square">
            <g vector-effect="non-scaling-stroke"  id="logo-svg" transform="translate(-786.000000, -166.000000)" stroke="#006e94" stroke-width="8">
                <g id="logo" transform="translate(790.500000, 170.000000)">
                    <path d="M38.6013986,0.41958042 L38.6013986,48.3693806" id="Line"></path>
                    <rect id="Rectangle-4" x="0" y="0" width="146.853147" height="120"></rect>
                </g>
            </g>
        </g>
    </svg>
    </div>
  <section>
    <div class="intro text"> <?= $page->text()->kirbytext() ?></div>
  </section>

  <?php if(!$page->spaces()->empty()): ?>
    <section>
      <?php foreach($page->spaces()->yaml() as $space): ?>
        <h3><?php echo $space['title'] ?></h3>
        <p><?php echo $space['description'] ?></p>
      <?php endforeach ?>
    </section>
  <?php endif ?>

  <?php if(!$page->address()->empty()): ?>
    <section>
      <h3>ADDRESS</h3>
      <div class="intro text"> <?= $page->address()->kirbytext() ?></div>
      <?php if($page->files()->has('map.svg')): ?>
        <object class="map" data="<?php echo $page->files()->find('map.svg')->url() ?>" type="image/svg+xml">
          <img src="yourfallback.jpg" />
        </object>
      <?php endif ?>

    </section>
  <?php endif ?>

  <?php if($page->hasBooking()->bool() === true): ?>
    <section>
      <h3>BOOK</h3>
      <iframe id='acuity' src="https://app.acuityscheduling.com/schedule.php?owner=13336369" width="100%" height="800" frameBorder="0"></iframe>
      <script src="https://d3gxy7nm8y4yjr.cloudfront.net/js/embed.js" type="text/javascript"></script>
      <div id='acuityLink'><a href='https://unnamed.acuityscheduling.com/'> <p>Book the studio here.</p> </a></div>
    </section>
  <?php endif ?>

  <?php if(!$page->bookingTypes()->empty()): ?>
    <section>
    <h3>HOURLY BOOKING</h3>
    <div class='list'>
      <?php $hourly = $page->bookingTypes()->toStructure()->filterBy('bookingtype', 'Hourly'); ?>
      <?php foreach($hourly as $item): ?>
        <div class="optionItem">
          <h4><?php echo $item->commitment() ?></h4>
          <h4><?php echo $item->rate() ?></h4>
        </div>
      <?php endforeach ?>
    </div>
  </section>
  <?php endif ?>

  <?php if(!$page->membershiptypes()->empty()): ?>
    <section>
      <h3>MEMBERSHIP</h3>
      <div class='list'>
        <div class='optionList'>
          <?php $monthly = $page->membershiptypes()->toStructure()->filterBy('membershiptype', 'Month-to-Month'); ?>
          <?php $halfyear = $page->membershiptypes()->toStructure()->filterBy('membershiptype', '6-Month-Commitment'); ?>
          <h5>Month-to-Month:</h5>
          <?php foreach($monthly as $item): ?>
            <div class="optionItem">
              <div class="option"><h4><?php echo $item->commitment() ?></h4></div>
              <div class="option"><h4><?php echo $item->rate() ?></h4></div>
            </div>
          <?php endforeach ?>
        </div>
        <div class='optionList'>
          <h5>6-Month Commitment:</h5>
          <?php foreach($halfyear as $item): ?>
            <div class="optionItem">
              <div class="option"><h4><?php echo $item->commitment() ?></h4></div>
              <div class="option"><h4><?php echo $item->rate() ?></h4></div>
            </div>
          <?php endforeach ?>
        </div>
      </div>
    </section>
  <?php endif ?>




  <?php if(!$page->Equipment()->empty()): ?>
    <section class='equipmentList'>
      <h3>EQUIPMENT (INCLUDED IN RENTAL)</h3>
      <div class='list'>
        <?php foreach($page->Equipment()->yaml() as $item): ?>
          <div class="listItem listHider">
            <h4><?php echo $item['item'] ?></h4>
          </div>
        <?php endforeach ?>
      </div>
      <div class='expandButton'><p>See More</p></div>
    </section>
  <?php endif ?>

  <?php if(!$page->Cameras()->empty()): ?>
    <section class='cameraList'>
      <h3>CAMERAS FOR RENT</h3>
      <div class='list'>
        <?php foreach($page->Cameras()->yaml() as $item): ?>
          <div class="listItem">
            <h4><?php echo $item['item'] ?></h4>
          </div>
        <?php endforeach ?>
      </div>
      <div class='expandButton'><p>See More</p></div>
    </section>
  <?php endif ?>





  <section class="spacer">
  </section>

</div>
