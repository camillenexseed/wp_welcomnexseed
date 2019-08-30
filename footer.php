<!-- footer -->
  <footer>
    <!-- footer左側 -->
    <div class="icon">
      <img src="<?php echo get_template_directory_uri(); ?>/img/seedkun.png" alt="Seedkun">
      <span class="name"><strong>Seed</strong>Kun</span>
    </div>
    <!-- footer右側 -->
    <p class="footer-right">Copyright (c) SeedKun inc</p>
  </footer>

  <!-- modal window  -->
  <div class="modal-content">
    <div class="modal-close">
      <span class="js-modal-close">×</span>
    </div>
    <form class="modal-form">
      <input class="modal-form-email" type="email" placeholder="メールアドレス">
      <input class="modal-form-password" type="password" placeholder="パスワード">
      <button id="js-modal-form-btn" class="modal-form-btn register">登録</button>
    </form>
  </div>
  <div id="modal-bg" class="js-modal-close"></div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.2/js/swiper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
  <!-- <script src="<?php echo get_template_directory_uri(); ?>/app.js"></script> -->
  <?php wp_footer(); ?>
</body>
</html>
