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

<header class="header front">
    <div class="header__img">
        <img class="img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/header/sushiadv_wide_black.png" alt="">
        <img class="imgsp" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/header/sushiadv_black.png" alt="">
    </div>

    <div class="header__nav">
        <a href="/" class="item">
        ジャンプリンク
        </a>
        <a href="/noto" class="item">
        ジャンプリンク
        </a>
        <a href="/reserve-tokyo" class="item">
        ジャンプリンク
        </a>
        <a href="/contact" class="item">
        ジャンプリンク
        </a>
    </div>
</header>


<button class="nav-button front">
    <span class="line first"></span>
    <span class="line mid"></span>
    <span class="line last"></span>
</button>
