<?php get_header(); ?>
    <main class="p-blog-details">
        <!-- パンくずリスト -->
        <?php get_template_part('template-parts/breadcrumbs'); ?>
        <!-- <div class="p-result-details__breadcrumbs p-result-details-breadcrumbs p-breadcrumbs">
            <div class="p-result-details-breadcrumbs__inner p-breadcrumbs__inner l-inner">
                <nav class="p-breadcrumbs__list">
                    <ul>
                      <li><a class="p-breadcrumbs__link" href="./index.html">ホーム</a></li>
                      <li><p class="p-breadcrumbs__item">></p></li>
                      <li><a class="p-breadcrumbs__link" href="./blog-list.html">ブログ</a></li>
                      <li><p class="p-breadcrumbs__item">></p></li>
                      <li><a class="p-breadcrumbs__link" href="./blog-list.html">ギター</a></li>
                      <li><p class="p-breadcrumbs__item">></p></li>
                      <li><p class="p-breadcrumbs__item">アルペジオが劇的に向上する３つの習慣</p></li>
                    </ul>
                </nav>
            </div>
        </div> -->
        <!-- blog-details -->
        <div class="l-two-col-container l-inner">
            <!-- メイン  -->
            <div class="l-two-col-container__main">
                <!-- ブログ詳細エリア -->
                <?php
                if (have_posts()):
                 while (have_posts()):
                  the_post();
                ?>
                <section class="p-blog-details__main">
                    <div class="p-blog-details__head">
                        <div class="p-blog-details__imgarea">
                            <div class="p-blog-details__image">
                               <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('large'); ?>
                                <?php else : ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/common/no-image.png" alt="No image">
                                <?php endif; ?>
                            </div>
                            <div class="c-category p-blog-details__category">
                                <?php
                                $terms = get_the_terms(get_the_ID(), 'blog_cate');
                                if (!empty($terms) && !is_wp_error($terms)) {
                                    echo esc_html($terms[0]->name);
                                }
                                ?>
                            </div>
                        </div>
                        <h1 class="p-blog-details__title">
                            <?php the_title(); ?>
                        </h1>
                        <time datetime="<?php the_time('Y-m-d'); ?>" class="p-blog-details__time">
                            <?php the_time('Y.m.d'); ?>
                        </time>
                        <div class="p-blog-details__sns p-sns-share">
                            <?php
                            $url = urlencode(get_permalink());
                            $title = urlencode(get_the_title());
                            ?>
                            <a href="<?php echo esc_url('https://www.facebook.com/share.php?u=' . $url); ?>" class="p-sns-share__item p-facebook">
                                <span class="p-facebook__icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/blog-details/icon-share-facebook.svg" alt="facebook">
                                </span>
                                <span class="p-sns-share__name u-pc">Facebook</span>
                            </a>
                            <a href="<?php echo esc_url('https://x.com/share?url=' . $url . '&text=' . $title); ?>" class="p-sns-share__item p-twitter">
                                <span class="p-twitter__icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/blog-details/icon-share-twitter.svg" alt="twitter">
                                </span>
                                <span class="p-sns-share__name u-pc">Twitter</span>
                            </a>
                            <a href="<?php echo esc_url('http://b.hatena.ne.jp/add?mode=confirm&url=' . $url . '&title=' . $title); ?>" class="p-sns-share__item p-hatena">
                                <span class="p-hatena__icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/blog-details/icon-share-hatena.svg" alt="hatena">
                                </span>
                                <span class="p-sns-share__name u-pc">Hatena</span>
                            </a>
                            <a href="<?php echo esc_url('https://social-plugins.line.me/lineit/share?url=' . $url); ?>" class="p-sns-share__item p-line">
                                <span class="p-line__icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/blog-details/icon-share-line.svg" alt="line">
                                </span>
                                <span class="p-sns-share__name u-pc">Twitter</span>
                            </a>
                            <a href="<?php echo esc_url('https://getpocket.com/edit?url=' . $url . '&title=' . $title); ?>" class="p-sns-share__item p-pocket">
                                <span class="p-pocket__icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/blog-details/icon-share-pocket.svg" alt="pocket">
                                </span>
                                <span class="p-sns-share__name u-pc">Pocket</span>
                            </a>
                        </div>
                    </div>
                    <div class="p-blog-details__contents">
                        <div class="p-blog-details__body p-blog-body">
                            <?php the_content(); ?>
                            <!-- <p class="p-blog-body__text">
                                本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。
                            </p>
                            <h2 class="p-blog-body__title">
                               H2見出しが入ります。H2見出しが入ります。 
                            </h2>
                            <p class="p-blog-body__text">
                                本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。
                            </p>
                            <div class="p-blog-body__image">
                                 <picture>
                                    <source media="(max-width: 767px)" srcset="images/blog-details/blog02sp.jpg">
                                    <img src="images/blog-details/blog02.jpg" alt="H2見出しが入ります">
                                </picture>
                            </div>
                            <ul class="p-blog-body__list">
                                <li class="p-blog-body__listitem">・リストが入ります</li>
                                <li class="p-blog-body__listitem">・リストが入ります</li>
                                <li class="p-blog-body__listitem">・リストが入ります</li>
                            </ul>
                            <span class="p-blog-body__line"></span>
                            <h3 class="p-blog-body__smalltitle">
                                H3見出しが入ります。H3見出しが入ります。
                            </h3>
                            <blockquote class="p-blog-body__blockquote">
                                <span class="p-blog-body__quatation">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/blog-details/icon-blockquote.svg" alt="">
                                </span>
                                <p class="p-blog-body__text p-blog-body__quatationtext">
                                    本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。
                                </p>
                            </blockquote>
                            <a href="#" class="p-blog-body__link">テキストリンク</a> -->
                        </div>

                <!-- ページネーション  -->
                <?php get_template_part('template-parts/single-pagination'); ?>

                <!-- 関連記事 -->
                <?php get_template_part('template-parts/related-articles'); ?>
            </div>
        </section>
        <?php
         endwhile;
        endif;
        ?>
        </div>
        <?php get_sidebar(); ?>
            <!-- サイドバーエリア
            <div class="l-two-col-container__side">
                <div class="p-side__magazine p-side-magazine">
                    <div class="p-side-magazine__title c-side-title">
                        <p>無料メールマガジン</p>
                    </div>
                    <div class="p-side-magazine__contents">
                        <a href="./blog-details.html" class="p-side-magazine__banner">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/blog-details/bannerarticle.jpg" alt="バナー広告">
                            <p>バナー広告</p>
                        </a>
                    </div>
                </div>
                <div class="p-side__search p-side-search">
                    <div class="p-side-search__title c-side-title">
                        <p>ブログ内を検索</p>
                    </div>
                    <div class="p-side-search__contents">
                        <form class="p-side-search__form" action="./search.html">
                            <input class="p-side-search__input" type="text" placeholder="検索ワード">
                            <button class="p-side-search__button" type="submit" class="search-btn">
                                <span>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/blog-details/icon-search.svg" alt="検索">
                                </span>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="p-side__recommend p-side-recommend">
                    <div class="p-side-recommend__title c-side-title">
                        <p>おすすめの記事</p>
                    </div>
                    <div class="p-side-recommend__contents">
                    <div class="p-side-recommend__items">
                        <a href="./blog-details.html" class="p-side-recommend__item">
                            <div class="p-side-recommend__image">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/blog-details/blogside.jpg" alt="タイトルが入ります。タイトル">
                            </div>
                            <div class="p-side-recommend__textarea">
                                <div class="p-side-recommend__title js-ellipsis15">
                                    <h3>タイトルが入ります。タイトル</h3>
                                </div>
                            </div>
                        </a>
                        <a href="./blog-details.html" class="p-side-recommend__item">
                            <div class="p-side-recommend__image">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/blog-details/blogside.jpg" alt="タイトルが入ります。タイトル">
                            </div>
                            <div class="p-side-recommend__textarea">
                                <div class="p-side-recommend__title js-ellipsis15">
                                    <h3>タイトルが入ります。タイトル</h3>
                                </div>
                            </div>
                        </a>
                        <a href="./blog-details.html" class="p-side-recommend__item">
                            <div class="p-side-recommend__image">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/blog-details/blogside.jpg" alt="タイトルが入ります。タイトル">
                            </div>
                            <div class="p-side-recommend__textarea">
                                <div class="p-side-recommend__title js-ellipsis15">
                                    <h3>タイトルが入ります。タイトル</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    </div>
                </div>
                <div class="p-side__category p-side-category">
                    <div class="p-side-category__title c-side-title">
                        <p>カテゴリー</p>
                    </div>
                    <div class="p-side-category__contents">
                        <ul>
                            <li>
                                <a href="./blog-list.html" class="p-side-category__link">カテゴリー</a>
                            </li>
                            <li>
                                <a href="./blog-list.html" class="p-side-category__link">カテゴリー</a>
                            </li>
                            <li>
                                <a href="./blog-list.html" class="p-side-category__link">カテゴリー</a>
                            </li>
                            <li>
                                <a href="./blog-list.html" class="p-side-category__link">カテゴリー</a>
                            </li>
                            <li>
                                <a href="./blog-list.html" class="p-side-category__link">カテゴリー</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div> -->
        </div>
    <?php get_template_part('template-parts/fix-area'); ?>
    </main>
 <?php get_footer(); ?>   