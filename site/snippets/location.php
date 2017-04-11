<div class="wrap">
  <div class="logoAbout">
    <img src="assets/images/logo-blue.svg" />
  </div>
  <header>
    <div class="intro text"> <?= $page->text()->kirbytext() ?></div>
  </header>

  <section class="spaceList">
    <?php foreach($page->spaces()->yaml() as $space): ?>
      <div class="spaceItem">
        <h3><?php echo $space['title'] ?></h3>
        <p><?php echo $space['description'] ?></p>
      </div>
    <?php endforeach ?>
  </section>

  <section class="address">
    <h3>ADDRESS</h3>
    <div class="intro text"> <?= $page->address()->kirbytext() ?></div>
  </section>

  <section class="booking">
    <h3>BOOK</h3>
    <div class="intro text"> <?= $page->address()->kirbytext() ?></div>
  </section>

  <section class="hourlyBooking">
    <h3>HOURLY BOOKING</h3>
    <div class='listItem'>
      <?php foreach($page->rates()->yaml() as $rate): ?>
          <h3><?php echo $rate['title'] ?></h3>
          <p><?php echo $rate['rate'] ?></p>
      <?php endforeach ?>
    </div>
  </section>

  <section class="hourlyBooking">
    <h3>MEMBERSHIP</h3>
    <div class='locationListItem'>
      <?php foreach($page->memberships()->yaml() as $option): ?>
        <div class="spaceItem">
          <h3><?php echo $option['heading'] ?></h3>
          <div class='optionList'>
            <div class="optionItem">
              <p><?php echo $option['title1'] ?></p>
              <p><?php echo $option['rate1'] ?></p>
            </div>
            <div class="optionItem">
              <p><?php echo $option['title2'] ?></p>
              <p><?php echo $option['rate2'] ?></p>
            </div>
          </div>
        </div>
      <?php endforeach ?>
    </div>
  </section>

  <section class="equipment">
    <h3>EQUIPMENT</h3>
    <div class='equipmentList'>
      <?php foreach($page->Equipment() as $item): ?>
        <div class="spaceItem">
          <p><?php echo $item ?></p>
        </div>
      <?php endforeach ?>
    </div>
  </section>

  <section class="connect">
    <h3> CONNECT </h3>
    <div class="connectList">
    </div>
  </section>

  <section class="locations">
    <h3> LOCATIONS </h3>
    <div class="locationList">

  </section>
  <section class="spacer">
  </section>

</div>
