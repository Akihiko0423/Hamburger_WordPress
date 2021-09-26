<?php

//テーマサポート
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
add_theme_support('post-thumbnails');           //アイキャッチ画像
add_theme_support('menus');                     //メニュー
add_theme_support('title-tag');                 //タイトルタグを出力
add_theme_support( 'automatic-feed-links' );    //この機能は、headerでの、投稿とコメントのRSSフィードのリンクを有効にします

//外部ファイルの読み込み
function hamburger_script() {
    wp_enqueue_style('font-awesome','https://use.fontawesome.com/releases/v5.6.1/css/all.css');
    wp_enqueue_style( 'stylesheet', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0' );
    wp_enqueue_script('jquery');
}

add_action( 'wp_enqueue_scripts', 'hamburger_script' );

//タイトルのキャッチフレーズとサイト名の間に入る記号の変更
add_filter('document_title_separator','my_document_title_separator');
function my_document_title_separator($separator){
    $separator = '|';
    return $separator;
}
//topページの時にタイトル名を変更
add_filter('document_title_parts','my_document_title_parts');
function my_document_title_parts($title){
    if(is_home()){
        unset($title['tagline']);
        //テキストを変更
        $title['title'] = 'ハンバーガーサイト | 最終課題';
    }
    return $title;
}


