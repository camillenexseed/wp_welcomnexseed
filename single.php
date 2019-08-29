<?php
// 投稿用テンプレート
get_header();
?>
<h1><?php the_title(); ?></h1>
<?php
  if (have_posts()) :
      while (have_posts()) : the_post();
      $date = get_the_date('Y.m.d');
      ?>
      <time datetime=""><?php echo $date; ?></time>
      <div class="article">
        <?php the_content(); ?>
      </div>
      <?php

    endwhile;
  endif;
get_footer();
