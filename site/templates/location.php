<?php snippet('htmlheader') ?>
  <body>
    <div class="topSpaceWrapper">
      <div class="topSpace topSpaceOpen">
        <?php snippet('header', $page) ?>
        <section class="content">
          <?php snippet('home', $page) ?>
        </section>
      </div>
    </div>
    <div class="bottomSpaceWrapper">
      <div class="bottomSpace">
        <?php snippet('header', $page) ?>
        <section class="content">
          <?php snippet('location', $page) ?>
        </section>
      </div>
    </div>
  </body>
<?php snippet('htmlfooter') ?>
