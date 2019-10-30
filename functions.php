<?php

function addCustomThemeFiles_F4(){

    wp_enqueue_style("bootstrapCSSF4", get_template_directory_uri() . "/assets/css/bootstrap.min.css", array(), "4.3.1", "all");
    wp_enqueue_style("customCSS", get_template_directory_uri() . "/assets/css/style.css", array(), "0.0.2", "all");

    wp_enqueue_script("jquery");
    wp_enqueue_script("bootstrapJSF4", get_template_directory_uri() . "/assets/js/bootstrap.min.js", array("jquery"), "4.3.1", true);
    wp_enqueue_script("customJSF4", get_template_directory_uri() . "/assets/js/script.js", array("jquery"), "0.0.1", true);
};

add_action('wp_enqueue_scripts', 'addCustomThemeFiles_F4');

?>
