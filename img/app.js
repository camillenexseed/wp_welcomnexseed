$(function(){
  let swiper = new Swiper ('.swiper-container',{
    loop: true,
    slidesPerView: 3,
    autoplay: {
      delay: 1000,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      960: {
        slidesPerView: 2,
        spaceBetween: 20
      },
      767: {
        slidesPerView: 1,
      }
    }
  });

  $('.js-hamburger').on('click', function(){
    if($(this).hasClass('on')){
      $('#drower-bg').fadeOut(600);
      $(this).removeClass('on');
    }else{
      $('#drower-bg').fadeIn(600);
      $(this).addClass('on');
    }
    $('.js-drower').toggleClass('on');
  });

  $('#drower-bg').on('click', function(){
    if($('.js-hamburger').hasClass('on')){
      $(this).fadeOut(600);
      $('.js-hamburger').toggleClass('on');
      $('.js-drower').toggleClass('on');
    }
  });

  $('#hoge').on('click', function(){
    // 処理中断
    return false;
  });

  //新規登録、ログインでモーダル
  $('.js-register, .js-login').on('click', function(){
    let btn = $('#js-modal-form-btn');
    if($(this).hasClass('js-register')){
      btn.text('登録');
      // textContentと一緒
      btn.removeClass('login').addClass('register');
    }else{
      btn.text('ログイン');
      // textContentと一緒
      btn.removeClass('register').addClass('login');
    }
    $('#modal-bg').fadeIn(600);
    $('.modal-content').fadeIn(800);
  });

  //モーダルを閉じる
  $('.js-modal-close').on('click', function() {
    $('#modal-bg').fadeOut(800);
    $('.modal-content').fadeOut(600);
  });
});