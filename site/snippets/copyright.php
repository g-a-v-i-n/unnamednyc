<?php if(!$site->copyright()->empty()): ?>
  <section class='copyright'>
    <h4><?php echo $site->copyright()->kirbytext() ?></h4>
    <h4 class='colophonLink'> <a href='/colophon'> Colophon </a></h4>
  </section>
<?php endif ?>
