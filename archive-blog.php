<?php get_header(); ?>
    <main class="p-blog-list">
        <!-- ファーストビュー -->
        <section class="p-blog-list__fv p-fv-lower">
            <div class="p-fv-lower__bg">
                <picture>
                    <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/blog-list/blog-sp.jpg">
                    <img srcset="<?php echo get_template_directory_uri(); ?>/images/blog-list/blog.jpg" alt="プラン・料金">
                </picture>
            </div>
            <div class="p-fv-lower__title">
                <h1>ブログ</h1>
            </div>
        </section>
        <!-- パンくずリスト -->
        <div class="p-blog-list__breadcrumbs p-blog-list-breadcrumbs p-breadcrumbs">
            <div class="p-blog-list-breadcrumbs__inner p-breadcrumbs__inner l-inner">
                <nav class="p-breadcrumbs__list">
                    <ul>
                       <?php if (function_exists('bcn_display')) {
                            bcn_display();
                        } ?> 
                      <!-- <li><a class="p-breadcrumbs__link" href="./index.html">ホーム</a></li>
                      <li><p class="p-breadcrumbs__item">＞</p></li>
                      <li><p class="p-breadcrumbs__item">ブログ</p></li> -->
                    </ul>
                </nav>
            </div>
        </div>
        
        <!-- blog-list -->
        <section class="p-blog-list__section p-list-section">
            <div class="p-list-section__inner l-inner">
                <h2 class="p-list-section__title c-title2">
                    ブログ一覧
                </h2>
            <div class="p-list-section__items">
            <?php
            if (have_posts()):
            while (have_posts()):
            the_post();
            ?>
                <a href="./blog-details.html" class="p-list-section__item p-list-item">
                    <div class="p-list-item__wrap">
                        <div class="p-list-item__right">
                            <div class="p-list-item__image">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail(); ?>
                            <?php else : ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/images/common/no-image.png" alt="No image">
                            <?php endif; ?>
                            </div>
                            <div class="c-category p-list-item__category">
                                <?php
                                $terms = get_the_terms(get_the_ID(), 'blog_cate');
                                if (!empty($terms) && !is_wp_error($terms)) {
                                    echo esc_html($terms[0]->name);
                                }
                                ?>
                            </div>
                        </div>
                        <div class="p-list-item__textarea">
                            <h3 class="p-list-item__title js-ellipsis25">
                                <?php echo wp_trim_words(get_the_title(), 26, '...'); ?>
                            </h3>
                            <time datetime="<?php the_time('Y-m-d'); ?>" class="p-list-item__time">
                                <?php the_time('Y.m.d'); ?>
                            </time>
                            <p class="p-list-item__article">
                                <?php echo wp_trim_words(get_the_content(), 120, '...'); ?>
                            </p>
                        </div>
                    </div>
                </a>
            <?php
                endwhile;
            endif;
            ?>
            </div>
            <!-- ページネーション -->
             <div class="c-pager">
                <?php wp_pagenavi(); ?>
                <!-- <li class="c-pagination__item c-pagination__active">
                    <a>1</a>
                </li>
                <li class="c-pagination__item">
                    <a href="./blog-list.html">2</a>
                </li>
                <li class="c-pagination__item">
                    <a href="./blog-list.html">3</a>
                </li>
                <li class="c-pagination__disable">
                    <span>…</span>
                </li>
                <li class="c-pagination__item">
                    <a href="./blog-list.html">9</a>
                </li> -->
        </div>
            </div>
        </section>
    <?php get_template_part('template-parts/fix-area'); ?>
    </main>
<?php get_footer(); ?> 