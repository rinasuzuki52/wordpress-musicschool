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

  // css登録
  wp_register_style('common-style', get_theme_file_uri('/css/style.css'), array(), $now);

  // 共通CSS
  wp_enqueue_style('slick-style', get_theme_file_uri('/css/slick.css'), array(), NULL);
  wp_enqueue_style('common-style');

  // WordPress提供のjquery.jsを読み込まない
  wp_deregister_script('jquery');

  // jQueryの読み込み
  wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', "", NULL, true);

  //JS登録
  wp_register_script('common-script', get_theme_file_uri('/js/main.js'), array('jquery'), $now, true);

  // 共通のJS
  wp_enqueue_script('slick-script', get_theme_file_uri('/js/slick.min.js'), array('jquery'), NULL, true);
  wp_enqueue_script('common-script');

}
add_action('wp_enqueue_scripts', 'add_files');

// --------------------------------------------------
//1ページに表示する記事数指定
// --------------------------------------------------

function my_page_conditions($query)
{
  // 管理画面ではなく、メインクエリの場合のみ実行
  if (!is_admin() && $query->is_main_query()) {

    // カスタム投稿タイプ 'blog' または 'result' のアーカイブページの場合
    if (is_post_type_archive(['blog', 'result'])) {
        $query->set('posts_per_page', 10);
    }

    // 検索結果ページの場合
    if ($query->is_search()) {
        $query->set('post_type', 'blog');
    }
  }
}
add_action('pre_get_posts', 'my_page_conditions');


// --------------------------------------------------
//管理画面で投稿を非表示
// --------------------------------------------------

function remove_menus () {
  global $menu;
  remove_menu_page( 'edit.php' );
}
add_action('admin_menu', 'remove_menus');


// --------------------------------------------------
//Contact Form 7で自動挿入されるPタグ、brタグを削除
// --------------------------------------------------
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false()
{
  return false;
}

// --------------------------------------------------
// 管理画面「外観＞メニュー」 を表示
// --------------------------------------------------
function register_my_menus()
{
  register_nav_menus(array(
    'primary' => 'Primary Menu',
    'footer'  => 'Footer Menu',
  ));
}
add_action('after_setup_theme', 'register_my_menus');

// --------------------------------------------------
// SVG表示
// --------------------------------------------------
function add_file_types_to_uploads($file_types){
  $new_filetypes = array();
  $new_filetypes['svg'] = 'image/svg+xml';
  $file_types = array_merge($file_types, $new_filetypes );
  return $file_types;
}
add_action('upload_mimes', 'add_file_types_to_uploads');


function my_enqueue_scripts() {
  // jQueryを読み込み（すでに読み込んでいれば不要）
  wp_enqueue_script('jquery');

  // メインJS読み込み
  wp_enqueue_script(
    'main-js',
    get_theme_file_uri('/js/main.js'),
    array('jquery'),
    null,
    true
  );

  // JSへテーマURLを渡す
  wp_localize_script('main-js', 'themeVars', array(
    'themeUrl' => get_template_directory_uri()
  ));
}
add_action('wp_enqueue_scripts', 'my_enqueue_scripts');
