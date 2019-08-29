<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>welcome NexSeed Okinawa</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.2/css/swiper.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
</head>
<body>
  <!-- header -->
  <header id="fixed">
    <!-- header左側 -->
    <div class="icon">
      <img src="<?php echo get_template_directory_uri(); ?>/img/seedkun.png" alt="Seedkun">
      <span class="name"><strong>Seed</strong>Kun</span>
    </div>
    <!-- header右側 -->
    <ul class="header-right">
      <li class="js-register">新規登録</li>
      <li class="js-login">ログイン</li>
    </ul>
    <!-- ハンバーガーメニュー -->
    <div id="toggle" class="js-hamburger hamburger">
      <span></span>
    </div>
    <!-- ドロワー -->
    <div id="drower-bg"></div>
    <ul class="drower js-drower">
      <li class="js-register">新規登録</li>
      <li class="js-login">ログイン</li>
    </ul>
    <?php wp_head(); ?>
  </header>
  <!-- headerここまで -->
