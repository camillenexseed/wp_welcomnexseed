<?php get_header(); ?>
<!-- welcome -->
  <main class="welcome" id="margin-for-fixed">
    <h1 class="title">Welcome to NexSeed Okinawa</h1>
    <ul class="guideline">
      <li>Be Athlete</li>
      <li>Go World</li>
      <li>Enjoy Everything</li>
    </ul>
    <div class="btn-group">
      <button class="btn register js-register">新規登録</button>
      <button class="btn login js-login">ログイン</button>
    </div>
  </main>
  <!-- welcomeここまで -->

  <!-- curriculum -->
  <main class="curriculum">
    <h2 class="sub-title">NexSeed Life</h2>
    <div class="swiper-container">
      <ul class="swiper-wrapper img-box">
        <li class="swiper-slide">
          <img src="<?php echo get_template_directory_uri(); ?>/img/programming.jpg" alt="">
          <span>programing</span>
        </li>
        <li class="swiper-slide">
          <img src="<?php echo get_template_directory_uri(); ?>/img/english.jpg" alt="">
          <span>English</span>
        </li>
        <li class="swiper-slide">
          <img src="<?php echo get_template_directory_uri(); ?>/img/enjoy.jpg" alt="">
          <span>Enjoy</span>
        </li>
      </ul>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>
  </main>
  <!-- curriculumここまで -->

  <!-- contact -->
  <aside class="contact">
    <h2 class="sub-title">contact us</h2>
    <!-- form -->
    <form action="">
      <div class="form">
        <!-- 左側のフォーム -->
        <div class="form-left">
          <fieldset>
            <input  class="name" type="text" placeholder="お名前">
          </fieldset>
          <fieldset>
            <input class="email" type="email" placeholder="メールアドレス">
          </fieldset>
        </div>
        <!-- 右側のフォーム -->
        <fieldset>
          <textarea  class="inquiry" name="" placeholder="お問い合わせ内容"></textarea>
        </fieldset>
      </div>
      <button id="hoge">submit</button>
    </form>
  </aside>
  <!-- contactここまで -->
<?php get_footer(); ?>
