<?php
function mytheme_customize_register($wp_customize) {

    $wp_customize->add_setting( 'F4_backgroundColour' , array(
        'default'   => '#ecf0f1',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'F4_backgroundColourControl', array(
        'label'       => __( 'Background Color', 'F4Custom' ),
        'description' => 'Change the Background Colour',
        'section'     => 'colors',
        'settings'    => 'F4_backgroundColour',
    )));

    //----------------------NAV BACKGROUND----------------------

    $wp_customize->add_setting( 'F4_navBackgroundColour' , array(
        'default'   => '#f1833b',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'F4_navBackgroundColourControl', array(
        'label'       => __( 'Nav Background Color', 'F4Custom' ),
        'description' => 'Change the Background Colour of the Navs',
        'section'     => 'colors',
        'settings'    => 'F4_navBackgroundColour',
    )));

    //----------------------SEARCH BAR--------------------------

    $wp_customize->add_setting( 'F4_searchButtonColour' , array(
        'default'   => '#000000',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'F4_searchButtonControl', array(
        'label'       => __( 'Search Button Outline Colour', 'F4Custom' ),
        'description' => 'Change the Colour of the outline for the Search Button',
        'section'     => 'colors',
        'settings'    => 'F4_searchButtonColour',
    )));

    //----------------------HEADER INFORMATION------------------

    $wp_customize->add_setting( 'F4_HeaderText' , array(
        'default'   => '#f1833b',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'F4_HeaderText', array(
        'label'       => __( 'Header Image Text Colour', 'F4Custom' ),
        'description' => 'Change the Colour of the Header Text',
        'section'     => 'colors',
        'settings'    => 'F4_HeaderText',
    )));
}
add_action('customize_register', 'mytheme_customize_register');

function mytheme_customize_css()
{
    ?>
    <style type="text/css">
    body {
        background-color: <?php echo get_theme_mod('F4_backgroundColour', '#ecf0f1');  ?>;
    }

    .navColour {
        background-color: <?php echo get_theme_mod('F4_navBackgroundColour', '#f1833b');  ?>;
    }

    .headerText {
        color: <?php echo get_theme_mod('F4_HeaderText', '#f1833b') ?>;
    }

    .btnColour {
        border-color: <?php echo get_theme_mod('F4_searchButtonColour','#000000') ?>
    }
    </style>
    <?php
}

add_action('wp_head', 'mytheme_customize_css');
?>
