<?php
global $wp_path;
global $site_url;
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="default ">
  <!-- favicon -->
  <link rel="shortcut icon" href="<?= $wp_path?>/assets/img/favicon/favicon.ico">

  <?php
  get_template_part ('./include/seo');
  ?>

  <!-- style sheets -->

  <link rel="stylesheet" href="<?php echo get_theme_file_uri('assets/css/app.css'); ?>">
  <!-- JS Library -->
  <script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js"></script>
  <script src="<?php echo get_theme_file_uri('/assets/js/action.js'); ?>"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
  <?php wp_head()?>
</head>
<body id="pageTop">
<div class="wrap">