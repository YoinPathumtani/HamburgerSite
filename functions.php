<?php
/* テーマサポート */
  add_theme_support( 'menus' );
  add_theme_support( 'title-tag');

/* タイトル出力 */
function hamburger_title($title) {
  if(is_front_page()&&is_home()) {
    $title=get_bloginfo('name', 'display');
  }elseif (is_singular()) {
    $title=single_post_title('', false);
  }
  return $title;
}
add_filter('pre_get_document_title', 'hamburger_title');

/* CSS読み込み */
function hamburger_script() {
  wp_enqueue_style('style', get_template_directory_uri().'/css/style.css', array(), '1.0.0');
  wp_enqueue_style('Roboto', '//fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap', array());
  wp_enqueue_style('mplus', '//mplus-webfonts.sourceforge.jp/mplus_webfonts.css', array());
  wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.7.0');
  wp_enqueue_script( 'jquery', get_template_directory_uri().'/js/jquery-3.6.0.min.js', array(), '3.6.0', true);
  wp_enqueue_script( 'style-js', get_template_directory_uri().'/js/style.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'hamburger_script');
