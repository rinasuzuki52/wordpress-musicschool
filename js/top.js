'use strict';

$(function () {

  // -----------------------------------
  // アコーディオン
  // -----------------------------------
  $('.p-qa-list__a').hide();

  // 質問クリックで開閉
  $('.p-qa-list__q').off('click.qa').on('click.qa', function (e) {
    e.preventDefault();
    e.stopPropagation();

    const $q = $(this);
    const $a = $q.next('.p-qa-list__a');

    if ($a.is(':visible')) {
      $a.stop(true, true).slideUp(200);
      $q.removeClass('active');
    } else {
      $a.stop(true, true).slideDown(200);
      $q.addClass('active');
    }
  });

  // 答えをクリックしても閉じる
  $('.p-qa-list__a').on('click', function () {
    const $answer = $(this);
    const $question = $answer.prev('.p-qa-list__q');
    $answer.slideUp();
    $question.removeClass('active');
  });

  // -----------------------------------
  // スライダー
  // -----------------------------------
  if (document.querySelector('.p-voice-slider')) {
  const voiceSlider = new Swiper('.p-voice-slider', {
    loop: true,
    slidesPerView: 'auto', // ← 幅はCSSで指定するので'auto'
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      // PC（768px以上）：CSS側で3枚分の幅を調整
      768: {
        slidesPerView: 'auto',
      },
      // SP（767px以下）：1枚全幅
      0: {
        slidesPerView: 1,
      },
    },
  });
}

});