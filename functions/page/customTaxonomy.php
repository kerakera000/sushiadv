<?php
/**
 * カスタムタクソノミー
 */

register_taxonomy(
  'new-temppage',
  array('temppage'),
  array(
    'label' => 'カテゴリ',
    'public' => true,'show_ui' => true,
    'hierarchical' => true,
    'query_var' => true,
    'show_in_rest' => true,
  )
);
register_taxonomy(
  'new-faq',
  array('faq'),
  array(
    'label' => 'カテゴリ',
    'public' => true,'show_ui' => true,
    'hierarchical' => true,
    'query_var' => true,
    'show_in_rest' => true,
  )
);

?>