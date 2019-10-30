<?php

function addCustomThemeFiles_F4(){
    wp_enqueue_style('bootstrapCSSF4', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '4.3.1', 'all');
    wp_enqueue_style('customCSS', get_template_directory_uri() . '/assets/css/style.css', array(), '0.0.2', 'all');

    wp_enqueue_script('bootstrapJSF4', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '4.3.1', true);
    wp_enqueue_script('customJSF4', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '0.0.1', true);
};

add_action('wp_enqueue_scripts', 'addCustomThemeFiles_F4');
add_theme_support('post-thumbnails', array('post'));

function addCustomMenus_F4(){
    add_theme_support('menus');
    register_nav_menu('top_navigation', __('The top navigation is located at the top of each page.', '1902Custom'));
    register_nav_menu('bottom_navigation', __('The bottom navigation is located at the bottom of each page.', '1902Custom'));
    register_nav_menu('side_navigation', __('The side navigation is located on the left of each page.', '1902Custom'));
}
add_action('after_setup_theme', 'addCustomMenus_F4');

function register_navwalker(){
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );
