$(function() {
  // アコーディオンパネル
  $('.faq__text2').css('display', 'none');
  $('.faq__text3').css('display', 'none');

  $('.faq__heading1').click(function() {
    $(this).next().slideToggle('open');
  });
  $('.faq__heading2').click(function() {
    $(this).next().slideToggle('open');
  });
  $('.faq__heading3').click(function() {
    $(this).next().slideToggle('open');
  });

  // ハンバーガーメニュー
  $(".menu").click(function(){
      $(".bar").toggleClass("cross");
      $('.menu__musk').fadeToggle(300);
      $(".hamburger__menu").toggleClass("slide");
      $("body").toggleClass("stop");
  });

  // スムーススクロール
  $(function(){
    $('a[href^=#]').click(function(){
      var adjust = -94;
      var speed = 600;
      var href= $(this).attr("href");
      var target = $(href == "#" || href == "" ? 'html' : href);
      var position = target.offset().top + adjust;
      $('body,html').animate({scrollTop:position}, speed, 'swing');
      return false;
    });
  });

  // フォーム　アラート
  $('.alert1, .alert2, .alert3').hide();
  $('.submit').click(function() {
    //チェック用の変数
    var sendFlag = true;

    if(!$('#text1').val()) {
      $('#textSection1, .alert1').show();
      sendFlag = false; //入力がない場合
    } else {
      $('#textSection1, .alert1').hide();
    }

    if(!$('#text2').val()) {
      $('#textSection2, .alert2').show();
      sendFlag = false; //入力がない場合
    } else {
      $('#textSection2, .alert2').hide();
    }

    if(!$('textarea').val()) {
      $('#textareaSection, .alert3').show();
      sendFlag = false; //入力がない場合
    } else {
      $('#textareaSection, .alert3').hide();
    }

    if(sendFlag == false) {
      return false; //falseであれば送信しない(そうでない場合送信)
    }
  })
});  


var mySwiper = new Swiper ('.swiper-container', {
  // オプションパラメータ(一部のみ抜粋)
  loop: true, // 最後のスライドまで到達した場合、最初に戻らずに続けてスライド可能にするか。
  centeredSlides : true,
  speed: 600, // スライドが切り替わるトランジション時間(ミリ秒)。
  slidesPerView: 4, // 何枚のスライドを表示するか
  spaceBetween: 45, // スライド間の余白サイズ(ピクセル)
  direction: 'horizontal', // スライド方向。 'horizontal'(水平) か 'vertical'(垂直)。effectオプションが 'slide' 以外は無効。
  effect: 'slide', // "slide", "fade"(フェード), "cube"(キューブ回転), "coverflow"(カバーフロー) または "flip"(平面回転)
  allowTouchMove: true,

  // スライダーの自動再生
  // autoplay: true 　のみなら既定値での自動再生
  autoplay: {
    delay: 5000, // スライドが切り替わるまでの表示時間(ミリ秒)
    stopOnLast: false, // 最後のスライドまで表示されたら自動再生を中止するか
    disableOnInteraction: true // ユーザーのスワイプ操作を検出したら自動再生を中止するか
  },

  // レスポンシブ化条件
  breakpoints: {
    // 1100ピクセル幅以下になったら
    1100: {
      slidesPerView: 3
    },
    // 660ピクセル幅以下になったら
    660: {
      slidesPerView: 1,
    }
  },

  // ページネーションを表示する場合
  pagination: {
    el: '.swiper-pagination',　 // ページネーションを表示するセレクタ
  },

  // 前後スライドへのナビゲーションを表示する場合
  navigation: {
    nextEl: '.swiper-button-next', // 次のスライドボタンのセレクタ
    prevEl: '.swiper-button-prev', // 前のスライドボタンのセレクタ
  },

  // スクロールバーを表示する場合
  scrollbar: {
    el: '.swiper-scrollbar', // スクロールバーを表示するセレクタ
  }
});


AOS.init();