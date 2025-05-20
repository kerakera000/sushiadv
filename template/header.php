<?php
global $wp_path;
global $site_url;

$header_top_text_ja = get_option('header_top_text_ja', '');
$header_workshop_text_ja = get_option('header_workshop_text_ja', '');
$header_reserve_text_ja = get_option('header_reserve_text_ja', '');
$header_inquiry_text_ja = get_option('header_inquiry_text_ja', '');

$header_top_text_en = get_option('header_top_text_en', '');
$header_workshop_text_en = get_option('header_workshop_text_en', '');
$header_reserve_text_en = get_option('header_reserve_text_en', '');
$header_inquiry_text_en = get_option('header_inquiry_text_en', '');

$header_top_text_cn = get_option('header_top_text_cn', '');
$header_workshop_text_cn = get_option('header_workshop_text_cn', '');
$header_reserve_text_cn = get_option('header_reserve_text_cn', '');
$header_inquiry_text_cn = get_option('header_inquiry_text_cn', '');

?>

<header class="header">
    <a href="/" class="header__img">
        <img class="img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/header/sushiadv_wide_black.png" alt="">
        <img class="imgsp" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/header/sushiadv_black.png" alt="">
    </a>

    <div class="header__nav">
        <a href="/" class="item">
            TOKYO
            <span class="icon lang-ja" style="display: none;">
                <?php echo wpautop(esc_html($header_top_text_ja)); ?>
            </span>
            <span class="icon lang-en" style="display: none;">
                <?php echo wpautop(esc_html($header_top_text_en)); ?>
            </span>
            <span class="icon lang-cn" style="display: none;">
                <?php echo wpautop(esc_html($header_top_text_cn)); ?>
            </span>
        </a>
        <a href="/noto" class="item">
            NOTO
            <span class="icon lang-ja" style="display: none;">
                <?php echo wpautop(esc_html($header_workshop_text_ja)); ?>
            </span>
            <span class="icon lang-en" style="display: none;">
                <?php echo wpautop(esc_html($header_workshop_text_en)); ?>
            </span>
            <span class="icon lang-cn" style="display: none;">
                <?php echo wpautop(esc_html($header_workshop_text_cn)); ?>
            </span>
        </a>
        <a href="/reserve-tokyo" class="item">
            RESERVE
            <span class="icon lang-ja" style="display: none;">
                <?php echo wpautop(esc_html($header_reserve_text_ja)); ?>
            </span>
            <span class="icon lang-en" style="display: none;">
                <?php echo wpautop(esc_html($header_reserve_text_en)); ?>
            </span>
            <span class="icon lang-cn" style="display: none;">
                <?php echo wpautop(esc_html($header_reserve_text_cn)); ?>
            </span>
        </a>
        <a href="/contact" class="item">
            CONTACT
            <span class="icon lang-ja" style="display: none;">
                <?php echo wpautop(esc_html($header_inquiry_text_ja)); ?>
            </span>
            <span class="icon lang-en" style="display: none;">
                <?php echo wpautop(esc_html($header_inquiry_text_en)); ?>
            </span>
            <span class="icon lang-cn" style="display: none;">
                <?php echo wpautop(esc_html($header_inquiry_text_cn)); ?>
            </span>
        </a>
    </div>

    <div class="header__lang-button LANG-BUTTON">
        <p class="text">Language</p>
        <div class="buttons">
            <button class="button" data-lang="jp">
                JP
                <span class="line"></span>
            </button>
            <span class="slash">/</span>
            <button class="button" data-lang="en">
                EN
                <span class="line"></span>
            </button>
            <span class="slash">/</span>
            <button class="button" data-lang="ch">
                CH
                <span class="line"></span>
            </button>
        </div>
    </div>

    <div class="header__sns-button">
        <p class="title">SNS</p>
        <div class="buttons">
            <a href="https://www.instagram.com/sushi_adventure_tokyo/" class="button">
                <img class="img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sidebar/instagram.svg" alt="">
            </a>
            <a href="" class="button">
                <img class="img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sidebar/facebook.svg" alt="">
            </a>
        </div>
    </div>
</header>


<button class="nav-button">
    <span class="line first"></span>
    <span class="line mid"></span>
    <span class="line last"></span>
</button>
