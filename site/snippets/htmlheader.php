<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
  <head>

    <meta charset="UTF-8">
    <meta name="description" content="Unnamed Studios is a network of rentable studio facilities for creatives">
    <meta name="keywords" content="NYC, New York City, Studio, Rent, Photography, Workspace, Unnamed Studios, Unnamed, Studios, Spaces">
    <meta name="author" content="Gavin Atkinson and Phil Cao">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
    <meta name="description" content="<?= $site->description()->html() ?>">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="<?php echo kirby()->urls()->assets() . '/scripts/hammer.min.js' ?>"></script>
    <script src="<?php echo kirby()->urls()->assets() . '/scripts/jquery.hammer.js' ?>"></script>


    <link rel="stylesheet" href="<?php echo kirby()->urls()->assets() . '/css/index.css' ?>">

    <?php foreach($page->files()->filterBy('extension', 'css') as $css): ?>
      <?php echo css($css->url()) ?>
    <?php endforeach ?>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-98402740-1', 'auto');
      ga('send', 'pageview');
    </script>

  </head>
