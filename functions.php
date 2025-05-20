<?php
$version = '0.1.1';
$site_url = get_bloginfo('url');
$site_name = get_bloginfo('name');
$site_description = get_bloginfo('description');
$wp_path = get_template_directory_uri();
$site_title = get_bloginfo('title');

add_theme_support('post-thumbnails');
// WARNING全消し　苦肉の策
error_reporting(0);
session_start();

/**
 * 初期設定
 * 先読みした方が良さそうな関数
 * /functions/init/
 */

// 初期設定
require get_template_directory() . '/functions/init/initFunction.php';

/**
 * カスタムポストやページ設定まわりの関数群
 * /functions/page/
 */

// 固定ページ自動生成
require get_template_directory(). '/functions/page/customPage.php';
// カスタムポスト
require get_template_directory(). '/functions/page/customPost.php';
// カスタムタクソノミー
require get_template_directory(). '/functions/page/customTaxonomy.php';
// Optionページ
require get_template_directory(). '/functions/page/optionPage.php';
// ページャー設定
require get_template_directory(). '/functions/page/pager.php';
// 言語設定
require get_template_directory(). '/functions/langsetting/langsetting.php';
