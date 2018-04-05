<?php

// ===== Удаление линков из хедера wordpress ======= //

add_filter('xmlrpc_enabled','__return_false');
remove_action('wp_head','wp_generator');
remove_action('wp_head','rsd_link');
remove_action('wp_head','wlwmanifest_link');
remove_action('wp_head','wp_shortlink_wp_head');

// ===== Отключение авто форматирования ======== //

remove_filter('the_content', 'wpautop' );
remove_filter('the_excerpt', 'wpautop' );
remove_filter('comment_text', 'wpautop');

// ===== Отключение версии файлов ======== //

function vc_remove_wp_ver_css_js( $src ) {
    if ( strpos( $src, 'ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'vc_remove_wp_ver_css_js', 9999 );
add_filter( 'script_loader_src', 'vc_remove_wp_ver_css_js', 9999 );
add_filter( 'wp_calculate_image_srcset_meta', '__return_null' );

// ===== Включение миниатюр ======== //

add_theme_support('post-thumbnails');

// ====== Добавление js ======== //

add_action('wp_enqueue_scripts', 'bootstrap_js');
function bootstrap_js() {
  wp_enqueue_script('bootstrap', get_template_directory_uri(). '/js/bootstrap.min.js', array('jquery'));
}
add_action('wp_enqueue_scripts', 'fontawesome_js');
function fontawesome_js() {
  wp_enqueue_script('fontawesome', get_template_directory_uri(). '/js/fontawesome-all.min.js', array('jquery'));
}
add_action('wp_enqueue_scripts', 'cloudvape_js');
function cloudvape_js() {
  wp_enqueue_script('cloudvape', get_template_directory_uri(). '/js/cloudvape.js', array('jquery'));
}
add_action('wp_enqueue_scripts', 'nicescroll_js');
function nicescroll_js() {
  wp_enqueue_script('nicescroll', get_template_directory_uri(). '/js/nicescroll.min.js', array('jquery'));
}

// ========== Добавление Bootstrap Menu ================ //

require_once('bs4navwalker.php');
register_nav_menu('top', 'Top menu');

?>