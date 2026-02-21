<?php

/* ==============================
   ENQUEUE STYLES
============================== */
function shopco_assets() {

    // Main stylesheet
    wp_enqueue_style(
        'shopco-style',
        get_stylesheet_uri(),
        array(),
        '1.0'
    );

    // Custom CSS
    wp_enqueue_style(
        'shopco-custom-style',
        get_template_directory_uri() . '/assets/css/style.css',
        array(),
        '1.0'
    );

}
add_action('wp_enqueue_scripts', 'shopco_assets');


/* ==============================
   REGISTER MENUS
============================== */
function shopco_register_menu() {

    register_nav_menus(array(
        'header-menu' => __('Header Menu', 'shopco'),
    ));

}
add_action('init', 'shopco_register_menu');


/* ==============================
   THEME SUPPORT
============================== */
function shopco_theme_setup() {

    // Featured Images
    add_theme_support('post-thumbnails');

    // WooCommerce Support (important for assignment)
    add_theme_support('woocommerce');

}
add_action('after_setup_theme', 'shopco_theme_setup');


/* ==============================
   ACF OPTIONS PAGE
============================== */
if ( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title'  => 'Theme Settings',
        'menu_title'  => 'Theme Settings',
        'menu_slug'   => 'theme-settings',
        'capability'  => 'edit_posts',
        'redirect'    => false
    ));

}