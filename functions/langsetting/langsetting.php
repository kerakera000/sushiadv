<?php
/**
 * トップページ、ヘッダー、フッター設定の管理
 * langsetting.php
 */
function my_custom_theme_settings_init() {
// トップページ設定セクションの追加
    add_settings_section(
        'my_custom_theme_section_top_page',
        'トップページ設定',
        'my_custom_theme_section_callback_top_page',
        'top-page-settings-sub'
    );

    // トップページ設定フィールドの追加
    add_settings_field(
        'kv_catchphrase_text_ja',
        'kvキャッチフレーズ (日本語)',
        'kv_catchphrase_text_ja_callback',
        'top-page-settings-sub',
        'my_custom_theme_section_top_page'
    );

    add_settings_field(
        'kv_image_ja',
        'kv画像 (日本語)',
        'kv_image_ja_callback',
        'top-page-settings-sub',
        'my_custom_theme_section_top_page'
    );

    add_settings_field(
        'concept_title_text_ja',
        'コンセプトタイトル (日本語)',
        'concept_title_text_ja_callback',
        'top-page-settings-sub',
        'my_custom_theme_section_top_page'
    );

    add_settings_field(
        'concept_text_ja',
        'コンセプトテキスト (日本語)',
        'concept_text_ja_callback',
        'top-page-settings-sub',
        'my_custom_theme_section_top_page'
    );

    // セッティングの登録
    register_setting('top_page_settings_group', 'kv_catchphrase_text_ja', array(
        'type' => 'string',
        'sanitize_callback' => 'sanitize_textarea_field',
        'default' => ''
    ));
    register_setting('top_page_settings_group', 'kv_image_ja', array(
        'type' => 'string',
        'sanitize_callback' => 'sanitize_text_field',
        'default' => ''
    ));
    register_setting('top_page_settings_group', 'concept_subtitle_text_ja', array(
        'type' => 'string',
        'sanitize_callback' => 'sanitize_text_field',
        'default' => ''
    ));
    register_setting('top_page_settings_group', 'concept_title_text_ja', array(
        'type' => 'string',
        'sanitize_callback' => 'sanitize_text_field',
        'default' => ''
    ));
    register_setting('top_page_settings_group', 'concept_text_ja', array(
        'type' => 'string',
        'sanitize_callback' => 'sanitize_textarea_field',
        'default' => ''
    ));
    // メニューコンテンツ1
    add_settings_field(
        'menu_content1_title_ja',
        'メニューコンテンツ１タイトル (日本語)',
        'menu_content1_title_ja_callback',
        'top-page-settings-sub',
        'my_custom_theme_section_top_page'
    );
    add_settings_field(
        'menu_content1_subtitle_ja',
        'メニューコンテンツ１サブタイトル (日本語)',
        'menu_content1_subtitle_ja_callback',
        'top-page-settings-sub',
        'my_custom_theme_section_top_page'
    );
    add_settings_field(
        'menu_content1_desc_title_ja',
        'メニューコンテンツ１説明タイトル (日本語)',
        'menu_content1_desc_title_ja_callback',
        'top-page-settings-sub',
        'my_custom_theme_section_top_page'
    );
    add_settings_field(
        'menu_content1_desc_text_ja',
        'メニューコンテンツ１説明文 (日本語)',
        'menu_content1_desc_text_ja_callback',
        'top-page-settings-sub',
        'my_custom_theme_section_top_page'
    );
    add_settings_field(
        'menu_content1_image1_ja',
        'メニューコンテンツ１画像 (1)',
        'menu_content1_image1_ja_callback',
        'top-page-settings-sub',
        'my_custom_theme_section_top_page'
    );
    add_settings_field(
        'menu_content1_image2_ja',
        'メニューコンテンツ１画像 (2)',
        'menu_content1_image2_ja_callback',
        'top-page-settings-sub',
        'my_custom_theme_section_top_page'
    );

    // メニューコンテンツ2
    add_settings_field(
        'menu_content2_desc_title_ja',
        'メニューコンテンツ２説明タイトル (日本語)',
        'menu_content2_desc_title_ja_callback',
        'top-page-settings-sub',
        'my_custom_theme_section_top_page'
    );
    add_settings_field(
        'menu_content2_desc_text_ja',
        'メニューコンテンツ２説明文 (日本語)',
        'menu_content2_desc_text_ja_callback',
        'top-page-settings-sub',
        'my_custom_theme_section_top_page'
    );
    add_settings_field(
        'menu_content2_image_ja',
        'メニューコンテンツ２画像',
        'menu_content2_image_ja_callback',
        'top-page-settings-sub',
        'my_custom_theme_section_top_page'
    );

    // メニューコンテンツ3
    add_settings_field(
        'menu_content3_desc_title_ja',
        'メニューコンテンツ３説明タイトル (日本語)',
        'menu_content3_desc_title_ja_callback',
        'top-page-settings-sub',
        'my_custom_theme_section_top_page'
    );
    add_settings_field(
        'menu_content3_desc_text_ja',
        'メニューコンテンツ３説明文 (日本語)',
        'menu_content3_desc_text_ja_callback',
        'top-page-settings-sub',
        'my_custom_theme_section_top_page'
    );
    add_settings_field(
        'menu_content3_image_ja',
        'メニューコンテンツ３画像',
        'menu_content3_image_ja_callback',
        'top-page-settings-sub',
        'my_custom_theme_section_top_page'
    );

    // メニューコンテンツ4
    add_settings_field(
        'menu_content4_image_ja',
        'メニューコンテンツ４画像',
        'menu_content4_image_ja_callback',
        'top-page-settings-sub',
        'my_custom_theme_section_top_page'
    );

    // 料理教室
    add_settings_field(
        'cooking_class_subtitle_ja',
        '料理教室サブタイトル (日本語)',
        'cooking_class_subtitle_ja_callback',
        'top-page-settings-sub',
        'my_custom_theme_section_top_page'
    );
    add_settings_field(
        'cooking_class_title_ja',
        '料理教室タイトル (日本語)',
        'cooking_class_title_ja_callback',
        'top-page-settings-sub',
        'my_custom_theme_section_top_page'
    );
    add_settings_field(
        'cooking_class_desc_text_ja',
        '料理教室説明文 (日本語)',
        'cooking_class_desc_text_ja_callback',
        'top-page-settings-sub',
        'my_custom_theme_section_top_page'
    );
    add_settings_field(
        'cooking_class_button_ja',
        '料理教室ボタン (日本語)',
        'cooking_class_button_ja_callback',
        'top-page-settings-sub',
        'my_custom_theme_section_top_page'
    );

    // セッティングの登録
    $fieldsja = array(
        'menu_content1_title_ja', 'menu_content1_subtitle_ja', 'menu_content1_desc_title_ja', 'menu_content1_desc_text_ja', 'menu_content1_image1_ja', 'menu_content1_image2_ja',
        'menu_content2_desc_title_ja', 'menu_content2_desc_text_ja', 'menu_content2_image_ja',
        'menu_content3_desc_title_ja', 'menu_content3_desc_text_ja', 'menu_content3_image_ja',
        'menu_content4_image_ja',
        'cooking_class_subtitle_ja', 'cooking_class_title_ja', 'cooking_class_desc_text_ja', 'cooking_class_button_ja'
    );

    foreach ($fieldsja as $field) {
        register_setting('top_page_settings_group', $field, array(
            'type' => 'string',
            'sanitize_callback' => 'sanitize_textarea_field',
            'default' => ''
        ));
    }


    // Top Page Settings Section
    add_settings_section(
        'my_custom_theme_section_top_page',
        'トップページ設定',
        'my_custom_theme_section_callback_top_page',
        'top-page-settings-sub'
    );

    // Top Page Settings Fields
    add_settings_field(
        'kv_catchphrase_text_en',
        'KVキャッチフレーズ (英語)',
        'kv_catchphrase_text_en_callback',
        'top-page-settings-sub',
        'my_custom_theme_section_top_page'
    );

    add_settings_field(
        'concept_subtitle_text_en',
        'コンセプトサブタイトル (英語)',
        'concept_subtitle_text_en_callback',
        'top-page-settings-sub',
        'my_custom_theme_section_top_page'
    );

    add_settings_field(
        'concept_title_text_en',
        'コンセプトタイトル (英語)',
        'concept_title_text_en_callback',
        'top-page-settings-sub',
        'my_custom_theme_section_top_page'
    );

    add_settings_field(
        'concept_text_en',
        'コンセプトテキスト (英語)',
        'concept_text_en_callback',
        'top-page-settings-sub',
        'my_custom_theme_section_top_page'
    );

    // Menu Content 1
    add_settings_field(
        'menu_content1_title_en',
        'メニューコンテンツ１タイトル (英語)',
        'menu_content1_title_en_callback',
        'top-page-settings-sub',
        'my_custom_theme_section_top_page'
    );
    add_settings_field(
        'menu_content1_subtitle_en',
        'メニューコンテンツ１サブタイトル (英語)',
        'menu_content1_subtitle_en_callback',
        'top-page-settings-sub',
        'my_custom_theme_section_top_page'
    );
    add_settings_field(
        'menu_content1_desc_title_en',
        'メニューコンテンツ１説明タイトル (英語)',
        'menu_content1_desc_title_en_callback',
        'top-page-settings-sub',
        'my_custom_theme_section_top_page'
    );
    add_settings_field(
        'menu_content1_desc_text_en',
        'メニューコンテンツ１説明文 (英語)',
        'menu_content1_desc_text_en_callback',
        'top-page-settings-sub',
        'my_custom_theme_section_top_page'
    );

    // Menu Content 2
    add_settings_field(
        'menu_content2_desc_title_en',
        'メニューコンテンツ２説明タイトル (英語)',
        'menu_content2_desc_title_en_callback',
        'top-page-settings-sub',
        'my_custom_theme_section_top_page'
    );
    add_settings_field(
        'menu_content2_desc_text_en',
        'メニューコンテンツ２説明文 (英語)',
        'menu_content2_desc_text_en_callback',
        'top-page-settings-sub',
        'my_custom_theme_section_top_page'
    );

    // Menu Content 3
    add_settings_field(
        'menu_content3_desc_title_en',
        'メニューコンテンツ３説明タイトル (英語)',
        'menu_content3_desc_title_en_callback',
        'top-page-settings-sub',
        'my_custom_theme_section_top_page'
    );
    add_settings_field(
        'menu_content3_desc_text_en',
        'メニューコンテンツ３説明文 (英語)',
        'menu_content3_desc_text_en_callback',
        'top-page-settings-sub',
        'my_custom_theme_section_top_page'
    );

    // Cooking Class
    add_settings_field(
        'cooking_class_subtitle_en',
        '料理教室サブタイトル (英語)',
        'cooking_class_subtitle_en_callback',
        'top-page-settings-sub',
        'my_custom_theme_section_top_page'
    );
    add_settings_field(
        'cooking_class_title_en',
        '料理教室タイトル (英語)',
        'cooking_class_title_en_callback',
        'top-page-settings-sub',
        'my_custom_theme_section_top_page'
    );
    add_settings_field(
        'cooking_class_desc_text_en',
        '料理教室説明文 (英語)',
        'cooking_class_desc_text_en_callback',
        'top-page-settings-sub',
        'my_custom_theme_section_top_page'
    );
    add_settings_field(
        'cooking_class_button_en',
        '料理教室ボタン (英語)',
        'cooking_class_button_en_callback',
        'top-page-settings-sub',
        'my_custom_theme_section_top_page'
    );

    // Register Settings
    $fieldsen = array(
        'kv_catchphrase_text_en',
        'concept_subtitle_text_en',
        'concept_title_text_en',
        'concept_text_en',
        'menu_content1_title_en', 'menu_content1_subtitle_en', 'menu_content1_desc_title_en', 'menu_content1_desc_text_en',
        'menu_content2_desc_title_en', 'menu_content2_desc_text_en',
        'menu_content3_desc_title_en', 'menu_content3_desc_text_en',
        'cooking_class_subtitle_en', 'cooking_class_title_en', 'cooking_class_desc_text_en', 'cooking_class_button_en'
    );

    foreach ($fieldsen as $field) {
        register_setting('top_page_settings_group', $field, array(
            'type' => 'string',
            'sanitize_callback' => 'sanitize_textarea_field',
            'default' => ''
        ));
    }


    // トップページ設定フィールドの追加 (中国語)
    add_settings_field(
        'kv_catchphrase_text_cn',
        'KVキャッチフレーズ (中国語)',
        'kv_catchphrase_text_cn_callback',
        'top-page-settings-sub',
        'my_custom_theme_section_top_page'
    );

    add_settings_field(
        'concept_subtitle_text_cn',
        'コンセプトサブタイトル (中国語)',
        'concept_subtitle_text_cn_callback',
        'top-page-settings-sub',
        'my_custom_theme_section_top_page'
    );

    add_settings_field(
        'concept_title_text_cn',
        'コンセプトタイトル (中国語)',
        'concept_title_text_cn_callback',
        'top-page-settings-sub',
        'my_custom_theme_section_top_page'
    );

    add_settings_field(
        'concept_text_cn',
        'コンセプトテキスト (中国語)',
        'concept_text_cn_callback',
        'top-page-settings-sub',
        'my_custom_theme_section_top_page'
    );

    // メニューコンテンツ1 (中国語)
    add_settings_field(
        'menu_content1_title_cn',
        'メニューコンテンツ1タイトル (中国語)',
        'menu_content1_title_cn_callback',
        'top-page-settings-sub',
        'my_custom_theme_section_top_page'
    );
    add_settings_field(
        'menu_content1_subtitle_cn',
        'メニューコンテンツ1サブタイトル (中国語)',
        'menu_content1_subtitle_cn_callback',
        'top-page-settings-sub',
        'my_custom_theme_section_top_page'
    );
    add_settings_field(
        'menu_content1_desc_title_cn',
        'メニューコンテンツ1説明タイトル (中国語)',
        'menu_content1_desc_title_cn_callback',
        'top-page-settings-sub',
        'my_custom_theme_section_top_page'
    );
    add_settings_field(
        'menu_content1_desc_text_cn',
        'メニューコンテンツ1説明文 (中国語)',
        'menu_content1_desc_text_cn_callback',
        'top-page-settings-sub',
        'my_custom_theme_section_top_page'
    );

    // メニューコンテンツ2 (中国語)
    add_settings_field(
        'menu_content2_desc_title_cn',
        'メニューコンテンツ2説明タイトル (中国語)',
        'menu_content2_desc_title_cn_callback',
        'top-page-settings-sub',
        'my_custom_theme_section_top_page'
    );
    add_settings_field(
        'menu_content2_desc_text_cn',
        'メニューコンテンツ2説明文 (中国語)',
        'menu_content2_desc_text_cn_callback',
        'top-page-settings-sub',
        'my_custom_theme_section_top_page'
    );

    // メニューコンテンツ3 (中国語)
    add_settings_field(
        'menu_content3_desc_title_cn',
        'メニューコンテンツ3説明タイトル (中国語)',
        'menu_content3_desc_title_cn_callback',
        'top-page-settings-sub',
        'my_custom_theme_section_top_page'
    );
    add_settings_field(
        'menu_content3_desc_text_cn',
        'メニューコンテンツ3説明文 (中国語)',
        'menu_content3_desc_text_cn_callback',
        'top-page-settings-sub',
        'my_custom_theme_section_top_page'
    );

    // 料理教室 (中国語)
    add_settings_field(
        'cooking_class_subtitle_cn',
        '料理教室サブタイトル (中国語)',
        'cooking_class_subtitle_cn_callback',
        'top-page-settings-sub',
        'my_custom_theme_section_top_page'
    );
    add_settings_field(
        'cooking_class_title_cn',
        '料理教室タイトル (中国語)',
        'cooking_class_title_cn_callback',
        'top-page-settings-sub',
        'my_custom_theme_section_top_page'
    );
    add_settings_field(
        'cooking_class_desc_text_cn',
        '料理教室説明文 (中国語)',
        'cooking_class_desc_text_cn_callback',
        'top-page-settings-sub',
        'my_custom_theme_section_top_page'
    );
    add_settings_field(
        'cooking_class_button_cn',
        '料理教室ボタン (中国語)',
        'cooking_class_button_cn_callback',
        'top-page-settings-sub',
        'my_custom_theme_section_top_page'
    );

    // セッティングの登録 (中国語)
    $fieldscn = array(
        'kv_catchphrase_text_cn',
        'concept_subtitle_text_cn',
        'concept_title_text_cn',
        'concept_text_cn',
        'menu_content1_title_cn', 'menu_content1_subtitle_cn', 'menu_content1_desc_title_cn', 'menu_content1_desc_text_cn',
        'menu_content2_desc_title_cn', 'menu_content2_desc_text_cn',
        'menu_content3_desc_title_cn', 'menu_content3_desc_text_cn',
        'cooking_class_subtitle_cn', 'cooking_class_title_cn', 'cooking_class_desc_text_cn', 'cooking_class_button_cn'
    );

    foreach ($fieldscn as $field) {
        register_setting('top_page_settings_group', $field, array(
            'type' => 'string',
            'sanitize_callback' => 'sanitize_textarea_field',
            'default' => ''
        ));
    }

// ここまで


// ヘッダー設定セクションの追加
    add_settings_section(
        'my_custom_theme_section_header',
        'ヘッダー設定',
        'my_custom_theme_section_callback_header',
        'header-settings-sub'
    );

    // ヘッダー設定フィールドの追加 (日本語)
    add_settings_field(
        'header_top_text_ja',
        'TOP (日本語)',
        'header_top_text_ja_callback',
        'header-settings-sub',
        'my_custom_theme_section_header'
    );
    add_settings_field(
        'header_workshop_text_ja',
        'RESTAURANT (日本語)',
        'header_workshop_text_ja_callback',
        'header-settings-sub',
        'my_custom_theme_section_header'
    );
    add_settings_field(
        'header_reserve_text_ja',
        'RESERVE (日本語)',
        'header_reserve_text_ja_callback',
        'header-settings-sub',
        'my_custom_theme_section_header'
    );
    add_settings_field(
        'header_inquiry_text_ja',
        'INQUIRY (日本語)',
        'header_inquiry_text_ja_callback',
        'header-settings-sub',
        'my_custom_theme_section_header'
    );

    // ヘッダー設定フィールドの追加 (英語)
    add_settings_field(
        'header_top_text_en',
        'TOP (英語)',
        'header_top_text_en_callback',
        'header-settings-sub',
        'my_custom_theme_section_header'
    );
    add_settings_field(
        'header_workshop_text_en',
        'RESTAURANT (英語)',
        'header_workshop_text_en_callback',
        'header-settings-sub',
        'my_custom_theme_section_header'
    );
    add_settings_field(
        'header_reserve_text_en',
        'RESERVE (英語)',
        'header_reserve_text_en_callback',
        'header-settings-sub',
        'my_custom_theme_section_header'
    );
    add_settings_field(
        'header_inquiry_text_en',
        'INQUIRY (英語)',
        'header_inquiry_text_en_callback',
        'header-settings-sub',
        'my_custom_theme_section_header'
    );

    // ヘッダー設定フィールドの追加 (中国語)
    add_settings_field(
        'header_top_text_cn',
        'TOP (中国語)',
        'header_top_text_cn_callback',
        'header-settings-sub',
        'my_custom_theme_section_header'
    );
    add_settings_field(
        'header_workshop_text_cn',
        'RESTAURANT (中国語)',
        'header_workshop_text_cn_callback',
        'header-settings-sub',
        'my_custom_theme_section_header'
    );
    add_settings_field(
        'header_reserve_text_cn',
        'RESERVE (中国語)',
        'header_reserve_text_cn_callback',
        'header-settings-sub',
        'my_custom_theme_section_header'
    );
    add_settings_field(
        'header_inquiry_text_cn',
        'INQUIRY (中国語)',
        'header_inquiry_text_cn_callback',
        'header-settings-sub',
        'my_custom_theme_section_header'
    );

    // セッティングの登録
    register_setting('header_settings_group', 'header_top_text_ja', array(
        'type' => 'string',
        'sanitize_callback' => 'sanitize_text_field',
        'default' => ''
    ));
    register_setting('header_settings_group', 'header_workshop_text_ja', array(
        'type' => 'string',
        'sanitize_callback' => 'sanitize_text_field',
        'default' => ''
    ));
    register_setting('header_settings_group', 'header_reserve_text_ja', array(
        'type' => 'string',
        'sanitize_callback' => 'sanitize_text_field',
        'default' => ''
    ));
    register_setting('header_settings_group', 'header_inquiry_text_ja', array(
        'type' => 'string',
        'sanitize_callback' => 'sanitize_text_field',
        'default' => ''
    ));

    register_setting('header_settings_group', 'header_top_text_en', array(
        'type' => 'string',
        'sanitize_callback' => 'sanitize_text_field',
        'default' => ''
    ));
    register_setting('header_settings_group', 'header_workshop_text_en', array(
        'type' => 'string',
        'sanitize_callback' => 'sanitize_text_field',
        'default' => ''
    ));
    register_setting('header_settings_group', 'header_reserve_text_en', array(
        'type' => 'string',
        'sanitize_callback' => 'sanitize_text_field',
        'default' => ''
    ));
    register_setting('header_settings_group', 'header_inquiry_text_en', array(
        'type' => 'string',
        'sanitize_callback' => 'sanitize_text_field',
        'default' => ''
    ));

    register_setting('header_settings_group', 'header_top_text_cn', array(
        'type' => 'string',
        'sanitize_callback' => 'sanitize_text_field',
        'default' => ''
    ));
    register_setting('header_settings_group', 'header_workshop_text_cn', array(
        'type' => 'string',
        'sanitize_callback' => 'sanitize_text_field',
        'default' => ''
    ));
    register_setting('header_settings_group', 'header_reserve_text_cn', array(
        'type' => 'string',
        'sanitize_callback' => 'sanitize_text_field',
        'default' => ''
    ));
    register_setting('header_settings_group', 'header_inquiry_text_cn', array(
        'type' => 'string',
        'sanitize_callback' => 'sanitize_text_field',
        'default' => ''
    ));
// ここまで


// フッター設定フィールドの追加
    add_settings_section(
        'my_custom_theme_section_footer',
        'フッター設定',
        'my_custom_theme_section_callback_footer',
        'footer-settings-sub'
    );

    add_settings_field(
        'footer_reservation_text_ja',
        '予約 (日本語)',
        'footer_reservation_text_ja_callback',
        'footer-settings-sub',
        'my_custom_theme_section_footer'
    );
    add_settings_field(
        'footer_inquiry_text_ja',
        'お問い合わせ (日本語)',
        'footer_inquiry_text_ja_callback',
        'footer-settings-sub',
        'my_custom_theme_section_footer'
    );
    add_settings_field(
        'footer_policy_text_ja',
        'プライバシーポリシー (日本語)',
        'footer_reserve_text_ja_callback',
        'footer-settings-sub',
        'my_custom_theme_section_footer'
    );
    add_settings_field(
        'footer_termsofservice_text_ja',
        '利用規約 (日本語)',
        'footer_termsofservice_text_ja_callback',
        'footer-settings-sub',
        'my_custom_theme_section_footer'
    );
    add_settings_field(
        'footer_transaction_text_ja',
        '特定商取引法 (日本語)',
        'footer_transaction_text_ja_callback',
        'footer-settings-sub',
        'my_custom_theme_section_footer'
    );


    add_settings_field(
        'footer_reservation_text_en',
        '予約 (英語)',
        'footer_reservation_text_en_callback',
        'footer-settings-sub',
        'my_custom_theme_section_footer'
    );
    add_settings_field(
        'footer_inquiry_text_en',
        'お問い合わせ (英語)',
        'footer_inquiry_text_en_callback',
        'footer-settings-sub',
        'my_custom_theme_section_footer'
    );
    add_settings_field(
        'footer_policy_text_en',
        'プライバシーポリシー (英語)',
        'footer_reserve_text_en_callback',
        'footer-settings-sub',
        'my_custom_theme_section_footer'
    );
    add_settings_field(
        'footer_termsofservice_text_en',
        '利用規約 (英語)',
        'footer_termsofservice_text_en_callback',
        'footer-settings-sub',
        'my_custom_theme_section_footer'
    );
    add_settings_field(
        'footer_transaction_text_en',
        '特定商取引法 (英語)',
        'footer_transaction_text_en_callback',
        'footer-settings-sub',
        'my_custom_theme_section_footer'
    );


    add_settings_field(
        'footer_reservation_text_cn',
        '予約 (中国語)',
        'footer_reservation_text_cn_callback',
        'footer-settings-sub',
        'my_custom_theme_section_footer'
    );
    add_settings_field(
        'footer_inquiry_text_cn',
        'お問い合わせ (中国語)',
        'footer_inquiry_text_cn_callback',
        'footer-settings-sub',
        'my_custom_theme_section_footer'
    );
    add_settings_field(
        'footer_policy_text_cn',
        'プライバシーポリシー (中国語)',
        'footer_reserve_text_cn_callback',
        'footer-settings-sub',
        'my_custom_theme_section_footer'
    );
    add_settings_field(
        'footer_termsofservice_text_cn',
        '利用規約 (中国語)',
        'footer_termsofservice_text_cn_callback',
        'footer-settings-sub',
        'my_custom_theme_section_footer'
    );
    add_settings_field(
        'footer_transaction_text_cn',
        '特定商取引法 (中国語)',
        'footer_transaction_text_cn_callback',
        'footer-settings-sub',
        'my_custom_theme_section_footer'
    );

    register_setting('footer_settings_group', 'footer_reservation_text_ja', array(
        'type' => 'string',
        'sanitize_callback' => 'sanitize_text_field',
        'default' => ''
    ));
    register_setting('footer_settings_group', 'footer_inquiry_text_ja', array(
        'type' => 'string',
        'sanitize_callback' => 'sanitize_text_field',
        'default' => ''
    ));
    register_setting('footer_settings_group', 'footer_policy_text_ja', array(
        'type' => 'string',
        'sanitize_callback' => 'sanitize_text_field',
        'default' => ''
    ));
    register_setting('footer_settings_group', 'footer_termsofservice_text_ja', array(
        'type' => 'string',
        'sanitize_callback' => 'sanitize_text_field',
        'default' => ''
    ));
    register_setting('footer_settings_group', 'footer_transaction_text_ja', array(
        'type' => 'string',
        'sanitize_callback' => 'sanitize_text_field',
        'default' => ''
    ));


    register_setting('footer_settings_group', 'footer_reservation_text_en', array(
        'type' => 'string',
        'sanitize_callback' => 'sanitize_text_field',
        'default' => ''
    ));
    register_setting('footer_settings_group', 'footer_inquiry_text_en', array(
        'type' => 'string',
        'sanitize_callback' => 'sanitize_text_field',
        'default' => ''
    ));
    register_setting('footer_settings_group', 'footer_policy_text_en', array(
        'type' => 'string',
        'sanitize_callback' => 'sanitize_text_field',
        'default' => ''
    ));
    register_setting('footer_settings_group', 'footer_termsofservice_text_en', array(
        'type' => 'string',
        'sanitize_callback' => 'sanitize_text_field',
        'default' => ''
    ));
    register_setting('footer_settings_group', 'footer_transaction_text_en', array(
        'type' => 'string',
        'sanitize_callback' => 'sanitize_text_field',
        'default' => ''
    ));


    register_setting('footer_settings_group', 'footer_reservation_text_cn', array(
        'type' => 'string',
        'sanitize_callback' => 'sanitize_text_field',
        'default' => ''
    ));
    register_setting('footer_settings_group', 'footer_inquiry_text_cn', array(
        'type' => 'string',
        'sanitize_callback' => 'sanitize_text_field',
        'default' => ''
    ));
    register_setting('footer_settings_group', 'footer_policy_text_cn', array(
        'type' => 'string',
        'sanitize_callback' => 'sanitize_text_field',
        'default' => ''
    ));
    register_setting('footer_settings_group', 'footer_termsofservice_text_cn', array(
        'type' => 'string',
        'sanitize_callback' => 'sanitize_text_field',
        'default' => ''
    ));
    register_setting('footer_settings_group', 'footer_transaction_text_cn', array(
        'type' => 'string',
        'sanitize_callback' => 'sanitize_text_field',
        'default' => ''
    ));
// ここまで
}
add_action('admin_init', 'my_custom_theme_settings_init');

function my_custom_theme_section_callback_top_page() {
    echo '<p>トップページに表示するテキストを設定します。</p>';
}

function my_custom_theme_section_callback_header() {
    echo '<p>ヘッダーに表示するテキストを設定します。</p>';
}

function my_custom_theme_section_callback_footer() {
    echo '<p>フッターに表示するテキストを設定します。</p>';
}

// トップページ設定フィールドのコールバック関数 (日本語)

    function kv_catchphrase_text_ja_callback() {
        $kv_catchphrase_text_ja = get_option('kv_catchphrase_text_ja', '');
        echo '<textarea id="kv_catchphrase_text_ja" name="kv_catchphrase_text_ja" class="large-text" rows="5">' . esc_textarea($kv_catchphrase_text_ja) . '</textarea>';
    }

    function kv_image_ja_callback() {
        $kv_image_ja = get_option('kv_image_ja', '');
        echo '<input type="hidden" id="kv_image_ja" name="kv_image_ja" value="' . esc_attr($kv_image_ja) . '">';
        echo '<button type="button" class="button" id="kv_image_ja_button">画像を選択</button>';
        echo '<img id="kv_image_ja_preview" src="' . esc_attr($kv_image_ja) . '" style="max-width: 300px; margin-top: 10px;">';
        ?>
        <script>
            jQuery(document).ready(function($) {
                var mediaUploader;

                $('#kv_image_ja_button').click(function(e) {
                    e.preventDefault();
                    if (mediaUploader) {
                        mediaUploader.open();
                        return;
                    }
                    mediaUploader = wp.media({
                        title: '選択する画像を選んでください',
                        button: {
                            text: 'この画像を選択'
                        },
                        multiple: false
                    });
                    mediaUploader.on('select', function() {
                        var attachment = mediaUploader.state().get('selection').first().toJSON();
                        $('#kv_image_ja').val(attachment.url);
                        $('#kv_image_ja_preview').attr('src', attachment.url);
                    });
                    mediaUploader.open();
                });
            });
        </script>
        <?php
    }

    function concept_subtitle_text_ja_callback() {
        $concept_subtitle_text_ja = get_option('concept_subtitle_text_ja', '');
        echo '<input type="text" id="concept_subtitle_text_ja" name="concept_subtitle_text_ja" value="' . esc_attr($concept_subtitle_text_ja) . '" class="regular-text">';
    }

    function concept_title_text_ja_callback() {
        $concept_title_text_ja = get_option('concept_title_text_ja', '');
        echo '<input type="text" id="concept_title_text_ja" name="concept_title_text_ja" value="' . esc_attr($concept_title_text_ja) . '" class="regular-text">';
    }

    function concept_text_ja_callback() {
        $concept_text_ja = get_option('concept_text_ja', '');
        echo '<textarea id="concept_text_ja" name="concept_text_ja" class="large-text" rows="5">' . esc_textarea($concept_text_ja) . '</textarea>';
    }

    function menu_content1_title_ja_callback() {
        $menu_content1_title_ja = get_option('menu_content1_title_ja', '');
        echo '<input type="text" id="menu_content1_title_ja" name="menu_content1_title_ja" value="' . esc_attr($menu_content1_title_ja) . '" class="regular-text">';
    }

    function menu_content1_subtitle_ja_callback() {
        $menu_content1_subtitle_ja = get_option('menu_content1_subtitle_ja', '');
        echo '<input type="text" id="menu_content1_subtitle_ja" name="menu_content1_subtitle_ja" value="' . esc_attr($menu_content1_subtitle_ja) . '" class="regular-text">';
    }

    function menu_content1_desc_title_ja_callback() {
        $menu_content1_desc_title_ja = get_option('menu_content1_desc_title_ja', '');
        echo '<input type="text" id="menu_content1_desc_title_ja" name="menu_content1_desc_title_ja" value="' . esc_attr($menu_content1_desc_title_ja) . '" class="regular-text">';
    }

    function menu_content1_desc_text_ja_callback() {
        $menu_content1_desc_text_ja = get_option('menu_content1_desc_text_ja', '');
        echo '<textarea id="menu_content1_desc_text_ja" name="menu_content1_desc_text_ja" class="large-text" rows="5">' . esc_textarea($menu_content1_desc_text_ja) . '</textarea>';
    }

    function menu_content1_image1_ja_callback() {
        $menu_content1_image1_ja = get_option('menu_content1_image1_ja', '');
        echo '<input type="hidden" id="menu_content1_image1_ja" name="menu_content1_image1_ja" value="' . esc_attr($menu_content1_image1_ja) . '">';
        echo '<button type="button" class="button" id="menu_content1_image1_ja_button">画像を選択</button>';
        echo '<img id="menu_content1_image1_ja_preview" src="' . esc_attr($menu_content1_image1_ja) . '" style="max-width: 300px; margin-top: 10px;">';
        ?>
        <script>
            jQuery(document).ready(function($) {
                var mediaUploader;

                $('#menu_content1_image1_ja_button').click(function(e) {
                    e.preventDefault();
                    if (mediaUploader) {
                        mediaUploader.open();
                        return;
                    }
                    mediaUploader = wp.media({
                        title: '選択する画像を選んでください',
                        button: {
                            text: 'この画像を選択'
                        },
                        multiple: false
                    });
                    mediaUploader.on('select', function() {
                        var attachment = mediaUploader.state().get('selection').first().toJSON();
                        $('#menu_content1_image1_ja').val(attachment.url);
                        $('#menu_content1_image1_ja_preview').attr('src', attachment.url);
                    });
                    mediaUploader.open();
                });
            });
        </script>
        <?php
    }

    function menu_content1_image2_ja_callback() {
        $menu_content1_image2_ja = get_option('menu_content1_image2_ja', '');
        echo '<input type="hidden" id="menu_content1_image2_ja" name="menu_content1_image2_ja" value="' . esc_attr($menu_content1_image2_ja) . '">';
        echo '<button type="button" class="button" id="menu_content1_image2_ja_button">画像を選択</button>';
        echo '<img id="menu_content1_image2_ja_preview" src="' . esc_attr($menu_content1_image2_ja) . '" style="max-width: 300px; margin-top: 10px;">';
        ?>
        <script>
            jQuery(document).ready(function($) {
                var mediaUploader;

                $('#menu_content1_image2_ja_button').click(function(e) {
                    e.preventDefault();
                    if (mediaUploader) {
                        mediaUploader.open();
                        return;
                    }
                    mediaUploader = wp.media({
                        title: '選択する画像を選んでください',
                        button: {
                            text: 'この画像を選択'
                        },
                        multiple: false
                    });
                    mediaUploader.on('select', function() {
                        var attachment = mediaUploader.state().get('selection').first().toJSON();
                        $('#menu_content1_image2_ja').val(attachment.url);
                        $('#menu_content1_image2_ja_preview').attr('src', attachment.url);
                    });
                    mediaUploader.open();
                });
            });
        </script>
        <?php
    }

    function menu_content2_desc_title_ja_callback() {
        $menu_content2_desc_title_ja = get_option('menu_content2_desc_title_ja', '');
        echo '<input type="text" id="menu_content2_desc_title_ja" name="menu_content2_desc_title_ja" value="' . esc_attr($menu_content2_desc_title_ja) . '" class="regular-text">';
    }

    function menu_content2_desc_text_ja_callback() {
        $menu_content2_desc_text_ja = get_option('menu_content2_desc_text_ja', '');
        echo '<textarea id="menu_content2_desc_text_ja" name="menu_content2_desc_text_ja" class="large-text" rows="5">' . esc_textarea($menu_content2_desc_text_ja) . '</textarea>';
    }

    function menu_content2_image_ja_callback() {
        $menu_content2_image_ja = get_option('menu_content2_image_ja', '');
        echo '<input type="hidden" id="menu_content2_image_ja" name="menu_content2_image_ja" value="' . esc_attr($menu_content2_image_ja) . '">';
        echo '<button type="button" class="button" id="menu_content2_image_ja_button">画像を選択</button>';
        echo '<img id="menu_content2_image_ja_preview" src="' . esc_attr($menu_content2_image_ja) . '" style="max-width: 300px; margin-top: 10px;">';
        ?>
        <script>
            jQuery(document).ready(function($) {
                var mediaUploader;

                $('#menu_content2_image_ja_button').click(function(e) {
                    e.preventDefault();
                    if (mediaUploader) {
                        mediaUploader.open();
                        return;
                    }
                    mediaUploader = wp.media({
                        title: '選択する画像を選んでください',
                        button: {
                            text: 'この画像を選択'
                        },
                        multiple: false
                    });
                    mediaUploader.on('select', function() {
                        var attachment = mediaUploader.state().get('selection').first().toJSON();
                        $('#menu_content2_image_ja').val(attachment.url);
                        $('#menu_content2_image_ja_preview').attr('src', attachment.url);
                    });
                    mediaUploader.open();
                });
            });
        </script>
        <?php
    }

    function menu_content3_desc_title_ja_callback() {
        $menu_content3_desc_title_ja = get_option('menu_content3_desc_title_ja', '');
        echo '<input type="text" id="menu_content3_desc_title_ja" name="menu_content3_desc_title_ja" value="' . esc_attr($menu_content3_desc_title_ja) . '" class="regular-text">';
    }

    function menu_content3_desc_text_ja_callback() {
        $menu_content3_desc_text_ja = get_option('menu_content3_desc_text_ja', '');
        echo '<textarea id="menu_content3_desc_text_ja" name="menu_content3_desc_text_ja" class="large-text" rows="5">' . esc_textarea($menu_content3_desc_text_ja) . '</textarea>';
    }

    function menu_content3_image_ja_callback() {
        $menu_content3_image_ja = get_option('menu_content3_image_ja', '');
        echo '<input type="hidden" id="menu_content3_image_ja" name="menu_content3_image_ja" value="' . esc_attr($menu_content3_image_ja) . '">';
        echo '<button type="button" class="button" id="menu_content3_image_ja_button">画像を選択</button>';
        echo '<img id="menu_content3_image_ja_preview" src="' . esc_attr($menu_content3_image_ja) . '" style="max-width: 300px; margin-top: 10px;">';
        ?>
        <script>
            jQuery(document).ready(function($) {
                var mediaUploader;

                $('#menu_content3_image_ja_button').click(function(e) {
                    e.preventDefault();
                    if (mediaUploader) {
                        mediaUploader.open();
                        return;
                    }
                    mediaUploader = wp.media({
                        title: '選択する画像を選んでください',
                        button: {
                            text: 'この画像を選択'
                        },
                        multiple: false
                    });
                    mediaUploader.on('select', function() {
                        var attachment = mediaUploader.state().get('selection').first().toJSON();
                        $('#menu_content3_image_ja').val(attachment.url);
                        $('#menu_content3_image_ja_preview').attr('src', attachment.url);
                    });
                    mediaUploader.open();
                });
            });
        </script>
        <?php
    }

    function menu_content4_image_ja_callback() {
        $menu_content4_image_ja = get_option('menu_content4_image_ja', '');
        echo '<input type="hidden" id="menu_content4_image_ja" name="menu_content4_image_ja" value="' . esc_attr($menu_content4_image_ja) . '">';
        echo '<button type="button" class="button" id="menu_content4_image_ja_button">画像を選択</button>';
        echo '<img id="menu_content4_image_ja_preview" src="' . esc_attr($menu_content4_image_ja) . '" style="max-width: 300px; margin-top: 10px;">';
        ?>
        <script>
            jQuery(document).ready(function($) {
                var mediaUploader;

                $('#menu_content4_image_ja_button').click(function(e) {
                    e.preventDefault();
                    if (mediaUploader) {
                        mediaUploader.open();
                        return;
                    }
                    mediaUploader = wp.media({
                        title: '選択する画像を選んでください',
                        button: {
                            text: 'この画像を選択'
                        },
                        multiple: false
                    });
                    mediaUploader.on('select', function() {
                        var attachment = mediaUploader.state().get('selection').first().toJSON();
                        $('#menu_content4_image_ja').val(attachment.url);
                        $('#menu_content4_image_ja_preview').attr('src', attachment.url);
                    });
                    mediaUploader.open();
                });
            });
        </script>
        <?php
    }

    function cooking_class_subtitle_ja_callback() {
        $cooking_class_subtitle_ja = get_option('cooking_class_subtitle_ja', '');
        echo '<input type="text" id="cooking_class_subtitle_ja" name="cooking_class_subtitle_ja" value="' . esc_attr($cooking_class_subtitle_ja) . '" class="regular-text">';
    }

    function cooking_class_title_ja_callback() {
        $cooking_class_title_ja = get_option('cooking_class_title_ja', '');
        echo '<input type="text" id="cooking_class_title_ja" name="cooking_class_title_ja" value="' . esc_attr($cooking_class_title_ja) . '" class="regular-text">';
    }

    function cooking_class_desc_text_ja_callback() {
        $cooking_class_desc_text_ja = get_option('cooking_class_desc_text_ja', '');
        echo '<textarea id="cooking_class_desc_text_ja" name="cooking_class_desc_text_ja" class="large-text" rows="5">' . esc_textarea($cooking_class_desc_text_ja) . '</textarea>';
    }

    function cooking_class_button_ja_callback() {
        $cooking_class_button_ja = get_option('cooking_class_button_ja', '');
        echo '<input type="text" id="cooking_class_button_ja" name="cooking_class_button_ja" value="' . esc_attr($cooking_class_button_ja) . '" class="regular-text">';
    }

    function instagram_image_callback($args) {
        $id = $args['id'];
        $value = get_option($id, '');
        echo '<input type="hidden" id="' . esc_attr($id) . '" name="' . esc_attr($id) . '" value="' . esc_attr($value) . '">';
        echo '<button type="button" class="button instagram_image_button" data-target="' . esc_attr($id) . '">画像を選択</button>';
        echo '<img id="' . esc_attr($id) . '_preview" src="' . esc_url($value) . '" style="max-width: 300px; margin-top: 10px;">';
        ?>
        <script>
            jQuery(document).ready(function($) {
                var mediaUploader;
                $('.instagram_image_button').click(function(e) {
                    e.preventDefault();
                    var target = $(this).data('target');
                    if (mediaUploader) {
                        mediaUploader.open();
                        return;
                    }
                    mediaUploader = wp.media({
                        title: '選択する画像を選んでください',
                        button: {
                            text: 'この画像を選択'
                        },
                        multiple: false
                    });
                    mediaUploader.on('select', function() {
                        var attachment = mediaUploader.state().get('selection').first().toJSON();
                        $('#' + target).val(attachment.url);
                        $('#' + target + '_preview').attr('src', attachment.url);
                    });
                    mediaUploader.open();
                });
            });
        </script>
        <?php
    }

    function kv_catchphrase_text_en_callback() {
        $kv_catchphrase_text_en = get_option('kv_catchphrase_text_en', '');
        echo '<textarea id="kv_catchphrase_text_en" name="kv_catchphrase_text_en" class="large-text" rows="5">' . esc_textarea($kv_catchphrase_text_en) . '</textarea>';
    }

    function concept_subtitle_text_en_callback() {
        $concept_subtitle_text_en = get_option('concept_subtitle_text_en', '');
        echo '<input type="text" id="concept_subtitle_text_en" name="concept_subtitle_text_en" value="' . esc_attr($concept_subtitle_text_en) . '" class="regular-text">';
    }

    function concept_title_text_en_callback() {
        $concept_title_text_en = get_option('concept_title_text_en', '');
        echo '<input type="text" id="concept_title_text_en" name="concept_title_text_en" value="' . esc_attr($concept_title_text_en) . '" class="regular-text">';
    }

    function concept_text_en_callback() {
        $concept_text_en = get_option('concept_text_en', '');
        echo '<textarea id="concept_text_en" name="concept_text_en" class="large-text" rows="5">' . esc_textarea($concept_text_en) . '</textarea>';
    }

    function menu_content1_title_en_callback() {
        $menu_content1_title_en = get_option('menu_content1_title_en', '');
        echo '<input type="text" id="menu_content1_title_en" name="menu_content1_title_en" value="' . esc_attr($menu_content1_title_en) . '" class="regular-text">';
    }

    function menu_content1_subtitle_en_callback() {
        $menu_content1_subtitle_en = get_option('menu_content1_subtitle_en', '');
        echo '<input type="text" id="menu_content1_subtitle_en" name="menu_content1_subtitle_en" value="' . esc_attr($menu_content1_subtitle_en) . '" class="regular-text">';
    }

    function menu_content1_desc_title_en_callback() {
        $menu_content1_desc_title_en = get_option('menu_content1_desc_title_en', '');
        echo '<input type="text" id="menu_content1_desc_title_en" name="menu_content1_desc_title_en" value="' . esc_attr($menu_content1_desc_title_en) . '" class="regular-text">';
    }

    function menu_content1_desc_text_en_callback() {
        $menu_content1_desc_text_en = get_option('menu_content1_desc_text_en', '');
        echo '<textarea id="menu_content1_desc_text_en" name="menu_content1_desc_text_en" class="large-text" rows="5">' . esc_textarea($menu_content1_desc_text_en) . '</textarea>';
    }

    function menu_content2_desc_title_en_callback() {
        $menu_content2_desc_title_en = get_option('menu_content2_desc_title_en', '');
        echo '<input type="text" id="menu_content2_desc_title_en" name="menu_content2_desc_title_en" value="' . esc_attr($menu_content2_desc_title_en) . '" class="regular-text">';
    }

    function menu_content2_desc_text_en_callback() {
        $menu_content2_desc_text_en = get_option('menu_content2_desc_text_en', '');
        echo '<textarea id="menu_content2_desc_text_en" name="menu_content2_desc_text_en" class="large-text" rows="5">' . esc_textarea($menu_content2_desc_text_en) . '</textarea>';
    }

    function menu_content3_desc_title_en_callback() {
        $menu_content3_desc_title_en = get_option('menu_content3_desc_title_en', '');
        echo '<input type="text" id="menu_content3_desc_title_en" name="menu_content3_desc_title_en" value="' . esc_attr($menu_content3_desc_title_en) . '" class="regular-text">';
    }

    function menu_content3_desc_text_en_callback() {
        $menu_content3_desc_text_en = get_option('menu_content3_desc_text_en', '');
        echo '<textarea id="menu_content3_desc_text_en" name="menu_content3_desc_text_en" class="large-text" rows="5">' . esc_textarea($menu_content3_desc_text_en) . '</textarea>';
    }

    function cooking_class_subtitle_en_callback() {
        $cooking_class_subtitle_en = get_option('cooking_class_subtitle_en', '');
        echo '<input type="text" id="cooking_class_subtitle_en" name="cooking_class_subtitle_en" value="' . esc_attr($cooking_class_subtitle_en) . '" class="regular-text">';
    }

    function cooking_class_title_en_callback() {
        $cooking_class_title_en = get_option('cooking_class_title_en', '');
        echo '<input type="text" id="cooking_class_title_en" name="cooking_class_title_en" value="' . esc_attr($cooking_class_title_en) . '" class="regular-text">';
    }

    function cooking_class_desc_text_en_callback() {
        $cooking_class_desc_text_en = get_option('cooking_class_desc_text_en', '');
        echo '<textarea id="cooking_class_desc_text_en" name="cooking_class_desc_text_en" class="large-text" rows="5">' . esc_textarea($cooking_class_desc_text_en) . '</textarea>';
    }

    function cooking_class_button_en_callback() {
        $cooking_class_button_en = get_option('cooking_class_button_en', '');
        echo '<input type="text" id="cooking_class_button_en" name="cooking_class_button_en" value="' . esc_attr($cooking_class_button_en) . '" class="regular-text">';
    }



    // KV标语 (中文)
    function kv_catchphrase_text_cn_callback() {
        $kv_catchphrase_text_cn = get_option('kv_catchphrase_text_cn', '');
        echo '<textarea id="kv_catchphrase_text_cn" name="kv_catchphrase_text_cn" class="large-text" rows="5">' . esc_textarea($kv_catchphrase_text_cn) . '</textarea>';
    }

    // 概念副标题 (中文)
    function concept_subtitle_text_cn_callback() {
        $concept_subtitle_text_cn = get_option('concept_subtitle_text_cn', '');
        echo '<input type="text" id="concept_subtitle_text_cn" name="concept_subtitle_text_cn" value="' . esc_attr($concept_subtitle_text_cn) . '" class="regular-text">';
    }

    // 概念标题 (中文)
    function concept_title_text_cn_callback() {
        $concept_title_text_cn = get_option('concept_title_text_cn', '');
        echo '<input type="text" id="concept_title_text_cn" name="concept_title_text_cn" value="' . esc_attr($concept_title_text_cn) . '" class="regular-text">';
    }

    // 概念文本 (中文)
    function concept_text_cn_callback() {
        $concept_text_cn = get_option('concept_text_cn', '');
        echo '<textarea id="concept_text_cn" name="concept_text_cn" class="large-text" rows="5">' . esc_textarea($concept_text_cn) . '</textarea>';
    }

    // 菜单内容1标题 (中文)
    function menu_content1_title_cn_callback() {
        $menu_content1_title_cn = get_option('menu_content1_title_cn', '');
        echo '<input type="text" id="menu_content1_title_cn" name="menu_content1_title_cn" value="' . esc_attr($menu_content1_title_cn) . '" class="regular-text">';
    }

    // 菜单内容1副标题 (中文)
    function menu_content1_subtitle_cn_callback() {
        $menu_content1_subtitle_cn = get_option('menu_content1_subtitle_cn', '');
        echo '<input type="text" id="menu_content1_subtitle_cn" name="menu_content1_subtitle_cn" value="' . esc_attr($menu_content1_subtitle_cn) . '" class="regular-text">';
    }

    // 菜单内容1描述标题 (中文)
    function menu_content1_desc_title_cn_callback() {
        $menu_content1_desc_title_cn = get_option('menu_content1_desc_title_cn', '');
        echo '<input type="text" id="menu_content1_desc_title_cn" name="menu_content1_desc_title_cn" value="' . esc_attr($menu_content1_desc_title_cn) . '" class="regular-text">';
    }

    // 菜单内容1描述文本 (中文)
    function menu_content1_desc_text_cn_callback() {
        $menu_content1_desc_text_cn = get_option('menu_content1_desc_text_cn', '');
        echo '<textarea id="menu_content1_desc_text_cn" name="menu_content1_desc_text_cn" class="large-text" rows="5">' . esc_textarea($menu_content1_desc_text_cn) . '</textarea>';
    }

    // 菜单内容2描述标题 (中文)
    function menu_content2_desc_title_cn_callback() {
        $menu_content2_desc_title_cn = get_option('menu_content2_desc_title_cn', '');
        echo '<input type="text" id="menu_content2_desc_title_cn" name="menu_content2_desc_title_cn" value="' . esc_attr($menu_content2_desc_title_cn) . '" class="regular-text">';
    }

    // 菜单内容2描述文本 (中文)
    function menu_content2_desc_text_cn_callback() {
        $menu_content2_desc_text_cn = get_option('menu_content2_desc_text_cn', '');
        echo '<textarea id="menu_content2_desc_text_cn" name="menu_content2_desc_text_cn" class="large-text" rows="5">' . esc_textarea($menu_content2_desc_text_cn) . '</textarea>';
    }

    // 菜单内容3描述标题 (中文)
    function menu_content3_desc_title_cn_callback() {
        $menu_content3_desc_title_cn = get_option('menu_content3_desc_title_cn', '');
        echo '<input type="text" id="menu_content3_desc_title_cn" name="menu_content3_desc_title_cn" value="' . esc_attr($menu_content3_desc_title_cn) . '" class="regular-text">';
    }

    // 菜单内容3描述文本 (中文)
    function menu_content3_desc_text_cn_callback() {
        $menu_content3_desc_text_cn = get_option('menu_content3_desc_text_cn', '');
        echo '<textarea id="menu_content3_desc_text_cn" name="menu_content3_desc_text_cn" class="large-text" rows="5">' . esc_textarea($menu_content3_desc_text_cn) . '</textarea>';
    }

    // 烹饪课程副标题 (中文)
    function cooking_class_subtitle_cn_callback() {
        $cooking_class_subtitle_cn = get_option('cooking_class_subtitle_cn', '');
        echo '<input type="text" id="cooking_class_subtitle_cn" name="cooking_class_subtitle_cn" value="' . esc_attr($cooking_class_subtitle_cn) . '" class="regular-text">';
    }

    // 烹饪课程标题 (中文)
    function cooking_class_title_cn_callback() {
        $cooking_class_title_cn = get_option('cooking_class_title_cn', '');
        echo '<input type="text" id="cooking_class_title_cn" name="cooking_class_title_cn" value="' . esc_attr($cooking_class_title_cn) . '" class="regular-text">';
    }

    // 烹饪课程描述文本 (中文)
    function cooking_class_desc_text_cn_callback() {
        $cooking_class_desc_text_cn = get_option('cooking_class_desc_text_cn', '');
        echo '<textarea id="cooking_class_desc_text_cn" name="cooking_class_desc_text_cn" class="large-text" rows="5">' . esc_textarea($cooking_class_desc_text_cn) . '</textarea>';
    }

    // 烹饪课程按钮 (中文)
    function cooking_class_button_cn_callback() {
        $cooking_class_button_cn = get_option('cooking_class_button_cn', '');
        echo '<input type="text" id="cooking_class_button_cn" name="cooking_class_button_cn" value="' . esc_attr($cooking_class_button_cn) . '" class="regular-text">';
    }

// ここまでトップページ


// ヘッダー設定フィールドのコールバック関数 (日本語)
    function header_top_text_ja_callback() {
    $header_top_text_ja = get_option('header_top_text_ja', '');
    echo '<input type="text" id="header_top_text_ja" name="header_top_text_ja" value="' . esc_attr($header_top_text_ja) . '" class="regular-text">';
    }

    function header_workshop_text_ja_callback() {
    $header_workshop_text_ja = get_option('header_workshop_text_ja', '');
    echo '<input type="text" id="header_workshop_text_ja" name="header_workshop_text_ja" value="' . esc_attr($header_workshop_text_ja) . '" class="regular-text">';
    }

    function header_reserve_text_ja_callback() {
    $header_reserve_text_ja = get_option('header_reserve_text_ja', '');
    echo '<input type="text" id="header_reserve_text_ja" name="header_reserve_text_ja" value="' . esc_attr($header_reserve_text_ja) . '" class="regular-text">';
    }

    function header_inquiry_text_ja_callback() {
    $header_inquiry_text_ja = get_option('header_inquiry_text_ja', '');
    echo '<input type="text" id="header_inquiry_text_ja" name="header_inquiry_text_ja" value="' . esc_attr($header_inquiry_text_ja) . '" class="regular-text">';
    }

    function header_top_text_en_callback() {
    $header_top_text_en = get_option('header_top_text_en', '');
    echo '<input type="text" id="header_top_text_en" name="header_top_text_en" value="' . esc_attr($header_top_text_en) . '" class="regular-text">';
    }

    function header_workshop_text_en_callback() {
    $header_workshop_text_en = get_option('header_workshop_text_en', '');
    echo '<input type="text" id="header_workshop_text_en" name="header_workshop_text_en" value="' . esc_attr($header_workshop_text_en) . '" class="regular-text">';
    }

    function header_reserve_text_en_callback() {
    $header_reserve_text_en = get_option('header_reserve_text_en', '');
    echo '<input type="text" id="header_reserve_text_en" name="header_reserve_text_en" value="' . esc_attr($header_reserve_text_en) . '" class="regular-text">';
    }

    function header_inquiry_text_en_callback() {
    $header_inquiry_text_en = get_option('header_inquiry_text_en', '');
    echo '<input type="text" id="header_inquiry_text_en" name="header_inquiry_text_en" value="' . esc_attr($header_inquiry_text_en) . '" class="regular-text">';
    }

    function header_top_text_cn_callback() {
    $header_top_text_cn = get_option('header_top_text_cn', '');
    echo '<input type="text" id="header_top_text_cn" name="header_top_text_cn" value="' . esc_attr($header_top_text_cn) . '" class="regular-text">';
    }

    function header_workshop_text_cn_callback() {
    $header_workshop_text_cn = get_option('header_workshop_text_cn', '');
    echo '<input type="text" id="header_workshop_text_cn" name="header_workshop_text_cn" value="' . esc_attr($header_workshop_text_cn) . '" class="regular-text">';
    }

    function header_reserve_text_cn_callback() {
    $header_reserve_text_cn = get_option('header_reserve_text_cn', '');
    echo '<input type="text" id="header_reserve_text_cn" name="header_reserve_text_cn" value="' . esc_attr($header_reserve_text_cn) . '" class="regular-text">';
    }

    function header_inquiry_text_cn_callback() {
    $header_inquiry_text_cn = get_option('header_inquiry_text_cn', '');
    echo '<input type="text" id="header_inquiry_text_cn" name="header_inquiry_text_cn" value="' . esc_attr($header_inquiry_text_cn) . '" class="regular-text">';
    }
