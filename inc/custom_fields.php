<?php

function add_custom_meta_boxes(){
    add_meta_box( 'productsInfo', 'More Product Info', 'productsInfoCallback', 'post', 'normal', 'default', null );
}

add_action('add_meta_boxes', 'add_custom_meta_boxes');

function productsInfoCallback($post){
    require_once get_template_directory() . '/inc/productsInfoForm.php';
}

function save_productsInfo_meta_boxes($post_id){
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    $fields = [
        'F4_Products'
    ];

    foreach ($fields as $field) {
        if (array_key_exists($field, $_POST)) {
            update_post_meta($post_id, $field, $_POST[$field]);
        }
    }
}

add_action('save_post', 'save_productsInfo_meta_boxes');
