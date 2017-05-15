<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<!--
██╗   ██╗███╗   ██╗███╗   ██╗ █████╗ ███╗   ███╗███████╗██████╗     ███╗   ██╗██╗   ██╗ ██████╗
██║   ██║████╗  ██║████╗  ██║██╔══██╗████╗ ████║██╔════╝██╔══██╗    ████╗  ██║╚██╗ ██╔╝██╔════╝
██║   ██║██╔██╗ ██║██╔██╗ ██║███████║██╔████╔██║█████╗  ██║  ██║    ██╔██╗ ██║ ╚████╔╝ ██║
██║   ██║██║╚██╗██║██║╚██╗██║██╔══██║██║╚██╔╝██║██╔══╝  ██║  ██║    ██║╚██╗██║  ╚██╔╝  ██║
╚██████╔╝██║ ╚████║██║ ╚████║██║  ██║██║ ╚═╝ ██║███████╗██████╔╝    ██║ ╚████║   ██║   ╚██████╗
 ╚═════╝ ╚═╝  ╚═══╝╚═╝  ╚═══╝╚═╝  ╚═╝╚═╝     ╚═╝╚══════╝╚═════╝     ╚═╝  ╚═══╝   ╚═╝    ╚═════╝
Design: Philippe Cao
Dev: Gavin Atkinson
 -->
  <head>
    <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>

    <meta charset="UTF-8">
    <meta name="description" content="<?= $site->description() ?>">
    <meta name="keywords" content="<?= $site->keywords() ?>">
    <meta name="author" content="<?= $site->authors()?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $site->description()->html() ?>">

    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo kirby()->urls()->assets() . '/icons/apple-touch-icon.png'?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo kirby()->urls()->assets() . '/icons/favicon-32x32.png'?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo kirby()->urls()->assets() . '/icons/favicon-16x16.png'?>">
    <link rel="manifest" href="<?php echo kirby()->urls()->assets() . '/icons/manifest.json'?>">
    <link rel="mask-icon" href="<?php echo kirby()->urls()->assets() . '/icons/safari-pinned-tab.svg '?>" color="#FAFAFA">
    <meta name="theme-color" content="#FAFAFA">

    <meta property="og:title" content="<?php echo html($site->title()) ?> | <?php echo html($page->title()) ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo html($site->url()) ?>" />
    <?php if(!$page->socialImg()->empty()): ?>
      <meta property="og:image" content="<?php echo $page->socialImg()->toFile()->url() ?>" />
    <?php endif ?>
    <meta property="og:description" content="<?php echo html($page->text()) ?>" />

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