// ここまでヘッダー


// フッター設定フィールドのコールバック関数 (日本語)
    function footer_text_ja_callback() {
        $footer_text_ja = get_option('footer_text_ja', '');
        echo '<input type="text" id="footer_text_ja" name="footer_text_ja" value="' . esc_attr($footer_text_ja) . '" class="regular-text">';
    }

    function footer_reservation_text_ja_callback() {
        $footer_reservation_text_ja = get_option('footer_reservation_text_ja', '');
        echo '<input type="text" id="footer_reservation_text_ja" name="footer_reservation_text_ja" value="' . esc_attr($footer_reservation_text_ja) . '" class="regular-text">';
    }

    function footer_inquiry_text_ja_callback() {
        $footer_inquiry_text_ja = get_option('footer_inquiry_text_ja', '');
        echo '<input type="text" id="footer_inquiry_text_ja" name="footer_inquiry_text_ja" value="' . esc_attr($footer_inquiry_text_ja) . '" class="regular-text">';
    }

    function footer_reserve_text_ja_callback() {
        $footer_policy_text_ja = get_option('footer_policy_text_ja', '');
        echo '<input type="text" id="footer_policy_text_ja" name="footer_policy_text_ja" value="' . esc_attr($footer_policy_text_ja) . '" class="regular-text">';
    }

    function footer_termsofservice_text_ja_callback() {
        $footer_termsofservice_text_ja = get_option('footer_termsofservice_text_ja', '');
        echo '<input type="text" id="footer_termsofservice_text_ja" name="footer_termsofservice_text_ja" value="' . esc_attr($footer_termsofservice_text_ja) . '" class="regular-text">';
    }

    function footer_transaction_text_ja_callback() {
        $footer_transaction_text_ja = get_option('footer_transaction_text_ja', '');
        echo '<input type="text" id="footer_transaction_text_ja" name="footer_transaction_text_ja" value="' . esc_attr($footer_transaction_text_ja) . '" class="regular-text">';
    }





    function footer_reservation_text_en_callback() {
        $footer_reservation_text_en = get_option('footer_reservation_text_en', '');
        echo '<input type="text" id="footer_reservation_text_en" name="footer_reservation_text_en" value="' . esc_attr($footer_reservation_text_en) . '" class="regular-text">';
    }

    function footer_inquiry_text_en_callback() {
        $footer_inquiry_text_en = get_option('footer_inquiry_text_en', '');
        echo '<input type="text" id="footer_inquiry_text_en" name="footer_inquiry_text_en" value="' . esc_attr($footer_inquiry_text_en) . '" class="regular-text">';
    }

    function footer_reserve_text_en_callback() {
        $footer_policy_text_en = get_option('footer_policy_text_en', '');
        echo '<input type="text" id="footer_policy_text_en" name="footer_policy_text_en" value="' . esc_attr($footer_policy_text_en) . '" class="regular-text">';
    }

    function footer_termsofservice_text_en_callback() {
        $footer_termsofservice_text_en = get_option('footer_termsofservice_text_en', '');
        echo '<input type="text" id="footer_termsofservice_text_en" name="footer_termsofservice_text_en" value="' . esc_attr($footer_termsofservice_text_en) . '" class="regular-text">';
    }

    function footer_transaction_text_en_callback() {
        $footer_transaction_text_en = get_option('footer_transaction_text_en', '');
        echo '<input type="text" id="footer_transaction_text_en" name="footer_transaction_text_en" value="' . esc_attr($footer_transaction_text_en) . '" class="regular-text">';
    }





    function footer_reservation_text_cn_callback() {
        $footer_reservation_text_cn = get_option('footer_reservation_text_cn', '');
        echo '<input type="text" id="footer_reservation_text_cn" name="footer_reservation_text_cn" value="' . esc_attr($footer_reservation_text_cn) . '" class="regular-text">';
    }

    function footer_inquiry_text_cn_callback() {
        $footer_inquiry_text_cn = get_option('footer_inquiry_text_cn', '');
        echo '<input type="text" id="footer_inquiry_text_cn" name="footer_inquiry_text_cn" value="' . esc_attr($footer_inquiry_text_cn) . '" class="regular-text">';
    }

    function footer_reserve_text_cn_callback() {
        $footer_policy_text_cn = get_option('footer_policy_text_cn', '');
        echo '<input type="text" id="footer_policy_text_cn" name="footer_policy_text_cn" value="' . esc_attr($footer_policy_text_cn) . '" class="regular-text">';
    }

    function footer_termsofservice_text_cn_callback() {
        $footer_termsofservice_text_cn = get_option('footer_termsofservice_text_cn', '');
        echo '<input type="text" id="footer_termsofservice_text_cn" name="footer_termsofservice_text_cn" value="' . esc_attr($footer_termsofservice_text_cn) . '" class="regular-text">';
    }

    function footer_transaction_text_cn_callback() {
        $footer_transaction_text_cn = get_option('footer_transaction_text_cn', '');
        echo '<input type="text" id="footer_transaction_text_cn" name="footer_transaction_text_cn" value="' . esc_attr($footer_transaction_text_cn) . '" class="regular-text">';
    }

