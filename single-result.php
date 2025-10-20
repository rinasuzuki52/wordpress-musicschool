<?php get_header(); ?>
    <main class="p-result-details">
        <!-- パンくずリスト -->
        <?php get_template_part('template-parts/breadcrumbs'); ?>
        <!-- result-details -->
        <?php
        if (have_posts()):
            while (have_posts()):
                the_post();
        ?>
        <section class="p-result-details__section p-details">
            <div class="p-details__inner l-inner">
                <div class="p-details__imagearea">
                    <div class="p-details__image">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('large'); ?>
                        <?php else : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/common/no-image.png" alt="No image">
                         <?php endif; ?>
                    </div>
                    <div class="c-category p-details__category">
                        <?php
                        $terms = get_the_terms(get_the_ID(), 'genre');
                        if (!empty($terms) && !is_wp_error($terms)) {
                            echo $terms[0]->name;
                        }
                        ?>
                    </div>
                </div>
                <h1 class="p-details__title">
                    <?php the_title(); ?>
                </h1>
                <time datetime="the_time('Y-m-d')"><?php the_time('Y.m.d'); ?></time>
                <div class="p-details__tablearea">
                    <table class="p-details__table">
                        <tbody>
                            <tr>
                                <td>名前</td>
                                <td>丸山</td>
                            </tr>
                            <tr>
                                <td>職業</td>
                                <td>証券会社勤務</td>
                            </tr>
                            <tr>
                                <td>ジャンル</td>
                                <td>入力欄</td>
                            </tr>
                            <tr>
                                <td>実績</td>
                                <td>入力欄</td>
                            </tr>
                            <tr>
                                <td>SNS</td>
                                <td>入力欄</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="p-details__text">
                        昔やっていた音楽活動で、副収入が得られるようになったので、毎日充実するようになりました。
                    </p>
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
     <?php get_template_part('template-parts/fix-area'); ?>
    </main>
    <?php get_footer(); ?>  