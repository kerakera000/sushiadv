<?php
global $wp_path;
global $site_url;
wp_reset_postdata();

$footer_reservation_text_ja = get_option('footer_reservation_text_ja', '');
$footer_inquiry_text_ja = get_option('footer_inquiry_text_ja', '');
$footer_policy_text_ja = get_option('footer_policy_text_ja', '');
$footer_termsofservice_text_ja = get_option('footer_termsofservice_text_ja', '');
$footer_transaction_text_ja = get_option('footer_transaction_text_ja', '');

$footer_reservation_text_en = get_option('footer_reservation_text_en', '');
$footer_inquiry_text_en = get_option('footer_inquiry_text_en', '');
$footer_policy_text_en = get_option('footer_policy_text_en', '');
$footer_termsofservice_text_en = get_option('footer_termsofservice_text_en', '');
$footer_transaction_text_en = get_option('footer_transaction_text_en', '');

$footer_reservation_text_cn = get_option('footer_reservation_text_cn', '');
$footer_inquiry_text_cn = get_option('footer_inquiry_text_cn', '');
$footer_policy_text_cn = get_option('footer_policy_text_cn', '');
$footer_termsofservice_text_cn = get_option('footer_termsofservice_text_cn', '');
$footer_transaction_text_cn = get_option('footer_transaction_text_cn', '');

?>

<!-- footer -->

<footer class="footer">
    <div class="footer__contactbox">
        <div class="logo">
            <img class="img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/footer/footer-icon.png" alt="">
            <img class="imgsp" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/footer/sushiadv_white.png" alt="">
        </div>

        <div class="contact">
            <div class="title flexlang-ja" style="display: none;">
                <?php echo wpautop(esc_html($footer_reservation_text_ja)); ?>・<?php echo wpautop(esc_html($footer_inquiry_text_ja)); ?>
            </div>
            <div class="title flexlang-en" style="display: none;">
                <?php echo wpautop(esc_html($footer_reservation_text_en)); ?>・<?php echo wpautop(esc_html($footer_inquiry_text_en)); ?>
            </div>
            <div class="title flexlang-cn" style="display: none;">
                <?php echo wpautop(esc_html($footer_reservation_text_cn)); ?>・<?php echo wpautop(esc_html($footer_inquiry_text_cn)); ?>
            </div>
            <div class="buttons">
                <a href="" class="button flexlang-ja" style="display: none;">
                    <?php echo wpautop(esc_html($footer_reservation_text_ja)); ?>はこちら
                </a>
                <a href="" class="button flexlang-en" style="display: none;">
                    Click here to <?php echo wpautop(esc_html($footer_reservation_text_en)); ?>
                </a>
                <a href="" class="button flexlang-cn" style="display: none;">
                    <?php echo wpautop(esc_html($footer_reservation_text_cn)); ?>点击此处
                </a>
                
                <a href="" class="button flexlang-ja" style="display: none;">
                    <?php echo wpautop(esc_html($footer_inquiry_text_ja)); ?>はこちら
                </a>
                <a href="" class="button flexlang-en" style="display: none;">
                    Click here to <?php echo wpautop(esc_html($footer_inquiry_text_en)); ?>
                </a>
                <a href="" class="button flexlang-cn" style="display: none;">
                    <?php echo wpautop(esc_html($footer_inquiry_text_cn)); ?>点击此处
                </a>
            </div>
        </div>

    </div>

    <div class="footer__link-box">
        <a href="/" class="link">
            TOKYO
        </a>
        <a href="/noto" class="link">
            NOTO
        </a>
        <a href="/reserve-tokyo" class="link">
            RESERVE
        </a>
        <a href="/contact" class="link">
            CONTACT
        </a>
    </div>

    <div class="footer__icons">
        <a href="https://www.instagram.com/sushi_adventure_tokyo/" class="icon">
            <img class="img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/footer/instagram.svg" alt="">
        </a>
        <a href="" class="icon">
            <img class="img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/footer/facebook.svg" alt="">
        </a>
    </div>

    <div class="footer__policy">
        <a href="/privacypolicy-ja" class="link lang-ja" style="display: none;">
            <?php echo wpautop(esc_html($footer_policy_text_ja)); ?>
        </a>
        <a href="/privacypolicy-en" class="link lang-en" style="display: none;">
            <?php echo wpautop(esc_html($footer_policy_text_en)); ?>
        </a>
        <a href="/privacypolicy-cn" class="link lang-cn" style="display: none;">
            <?php echo wpautop(esc_html($footer_policy_text_cn)); ?>
        </a>

        <a href="/page-transaction-law-ja" class="link">
            <?php echo wpautop(esc_html($footer_transaction_text_ja)); ?>
        </a>
        <a href="/page-transaction-law-en" class="link">
            <?php echo wpautop(esc_html($footer_transaction_text_en)); ?>
        </a>
        <a href="/page-transaction-law-cn" class="link">
            <?php echo wpautop(esc_html($footer_transaction_text_cn)); ?>
        </a>
    </div>

    <p class="footer__copy">
        ©︎2024 SUSHI ADVENTURE TOKYO
    </p>
</footer>

<!-- Javascript -->
<script src="<?php echo get_theme_file_uri('/assets/js/common.js'); ?>"></script>
</div>
<?php wp_footer(); ?>
</body>

</html>
