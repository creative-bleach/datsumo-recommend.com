<?php

add_theme_support( 'post-thumbnails');

function wp_favicon_remover() {
    exit;
}
add_action( 'do_faviconico', 'wp_favicon_remover');

// Prevent WP from adding <p> tags on all post types
function remove_p_on_pages() {
  if ( is_page() ) {
      remove_filter( 'the_content', 'wpautop' );
      remove_filter( 'the_excerpt', 'wpautop' );
  }
}
add_action( 'wp_head', 'remove_p_on_pages' );

// COLUMN POST TYPE
function create_post_type_column() {
  $support_fields = [
    'title',  // 記事タイトル
    'editor',  // 記事本文
    'thumbnail',  // アイキャッチ画像
    'revisions'  // リビジョン
  ];
  register_post_type( 'column',  // カスタム投稿名
    array(
      'label' => 'コラム',  // 管理画面の左メニューに表示されるテキスト
      'public' => true,  // 投稿タイプをパブリックにするか否か
      'has_archive' => false,  // アーカイブを有効にするか否か
      'menu_position' =>8,  // 管理画面上でどこに配置するか
      'supports' => $support_fields,  // 投稿画面で利用する機能
      // 'rewrite' => true,
      'rewrite' => ['with_front' => false],
      'can_export' => true,
    )
  );
}
add_action( 'init', 'create_post_type_column' ); // アクションに上記関数をフックします

// REMOVE EDITOR AT POST EDITOR
function my_remove_post_support() {
  remove_post_type_support('post','editor');          // 本文
  remove_post_type_support('post','excerpt');         // 抜粋
  remove_post_type_support('post','trackbacks');      // トラックバック
  remove_post_type_support('post','custom-fields');   // カスタムフィールド
  remove_post_type_support('post','comments');        // コメント
  remove_post_type_support('post','post-formats');    // 投稿フォーマット
}
add_action('init','my_remove_post_support');

// ADD CUSTOM SEARCH SORT
add_action( 'pre_get_posts', function ( $q )
{
    $url = $_SERVER['REQUEST_URI'];
    if (!is_admin() && $q->is_main_query() && ( $q->is_search())) {
      if(strstr($url,'sort_recommend')==true):
        $q->set( 'meta_key', 'sort_recommended' );
        $q->set( 'order',    'ASC'         );
        $q->set( 'orderby',  'meta_value_num'  );
        $q->set( 'post_status',  'publish'  );
      elseif(strstr($url,'sort_word-of-mouth')==true):
        $q->set( 'meta_key', 'sort_word-of-mouth' );
        $q->set( 'order',    'ASC'         );
        $q->set( 'orderby',  'meta_value_num'  );
        $q->set( 'post_status',  'publish'  );
      elseif(strstr($url,'off')==true): 
        $q->set( 'meta_key', 'sort_recommended' );
        $q->set( 'order',    'ASC'         );
        $q->set( 'orderby',  'meta_value_num'  );
        $q->set( 'post_status',  'publish'  );
      else:
        $q->set( 'meta_key', 'sort_recommended' );
        $q->set( 'order',    'ASC'         );
        $q->set( 'orderby',  'meta_value_num'  );
        $q->set( 'post_status',  'publish'  );
      endif;
    }
});