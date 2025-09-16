<?php
// --------------------------------------------------
// 最初の設定
// --------------------------------------------------
function custom_theme_setup()
{
  add_theme_support('automatic-feed-links');
  add_theme_support('post-thumbnails');
  add_theme_support('title-tag');
  add_theme_support(
    'html5',
    array(
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
      'style',
      'script'
    )
  );
  add_theme_support('wp-block-styles');
  add_theme_support('responsive-embeds');
}
add_action('after_setup_theme', 'custom_theme_setup');

// --------------------------------------------------
//ファイル読み込み
// --------------------------------------------------
function add_files()
{
  $now = date('YmdHis');

  ===== CSS =====
  // 先に slick.css、その後に style.css（上書きが効く順に）
  wp_enqueue_style('slick-style', get_theme_file_uri('/css/slick.css'), [], $ver);
  wp_enqueue_style('common-style', get_theme_file_uri('/css/style.css'), ['slick-style'], $ver);


  ===== JS =====
  // WordPress提供のjquery.jsを読み込まない
  wp_deregister_script('jquery');

  // CDN の jQuery（フッター）
  wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', [], null, true);
  wp_enqueue_script('jquery');

  // Slick 本体（jQuery 依存）
  wp_enqueue_script('slick-script', get_theme_file_uri('/js/slick.min.js'), ['jquery'], $ver, true);

  // メインスクリプト（Slick を使うなら slick-script に依存させる）
  wp_enqueue_script('common-script', get_theme_file_uri('/js/main.js'), ['jquery', 'slick-script'], $ver, true);

  // TOP 専用
  if ( is_front_page() ) {
    wp_enqueue_script('top-script', get_theme_file_uri('/js/top.js'), ['jquery', 'slick-script', 'common-script'], $ver, true);
  }
}
add_action('wp_enqueue_scripts', 'add_files');