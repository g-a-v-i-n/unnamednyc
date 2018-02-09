<?php snippet('htmlheader') ?>
  <body id=<?= $page->cid() ?>>
    <div class="topSpaceWrapper">
      <div class="topSpace topSpaceOpen">
        <?php snippet('header', $page) ?>
        <?php snippet('home', $page) ?>
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
