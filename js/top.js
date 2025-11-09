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
  $('.slider').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  });

});