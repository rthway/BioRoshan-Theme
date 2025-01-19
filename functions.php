<?php
// Theme setup
function bioroshan_theme_setup() {
    // Add support for title tag, custom logo, and post thumbnails
    add_theme_support('title-tag');
    add_theme_support('custom-logo', ['height' => 100, 'width' => 300, 'flex-height' => true]);
    add_theme_support('post-thumbnails');
    
    // Register menus
    register_nav_menus(['primary_menu' => __('Primary Menu', 'bioroshan')]);

    // Add favicon to the header
    function bioroshan_add_favicon() {
        echo '<link rel="icon" href="' . get_template_directory_uri() . '/favicon.ico" type="image/x-icon" />';
    }
    add_action('wp_head', 'bioroshan_add_favicon');
}
add_action('after_setup_theme', 'bioroshan_theme_setup');


// Enqueue scripts and styles
function bioroshan_enqueue_assets() {
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/vendor/bootstrap.min.css', [], '5.0.0');
    wp_enqueue_style('main-style', get_stylesheet_uri(), [], '1.0');
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', ['jquery'], '1.0', true);
    wp_enqueue_script('text-type-js', get_template_directory_uri() . '/assets/js/vendor/text-type.js', ['jquery'], '1.0', true);
}
add_action('wp_enqueue_scripts', 'bioroshan_enqueue_assets');