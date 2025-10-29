<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>きたむらミュージックスクール</title>
    <meta name="description" content="音楽業界初！収益化までサポートするミュージックスクールです">
    <meta name="keywords" content="音楽教室, ミュージックスクール, ピアノ教室, ギター教室">
    <meta name="robots" content="noindex">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon180x180.png">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon.svg">
    <meta property="og:title" content="きたむらミュージックスクール">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://test.rina-suzuki.com/site1/images/ogp.jpg">
    <meta property="og:url" content="https://test.rina-suzuki.com/site1/">
    <meta property="og:description" content="音楽業界初！収益化までサポートするミュージックスクールです">
    <meta property="og:site_name" content="きたむらミュージックスクール">
    <meta property="og:locale" content="ja_JP">
    <meta name="twitter:card" content="Summary with Large Image">
    <!-- Webフォント -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP:wght@200..900&display=swap" rel="stylesheet">
    <!-- Webフォント -->
<?php wp_head(); ?>
</head>
<body style="display: none;">
<div id="container">
    <header class="l-header p-header">
        <div class="p-header__inner">
            <?php if ( is_front_page() || is_search() ) : ?>
                <h1 class="l-header__logo">
            <?php else : ?>
                <div class="l-header__logo">
             <?php endif; ?>

            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="p-header__logo p-header-logo">
                <div class="p-header-logo__image">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/images/logo-red.svg' ); ?>" alt="きたむらミュージックスクール">
                </div>
            <span class="p-header-logo__text">
            きたむら<br class="u-pc"><span>ミュージックスクール</span>
            </span>
        </a>

        <?php if ( is_front_page() || is_search() ) : ?>
        </h1>
        <?php else : ?>
        </div>
        <?php endif; ?>
            <div class="p-header__right">
                <div class="c-hamburger u-sp">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <nav class="p-header__nav p-header-nav" aria-label="ヘッダーナビゲーション">
                    <?php
                    wp_nav_menu(
                    array(
                        'menu_class'     => 'p-header-nav__lists',
                        'theme_location' => 'primary',
                        'container'      => false,
                    )
                    );
                    ?>
                </nav>
            </div>
        </div>
    </header>