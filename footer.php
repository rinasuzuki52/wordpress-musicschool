<footer class="l-footer p-footer">
        <div class="p-footer__inner l-inner">
            <nav class="p-footer__nav p-footer-nav">
                <ul class="p-footer-nav__lists">
                    <li class="p-footer-nav__list"><a href="./index.html">ホーム</a></li>
                    <li class="p-footer-nav__list"><a href="./plan.html">料金</a></li>
                    <li class="p-footer-nav__list"><a href="./blog-list.html">ブログ</a></li>
                    <li class="p-footer-nav__list"><a href="./result-list.html">卒業実績</a></li>
                </ul>
            </nav>
            <a class="p-footer__logo" href="./index.html">
                <img srcset="<?php echo get_template_directory_uri(); ?>/images/logo-white.svg" alt="きたむらミュージックスクール">
            </a>
            <p class="p-footer__copyright">
                Copyright &copy; 0000 KITAMURA music school Inc. <br class="u-sp">All Rights
            </p>
            <ul class="p-footer__snsbtn">
                <li>
                    <a href="#">
                        <img srcset="<?php echo get_template_directory_uri(); ?>/images/icon-twitter.svg" alt="twitter">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img srcset="<?php echo get_template_directory_uri(); ?>/images/icon-facebook.svg" alt="Facebook">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img srcset="<?php echo get_template_directory_uri(); ?>/images/icon-youtube.svg" alt="YouTube">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img srcset="<?php echo get_template_directory_uri(); ?>/images/icon-instagram.svg" alt="Instagram">
                    </a>
                </li>
            </ul>
        </div>
    </footer>

<!-- トップへ戻るボタン -->
 <a href="#" class="c-back-btn">
    <div class="c-back-btn__icon">
        <img srcset="<?php echo get_template_directory_uri(); ?>/images/top-back-btn.svg">
    </div>
 </a>

<!-- お問い合わせボタン -->
 <a href="<?php echo get_template_directory_uri(); ?>/contact-form.html" class="c-btn c-btn--contact js-contact-btn">
    お問い合わせ
 </a>

</div>

<!-- js -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script> -->
<?php wp_footer(); ?>
</body>
</html>