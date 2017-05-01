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
    <script src="<?php echo kirby()->urls()->assets() . '/scripts/jquery.mobile.custom.min.js' ?>"></script>


    <link rel="stylesheet" href="<?php echo kirby()->urls()->assets() . '/css/index.css' ?>">

    <?php foreach($page->files()->filterBy('extension', 'css') as $css): ?>
      <?php echo css($css->url()) ?>
    <?php endforeach ?>
  </head>
