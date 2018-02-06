<?php
/*=================================*/
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'window._wpemojiSettings');
remove_action( 'wp_head','wp_syntax_head');
remove_action( 'wp_head', 'feed_links_extra', 3 );

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

remove_action('wp_head','start_post_rel_link',10,0);
remove_action('wp_head','index_rel_link');
remove_action('wp_head','rel_canonical');
remove_action( 'wp_head','adjacent_posts_rel_link_wp_head', 10, 0 );
remove_action( 'wp_head','wp_shortlink_wp_head', 10, 0 );

/*==================================*/

add_theme_support('post-thumbnails');

add_action( 'init', 'register_my_menu' );
function register_my_menu() {
  register_nav_menu('menu',__( 'Меню' ));
}


/*Функция обрезания тайтла*/
function trim_title_chars($count, $after) {
  $title = get_the_title();
  if (mb_strlen($title) > $count) $title = mb_substr($title,0,$count);
  else $after = '';
  echo $title . $after;
}

/*Функция обрезания текста*/
function trim_content_chars($count, $after) {
  $content = get_the_content();
  if (mb_strlen($content) > $count) $content = mb_substr($content,0,$count);
  else $after = '';
  echo $content . $after;
}

/*Заменяем три точки у эксперта*/
function new_excerpt_more($more) {
  return ' ...';
}
add_filter('excerpt_more', 'new_excerpt_more');


update_option('siteurl', 'http://mytheme.loc/');
update_option('home', 'http://mytheme.loc/');
