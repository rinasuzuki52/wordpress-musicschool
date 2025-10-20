<?php get_header(); ?>
    <main class="p-result-details">
        <!-- パンくずリスト -->
        <?php get_template_part('template-parts/breadcrumbs'); ?>
        <!-- result-details -->
        <section class="p-result-details__section p-details">
            <div class="p-details__inner l-inner">
                <div class="p-details__imagearea">
                    <div class="p-details__image">
                        <picture>
                            <source media="(max-width: 767px)" srcset="images/result-details/voice01sp.jpg">
                            <img src="images/result-details/voice01.jpg" alt="タイトルが入ります">
                        </picture>
                    </div>
                    <div class="c-category p-details__category">
                        ポップス
                    </div>
                </div>
                <h1 class="p-details__title">
                    タイトルが入ります。タイトルが入ります。タイトルが入ります。
                </h1>
                <time datetime="0000-00-00" class="p-details__time">
                    0000.00.00
                </time>
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
     <?php get_template_part('template-parts/fix-area'); ?>
    </main>
    <?php get_footer(); ?>  