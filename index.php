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
    <?php if (have_posts()): ?>
    <div class="swiper-container">
      <ul class="swiper-wrapper img-box">
      <?php while (have_posts()): the_post(); ?>
        <li class="swiper-slide">
        <?php if (has_post_thumbnail()): ?>
          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
        <?php else: ?>
          <a href="<?php the_permalink(); ?>"><img src="https://placehold.jp/300x300.png" alt="" height="300" width="300"></a>
        <?php endif; ?>
        <p><?php the_category(); //カテゴリ?></p>
        <?php the_excerpt(); //本文抜粋?>
        <p><?php the_time('Y年m月d日'); //投稿日時?></p>
        <span><a href="<?php the_permalink(); ?>"><?php the_title(); //タイトル?></a></span>
      </li>
      <?php endwhile; ?>
      </ul>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>
    <?php else: ?>
      <p>投稿はありません</p>
    <?php endif; ?>
  </main>
  <!-- curriculumここまで -->

  <!-- contact -->
  <aside class="contact">
    <h2 class="sub-title">contact us</h2>
    <!-- form -->
    <?php echo do_shortcode('[contact-form-7 id="12" title="コンタクトフォーム 1"]'); ?>
  </aside>
  <!-- contactここまで -->
<?php get_footer(); ?>
