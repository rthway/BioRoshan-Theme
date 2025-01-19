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

    // Enqueue Font Awesome
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css', [], null);
}
add_action('wp_enqueue_scripts', 'bioroshan_enqueue_assets');


// Customize register function
function bioroshan_customize_register($wp_customize) {

    // Add Slider media section
    $wp_customize->add_section('slider_media_section', array(
        'title'       => __('Slider Media', 'bioroshan'),
        'description' => __('Add your slider media here.', 'bioroshan'),
        'priority'    => 29,
    ));

    // Slider Subtitle
    $wp_customize->add_setting('slider_subtitle', [
        'default'           => 'Welcome to my world',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('slider_subtitle', [
        'label'   => __('Slider Subtitle', 'bioroshan'),
        'section' => 'slider_media_section',
        'type'    => 'text',
    ]);

    // Slider Name
    $wp_customize->add_setting('slider_name', [
        'default'           => 'John Doe',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('slider_name', [
        'label'   => __('Slider Name', 'bioroshan'),
        'section' => 'slider_media_section',
        'type'    => 'text',
    ]);

    // Rotating Text
    $wp_customize->add_setting('slider_rotating_text', [
        'default'           => 'Developer.,Professional Coder.,Designer.',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('slider_rotating_text', [
        'label'   => __('Rotating Text (Comma-separated)', 'bioroshan'),
        'section' => 'slider_media_section',
        'type'    => 'textarea',
    ]);

    // Slider Description
    $wp_customize->add_setting('slider_description', [
        'default'           => 'I use animation as a third dimension to simplify experiences and guide users through every interaction.',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('slider_description', [
        'label'   => __('Slider Description', 'bioroshan'),
        'section' => 'slider_media_section',
        'type'    => 'textarea',
    ]);

    // Slider Image
    $wp_customize->add_setting('slider_image', [
        'default'           => get_template_directory_uri() . '/assets/images/slider/banner-01.png',
        'sanitize_callback' => 'esc_url_raw',
    ]);
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'slider_image', [
        'label'    => __('Slider Image', 'bioroshan'),
        'section'  => 'slider_media_section',
        'settings' => 'slider_image',
    ]));

    // Add social media section
    $wp_customize->add_section('social_media_section', array(
        'title'       => __('Social Media', 'bioroshan'),
        'description' => __('Add your social media links here.', 'bioroshan'),
        'priority'    => 30,
    ));

    // Facebook URL setting
    $wp_customize->add_setting('facebook_url', array(
        'default'   => '#',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('facebook_url', array(
        'label'   => __('Facebook URL', 'bioroshan'),
        'section' => 'social_media_section',
        'type'    => 'url',
    ));

    // github URL setting
    $wp_customize->add_setting('github_url', array(
        'default'   => '#',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('github_url', array(
        'label'   => __('github URL', 'bioroshan'),
        'section' => 'social_media_section',
        'type'    => 'url',
    ));

    // LinkedIn URL setting
    $wp_customize->add_setting('linkedin_url', array(
        'default'   => '#',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('linkedin_url', array(
        'label'   => __('LinkedIn URL', 'bioroshan'),
        'section' => 'social_media_section',
        'type'    => 'url',
    ));

    // Add Section for Skills Settings
    $wp_customize->add_section('bioroshan_skills_section', array(
        'title' => __('Skills Section', 'bioroshan'),
        'priority' => 30,
    ));

    // Add Setting and Control for Best Skill Title
    $wp_customize->add_setting('best_skill_title', array(
        'default' => __('Best skill on', 'bioroshan'),
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('best_skill_title', array(
        'label' => __('Best Skill Title', 'bioroshan'),
        'section' => 'bioroshan_skills_section',
        'type' => 'text',
    ));

    // Add Setting and Control for Skill Icon 1
    $wp_customize->add_setting('skill_icon_1', array(
        'default' => get_template_directory_uri() . '/assets/images/icons/icons-01.png',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'skill_icon_1', array(
        'label' => __('Skill Icon 1', 'bioroshan'),
        'section' => 'bioroshan_skills_section',
        'settings' => 'skill_icon_1',
    )));

    // Add Setting and Control for Skill Icon 2
    $wp_customize->add_setting('skill_icon_2', array(
        'default' => get_template_directory_uri() . '/assets/images/icons/icons-02.png',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'skill_icon_2', array(
        'label' => __('Skill Icon 2', 'bioroshan'),
        'section' => 'bioroshan_skills_section',
        'settings' => 'skill_icon_2',
    )));

    // Add Setting and Control for Skill Icon 3
    $wp_customize->add_setting('skill_icon_3', array(
        'default' => get_template_directory_uri() . '/assets/images/icons/icons-03.png',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'skill_icon_3', array(
        'label' => __('Skill Icon 3', 'bioroshan'),
        'section' => 'bioroshan_skills_section',
        'settings' => 'skill_icon_3',
    )));
}
add_action('customize_register', 'bioroshan_customize_register');
