'use strict';

// // ハンバーガーメニュー

$(function() {

    $('.c-hamburger').click(function() {
        $(this).toggleClass('active');
        $('.p-header-nav__lists').toggleClass('active');
    });

});


// スライダー
$(document).ready(function(){
  $('.p-voice-slider').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    infinite: true,
    arrows: true,
    prevArrow: '<img src="images/top/arrow-l.svg" class="slick-prev" alt="前へ">',
    nextArrow: '<img src="images/top/arrow-r.svg" class="slick-next" alt="次へ">',
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          arrows: true,
          dots: false
        }
      }
    ]
  });
});


// アコーディオン

$(function() {
  $('.p-qa-list__a').hide(); // 最初は答えを非表示に

  $('.p-qa-list__q').on('click', function() {
    var $answer = $(this).next('.p-qa-list__a');
    var $question = $(this);

    if ($answer.is(':visible')) {
      $answer.slideUp();
      $question.removeClass('active');
    } else {
      $answer.slideDown();
      $question.addClass('active');
    }
  });

  // ▼追加部分：答えをクリックしても閉じるようにする
  $('.p-qa-list__a').on('click', function() {
    var $answer = $(this);
    var $question = $answer.prev('.p-qa-list__q');

    $answer.slideUp();
    $question.removeClass('active');
  });
});


// 5文字まで表示
$(function(){
  // 表示文字数の上限（ここでは25文字に設定）
  const LIMIT = 5;

  // 対象となるセレクタをカンマでつなぐ
  $('.c-caption').each(function(){
    const txt = $(this).text().trim();
    if (txt.length > LIMIT) {
      // substr の第1引数に0, 第2引数にLIMIT を指定
      $(this).text( txt.substr(0, LIMIT) + '…' );
    }
  });
});


// 20文字まで表示
$(function(){
  // 表示文字数の上限（ここでは25文字に設定）
  const LIMIT = 25;

  // 対象となるセレクタをカンマでつなぐ
  $('.p-blog-card__title, .p-list-item__title, .p-pagination__title, .p-prev__title').each(function(){
    const txt = $(this).text().trim();
    if (txt.length > LIMIT) {
      // substr の第1引数に0, 第2引数にLIMIT を指定
      $(this).text( txt.substr(0, LIMIT) + '…' );
    }
  });
});

// 15文字まで
$(function(){
  // 表示文字数の上限（ここでは15文字に設定）
  const LIMIT = 15;

  // 対象となるセレクタをカンマでつなぐ
  $('.p-side-recommend__title').each(function(){
    const txt = $(this).text().trim();
    if (txt.length > LIMIT) {
      // substr の第1引数に0, 第2引数にLIMIT を指定
      $(this).text( txt.substr(0, LIMIT) + '…' );
    }
  });
});

// お問い合わせボタン、TOPへ戻るボタン

$(function () {
  var btn = $('.c-contact-btn');
  var topArrow = $('.c-back-btn');
  var footer = $('.l-footer');

  $(window).on('scroll', function () {
    var scrollTop = $(this).scrollTop();
    var windowHeight = $(window).height();
    var footerTop = footer.offset().top;
    var btnHeight = btn.length ? btn.outerHeight() : 0;
    var bottomSpace = (window.innerWidth <= 767) ? 20 : 30;

    // --- スクロール量による表示制御 ---
    if (scrollTop > 100) {
      btn.addClass('active');
      topArrow.addClass('active');
    } else {
      btn.removeClass('active');
      topArrow.removeClass('active');
    }

    // --- フッター手前で位置を変える ---
    if (scrollTop + windowHeight > footerTop - bottomSpace) {
      // absolute配置（フッター上に重ならないように）
      if (btn.length) {
        btn.css({
          position: 'absolute',
          bottom: windowHeight - footerTop + 'px',
        });
        topArrow.css({
          position: 'absolute',
          bottom: windowHeight - footerTop + btnHeight + bottomSpace + 'px',
        });
      } else {
        topArrow.css({
          position: 'absolute',
          bottom: windowHeight - footerTop + bottomSpace + 'px',
        });
      }
    } else {
      // fixed配置（通常スクロール中）
      if (btn.length) {
        btn.css({
          position: 'fixed',
          bottom: '0px',
        });
        topArrow.css({
          position: 'fixed',
          bottom: (window.innerWidth <= 767 ? 69 : 81) + 'px', // お問い合わせボタンの上
        });
      } else {
        topArrow.css({
          position: 'fixed',
          bottom: bottomSpace + 'px',
        });
      }
    }
  });

  // --- トップへ戻るボタンのスムーススクロール ---
  $('.c-back-btn').click(function (event) {
    event.preventDefault();
    $('html, body').animate({ scrollTop: 0 }, 700, 'swing');
  });
});
