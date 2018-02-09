<div class="wrap">
  <div class="subWrap">
  <div class="logoAbout">
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

  <?php if(!$page->bookingTypes()->empty()): ?>
    <?php $photography = $page->bookingTypes()->toStructure()->filterBy('bookingtype', 'Photography'); ?>
    <?php $video = $page->bookingTypes()->toStructure()->filterBy('bookingtype', 'Video'); ?>
    <section>
      <h3>HOURLY BOOKING</h3>
      <div class='list'>
      <?php if($photography): ?>
        <div class='optionList'>
          <h5>Photography:</h5>
          <?php foreach($photography as $item): ?>
            <div class="optionItem">
              <div class="option"><h4><?php echo $item->commitment() ?></h4></div>
              <div class="option"><h4><?php echo $item->rate() ?></h4></div>
            </div>
          <?php endforeach ?>
        </div>
      <?php endif ?>

      <?php if($video): ?>
        <div class='optionList'>
          <h5>Video:</h5>
          <?php foreach($video as $item): ?>
            <div class="optionItem">
              <div class="option"><h4><?php echo $item->commitment() ?></h4></div>
              <div class="option"><h4><?php echo $item->rate() ?></h4></div>
            </div>
          <?php endforeach ?>
        </div>
      <?php endif ?>

      <?php if($event): ?>
        <div class='optionList'>
          <h5>Event:</h5>
          <?php foreach($video as $item): ?>
            <div class="optionItem">
              <div class="option"><h4><?php echo $item->commitment() ?></h4></div>
              <div class="option"><h4><?php echo $item->rate() ?></h4></div>
            </div>
          <?php endforeach ?>
        </div>
      <?php endif ?>

      </div>
    </section>
  <?php endif ?>

  <?php if(!$page->membershiptypes()->empty()): ?>
    <?php $monthly = $page->membershiptypes()->toStructure()->filterBy('membershiptype', 'Month-to-Month'); ?>
    <?php $halfyear = $page->membershiptypes()->toStructure()->filterBy('membershiptype', '6-Month-Commitment'); ?>
    <section>
      <h3>MEMBERSHIP</h3>
      <div class='list'>
        <?php if($monthly): ?>
        <div class='optionList'>
          <h5>Month-to-Month:</h5>
          <?php foreach($monthly as $item): ?>
            <div class="optionItem">
              <div class="option"><h4><?php echo $item->commitment() ?></h4></div>
              <div class="option"><h4><?php echo $item->rate() ?></h4></div>
            </div>
          <?php endforeach ?>
        </div>
        <?php endif ?>

        <?php if($halfyear): ?>
        <div class='optionList'>
          <h5>6-Month Commitment:</h5>
          <?php foreach($halfyear as $item): ?>
            <div class="optionItem">
              <div class="option"><h4><?php echo $item->commitment() ?></h4></div>
              <div class="option"><h4><?php echo $item->rate() ?></h4></div>
            </div>
          <?php endforeach ?>
        </div>
      <?php endif ?>

      </div>
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

  <?php if(!$page->address()->empty()): ?>
    <section>
      <h3>ADDRESS</h3>
      <div class="intro text"> <?= $page->address()->kirbytext() ?></div>
      <?php if($page->files()->has('map.png')): ?>
        <a target="_blank" href=" <?= $page->maplink() ?>" >
        <img class="map" src="<?php echo $page->files()->find('map.png')->url() ?>"/>
      </a>
      <?php endif ?>

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
          <div class="listItem listHider">
            <h4><?php echo $item['item'] ?></h4>
          </div>
        <?php endforeach ?>
      </div>
      <div class='expandButton'><p>See More</p></div>
    </section>
  <?php endif ?>
</div>

  <?php snippet("copyright") ?>

</div>
