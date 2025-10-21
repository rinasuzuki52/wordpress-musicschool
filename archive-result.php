<?php get_header(); ?>
    <main class="p-result-list">
        <!-- ファーストビュー -->
        <section class="p-blog-list__fv p-fv-lower">
            <div class="p-fv-lower__bg">
                <picture>
                    <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/result-list/result.jpg">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/result-list/result.jpg" alt="卒業実績">
                </picture>
            </div>
            <div class="p-fv-lower__title">
                <h1>卒業実績</h1>
            </div>
        </section>
        <!-- パンくずリスト -->
        <?php get_template_part('template-parts/breadcrumbs'); ?>
        <!-- result-list -->
        <section class="p-result-list__section p-result-section">
            <div class="p-result-section__inner l-inner">
                <h2 class="p-result-section__title c-title2">
                    卒業実績一覧
                </h2>
                <div class="p-result-section__list">
                <?php
                if (have_posts()):
                    while (have_posts()):
                        the_post();
                ?>
                    <div class="p-result-section__item">
                        <a href="result-details.html">
                            <div class="<?php the_permalink(); ?>">
                                <div class="p-result-section__image">
                                 <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail(); ?>
                                <?php else : ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/common/no-image.png" alt="No image">
                                <?php endif; ?>
                                </div>
                                <div class="c-category p-result-section__category">
                                    <?php
                                    $terms = get_the_terms(get_the_ID(), 'genre');
                                    if (!empty($terms) && !is_wp_error($terms)) {
                                        echo $terms[0]->name;
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="p-result-section__textarea">
                                <h3 class="p-result-section__texttitle"><?php echo wp_trim_words(get_the_title(), 32, '...'); ?></h3>
                                <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                            </div>
                        </a>
                    </div>
                    <?php
                        endwhile;
                    endif;
                    ?>
                    <!-- <div class="p-result-section__item">
                        <a href="result-details.html">
                            <div class="p-result-section__imagearea">
                                <div class="p-result-section__image">
                                <picture>
                                    <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/result-list/result02.jpg">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/result-list/result02.jpg" alt="タイトルが入ります">
                                </picture>
                                </div>
                                <div class="c-category p-result-section__category">
                                   ロック
                                </div>
                            </div>
                            <div class="p-result-section__textarea">
                                <h3 class="p-result-section__texttitle">タイトルが入ります。タイトルが入ります。タイトルが入ります。</h3>
                                <time datetime="0000-00-00">0000.00.00</time>
                            </div>
                        </a>
                    </div>
                    <div class="p-result-section__item">
                        <a href="result-details.html">
                            <div class="p-result-section__imagearea">
                                <div class="p-result-section__image">
                                <picture>
                                    <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/result-list/result03.jpg">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/result-list/result03.jpg" alt="タイトルが入ります">
                                </picture>
                                </div>
                                <div class="c-category p-result-section__category">
                                   ジャズ
                                </div>
                            </div>
                            <div class="p-result-section__textarea">
                                <h3 class="p-result-section__texttitle">タイトルが入ります。タイトルが入ります。タイトルが入ります。</h3>
                                <time datetime="0000-00-00">0000.00.00</time>
                            </div>
                        </a>
                    </div>
                    <div class="p-result-section__item">
                        <a href="result-details.html">
                            <div class="p-result-section__imagearea">
                                <div class="p-result-section__image">
                                <picture>
                                    <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/result-list/result04.jpg">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/result-list/result04.jpg" alt="タイトルが入ります">
                                </picture>
                                </div>
                                <div class="c-category p-result-section__category">
                                   ラテン
                                </div>
                            </div>
                            <div class="p-result-section__textarea">
                                <h3 class="p-result-section__texttitle">タイトルが入ります。タイトルが入ります。タイトルが入ります。</h3>
                                <time datetime="0000-00-00">0000.00.00</time>
                            </div>
                        </a>
                    </div>
                    <div class="p-result-section__item">
                        <a href="result-details.html">
                            <div class="p-result-section__imagearea">
                                <div class="p-result-section__image">
                                <picture>
                                    <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/result-list/result05.jpg">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/result-list/result05.jpg" alt="タイトルが入ります">
                                </picture>
                                </div>
                                <div class="c-category p-result-section__category">
                                   クラシック
                                </div>
                            </div>
                            <div class="p-result-section__textarea">
                                <h3 class="p-result-section__texttitle">タイトルが入ります。タイトルが入ります。タイトルが入ります。</h3>
                                <time datetime="0000-00-00">0000.00.00</time>
                            </div>
                        </a>
                    </div>
                    <div class="p-result-section__item">
                        <a href="result-details.html">
                            <div class="p-result-section__imagearea">
                                <div class="p-result-section__image">
                                <picture>
                                    <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/result-list/result06.jpg">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/result-list/result06.jpg" alt="タイトルが入ります">
                                </picture>
                                </div>
                                <div class="c-category p-result-section__category">
                                   ポップス
                                </div>
                            </div>
                            <div class="p-result-section__textarea">
                                <h3 class="p-result-section__texttitle">タイトルが入ります。タイトルが入ります。タイトルが入ります。</h3>
                                <time datetime="0000-00-00">0000.00.00</time>
                            </div>
                        </a>
                    </div>
                    <div class="p-result-section__item">
                        <a href="result-details.html">
                            <div class="p-result-section__imagearea">
                                <div class="p-result-section__image">
                                <picture>
                                    <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/result-list/result07.jpg">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/result-list/result07.jpg" alt="タイトルが入ります">
                                </picture>
                                </div>
                                <div class="c-category p-result-section__category">
                                   ロック
                                </div>
                            </div>
                            <div class="p-result-section__textarea">
                                <h3 class="p-result-section__texttitle">タイトルが入ります。タイトルが入ります。タイトルが入ります。</h3>
                                <time datetime="0000-00-00">0000.00.00</time>
                            </div>
                        </a>
                    </div>
                    <div class="p-result-section__item">
                        <a href="result-details.html">
                            <div class="p-result-section__imagearea">
                                <div class="p-result-section__image">
                                <picture>
                                    <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/result-list/result08.jpg">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/result-list/result08.jpg" alt="タイトルが入ります">
                                </picture>
                                </div>
                                <div class="c-category p-result-section__category">
                                   ジャズ
                                </div>
                            </div>
                            <div class="p-result-section__textarea">
                                <h3 class="p-result-section__texttitle">タイトルが入ります。タイトルが入ります。タイトルが入ります。</h3>
                                <time datetime="0000-00-00">0000.00.00</time>
                            </div>
                        </a>
                    </div>
                    <div class="p-result-section__item">
                        <a href="result-details.html">
                            <div class="p-result-section__imagearea">
                                <div class="p-result-section__image">
                                <picture>
                                    <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/result-list/result09.jpg">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/result-list/result09.jpg" alt="タイトルが入ります">
                                </picture>
                                </div>
                                <div class="c-category p-result-section__category">
                                   ラテン
                                </div>
                            </div>
                            <div class="p-result-section__textarea">
                                <h3 class="p-result-section__texttitle">タイトルが入ります。タイトルが入ります。タイトルが入ります。</h3>
                                <time datetime="0000-00-00">0000.00.00</time>
                            </div>
                        </a>
                    </div>
                    <div class="p-result-section__item">
                        <a href="result-details.html">
                            <div class="p-result-section__imagearea">
                                <div class="p-result-section__image">
                                <picture>
                                    <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/result-list/result10.jpg">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/result-list/result10.jpg" alt="タイトルが入ります">
                                </picture>
                                </div>
                                <div class="c-category p-result-section__category">
                                   クラシック
                                </div>
                            </div>
                            <div class="p-result-section__textarea">
                                <h3 class="p-result-section__texttitle">タイトルが入ります。タイトルが入ります。タイトルが入ります。</h3>
                                <time datetime="0000-00-00">0000.00.00</time>
                            </div>
                        </a>
                    </div> -->
                </div>
            <!-- ページネーション -->
             <div class="c-pager">
                <?php wp_pagenavi(); ?>
            </div>
        </div>
    </section>
   
    <?php get_template_part('template-parts/fix-area'); ?>
</main>
<?php get_footer(); ?>  