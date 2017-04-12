<?php snippet('htmlheader') ?>
  <body id=<?= $page->cid() ?>>
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
          <?php snippet('about', $page) ?>
        </section>
      </div>
    </div>
  </body>
<?php snippet('htmlfooter') ?>
