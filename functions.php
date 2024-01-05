<?php 

// Funções para Limpar o Header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');
add_theme_support('menus');

function registrar_menu_principal() {
  register_nav_menu( 'header-principal',__('Header Principal') );
}

function registrar_menu_footer() {
  register_nav_menu( 'menu-footer',__('Menu Footer') );
}

add_action('init', 'registrar_menu_principal');
add_action('init', 'registrar_menu_footer');
?>