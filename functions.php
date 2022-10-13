<?php
//This is generalised themes support
function good_things_foundation_theme_support(){

add_theme_support( 'title-tag' );

add_theme_support( 'post-thumbnails' );

add_action('after_setup_theme', 'good_things_foundation_theme_support');

}

//Menu Setup

function good_things_foundation_menus(){

    $locations = array(
        'primary' => "Desktop Primary Top Nav",
        'mobile' => "Mobile Hamburger Menu Left Side"
    );

    register_nav_menus($locations);
}

add_action('init', 'good_things_foundation_menus');

function gtf_register_styles(){
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('global_styles', get_template_directory_uri() . "/assets/styles/global_styles.css", array(), $version, 'all');
    wp_enqueue_style('gtf-hero', get_template_directory_uri() . "/assets/styles/hero.css", array(), '1.0', 'all');
    wp_enqueue_style('gtf-imgText', get_template_directory_uri() . "/assets/styles/imgText.css", array(), '1.0', 'all');
    wp_enqueue_style('gtf-helpForm', get_template_directory_uri() . "/assets/styles/helpForm.css", array(), '1.0', 'all');
    wp_enqueue_style('gtf-mixedCta', get_template_directory_uri() . "/assets/styles/mixedCta.css", array(), '1.0', 'all');
    wp_enqueue_style('gtf-nav', get_template_directory_uri() . "/assets/styles/nav.css", array(), '1.0', 'all');
    wp_enqueue_style('gtf-button', get_template_directory_uri() . "/assets/styles/button.css", array(), '1.0', 'all');

}

add_action('wp_enqueue_scripts', 'gtf_register_styles');

// /**
//  * Custom Gutenberg blocks
//  */
// require get_template_directory() . '/inc/gutenberg.php';