// ここまでフッター



/**
 * 管理メニューにトップページ設定、ヘッダー設定、フッター設定を追加
 */
function my_custom_theme_menu() {
    add_menu_page(
        'ページ設定',                   // メインメニューのタイトル
        'ページ設定',                   // メニュータイトル
        'manage_options',               // 必要な権限
        'page-settings',                // メニューのスラッグ
        'my_custom_theme_settings_page_top', // コールバック関数
        'dashicons-admin-generic',      // アイコン
        5                               // メニューの位置
    );

    // トップページ設定サブメニューの追加
    add_submenu_page(
        'page-settings',                // 親メニューのスラッグ
        'トップページ設定',             // ページタイトル
        'トップページ設定',             // メニュータイトル
        'manage_options',               // 必要な権限
        'top-page-settings-sub',        // メニューのスラッグ
        'my_custom_theme_settings_page_top' // コールバック関数
    );

    // ヘッダー設定サブメニューの追加
    add_submenu_page(
        'page-settings',                // 親メニューのスラッグ
        'ヘッダー設定',                 // ページタイトル
        'ヘッダー設定',                 // メニュータイトル
        'manage_options',               // 必要な権限
        'header-settings-sub',          // メニューのスラッグ
        'my_custom_theme_settings_page_header' // コールバック関数
    );

    // フッター設定サブメニューの追加
    add_submenu_page(
        'page-settings',                // 親メニューのスラッグ
        'フッター設定',                 // ページタイトル
        'フッター設定',                 // メニュータイトル
        'manage_options',               // 必要な権限
        'footer-settings-sub',          // メニューのスラッグ
        'my_custom_theme_settings_page_footer' // コールバック関数
    );
}
add_action('admin_menu', 'my_custom_theme_menu');

// トップページ設定の表示関数
function my_custom_theme_settings_page_top() {
    ?>
    <div class="wrap">
        <h1>トップページ設定</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields('top_page_settings_group');
            do_settings_sections('top-page-settings-sub');
            submit_button();
            ?>
        </form>
    </div>
    <?php
}
// メディアライブラリを正しく読み込むためのフック
function enqueue_wp_media_library() {
    wp_enqueue_media();
}
add_action('admin_enqueue_scripts', 'enqueue_wp_media_library');
// ヘッダー設定の表示関数
function my_custom_theme_settings_page_header() {
    ?>
    <div class="wrap">
        <h1>ヘッダー設定</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields('header_settings_group');
            do_settings_sections('header-settings-sub');
            submit_button();
            ?>
        </form>
    </div>
    <?php
}
// フッター設定の表示関数
function my_custom_theme_settings_page_footer() {
    ?>
    <div class="wrap">
        <h1>フッター設定</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields('footer_settings_group');
            do_settings_sections('footer-settings-sub');
            submit_button();
            ?>
        </form>
    </div>
    <?php
}
?>