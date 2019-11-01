<?php

function addCustomThemeFiles_F4(){
    wp_enqueue_style("bootstrapCSSF4", get_template_directory_uri() . "/assets/css/bootstrap.min.css", array(), "4.3.1", "all");
    wp_enqueue_style("customCSS", get_template_directory_uri() . "/assets/css/style.css", array(), "0.0.2", "all");

    wp_enqueue_script("jquery");
    wp_enqueue_script("bootstrapJSF4", get_template_directory_uri() . "/assets/js/bootstrap.min.js", array("jquery"), "4.3.1", true);
    wp_enqueue_script("customJSF4", get_template_directory_uri() . "/assets/js/script.js", array("jquery"), "0.0.1", true);
};

add_action("wp_enqueue_scripts", "addCustomThemeFiles_F4");

add_theme_support("post-thumbnails", array("post"));

function addCustomMenus_F4(){
    add_theme_support("menus");
    register_nav_menu("top_navigation", __("The top navigation is located at the top of each page.", "1902Custom"));
    register_nav_menu("bottom_navigation", __("The bottom navigation is located at the bottom of each page.", "1902Custom"));
    register_nav_menu("side_navigation", __("The side navigation is located on the left of each page.", "1902Custom"));
}
add_action("after_setup_theme", "addCustomMenus_F4");

function register_navwalker(){
    require_once get_template_directory() . "/class-wp-bootstrap-navwalker.php";
}
add_action( "after_setup_theme", "register_navwalker" );

// register_default_headers(array(
//     "defaultImage" => array(
//         "url"           => get_template_directory_uri() . "/assets/images/coast.jpeg",
//         "thumbnail_url" => get_template_directory_uri() . "/assets/images/coast.jpeg",
//         "description"   => __("The default image for the custom header.", "1902Custom")
//     )
// ));

$customHeaderDefaults = array(
    "width" => 1280,
    "height" => 720,
    "default-image" => get_template_directory_uri() . "/assets/images/coast.jpeg"
);
add_theme_support("custom-header", $customHeaderDefaults);

add_theme_support('wp-block-styles');
add_theme_support('post-formats', array('video', 'audio', 'image', 'gallery'));

function add_google_fonts() {
    wp_enqueue_style( " add_google_fonts ", " https://fonts.googleapis.com/css?family=EB+Garamond|Karla|Khula:400,700&display=swa", false );
}

add_action( "wp_enqueue_scripts", "add_google_fonts" );




function themename_custom_logo_setup() {
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );
