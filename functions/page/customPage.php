<?php
/**
 * 固定ページ生成
 */

function create_custom_pages_with_optional_parents() {
  $pages = [
    
  ];

  // foreach ($pages as $page) {
  //   $parent_page_id = 0;
  //   if (!empty($page['parent_slug'])) {
  //     $query = new WP_Query(array(
  //       'name'        => $page['parent_slug'],
  //       'post_type'   => 'page',
  //       'post_status' => 'publish',
  //       'numberposts' => 1
  //     ));

  //     if ($query->have_posts()) {
  //       $query->the_post();
  //       $parent_page_id = get_the_ID();
  //       wp_reset_postdata(); // クエリのリセット
  //     }
  //   }

  //   // スラッグと親ページIDに基づいてページが存在するか確認
  //   $existing_page_query = new WP_Query(array(
  //     'post_type'   => 'page',
  //     'post_status' => 'publish',
  //     'name'        => $page['slug'],
  //     'post_parent' => $parent_page_id,
  //     'numberposts' => 1
  //   ));

  //   if ($existing_page_query->have_posts()) {
  //     // 既にページが存在する場合はスキップ
  //     wp_reset_postdata(); // クエリのリセット
  //     continue;
  //   }

  //   wp_insert_post(array(
  //     'post_title'   => $page['title'],
  //     'post_content' => isset($page['content']) ? $page['content'] : '', // 'content' キーが存在する場合はその値を、存在しない場合は空文字列を使用
  //     'post_status'  => 'publish',
  //     'post_type'    => 'page',
  //     'post_name'    => $page['slug'],
  //     'post_parent'  => $parent_page_id
  //   ));
  // }
}

add_action('after_setup_theme', 'create_custom_pages_with_optional_parents');
?>
