<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
    <meta name="description" content="<?= $site->description()->html() ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php echo kirby()->urls()->assets() . '/css/index.css' ?>">
    <?php foreach($page->files()->filterBy('extension', 'css') as $css): ?>
      <?php echo css($css->url()) ?>
    <?php endforeach ?>
  </head>
