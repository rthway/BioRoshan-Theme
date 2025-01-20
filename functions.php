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





    // Add Service Section Customizer Settings
    $wp_customize->add_section('service_area', array(
        'title'    => __('Service Area', 'bioroshan'),
        'priority' => 30,
    ));

    // Add settings for subtitle and title
    $wp_customize->add_setting('features_subtitle', array(
        'default'   => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('features_subtitle', array(
        'label'    => __('Features Subtitle', 'bioroshan'),
        'section'  => 'service_area',
        'type'     => 'text',
    ));

    $wp_customize->add_setting('what_i_do_title', array(
        'default'   => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('what_i_do_title', array(
        'label'    => __('What I Do Title', 'bioroshan'),
        'section'  => 'service_area',
        'type'     => 'text',
    ));

    // Add service icon, title, and description fields for each service
    for ($i = 1; $i <= 6; $i++) {
        // Service icon (image upload)
        $wp_customize->add_setting("service_icon_$i", array(
            'default'   => '',
            'transport' => 'refresh',
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control(
            $wp_customize, "service_icon_$i", array(
                'label'    => __("Service $i Icon", 'bioroshan'),
                'section'  => 'service_area',
                'settings' => "service_icon_$i",
            )
        ));
        $wp_customize->add_control("service_icon_$i", array(
            'label'    => __("Service $i Icon", 'bioroshan'),
            'section'  => 'service_area',
            'type'     => 'text',
        ));

        $wp_customize->add_setting("service_title_$i", array(
            'default'   => '',
            'transport' => 'refresh',
        ));
        $wp_customize->add_control("service_title_$i", array(
            'label'    => __("Service $i Title", 'bioroshan'),
            'section'  => 'service_area',
            'type'     => 'text',
        ));

        $wp_customize->add_setting("service_description_$i", array(
            'default'   => '',
            'transport' => 'refresh',
        ));
        $wp_customize->add_control("service_description_$i", array(
            'label'    => __("Service $i Description", 'bioroshan'),
            'section'  => 'service_area',
            'type'     => 'textarea',
        ));
    }
}
add_action('customize_register', 'bioroshan_customize_register');



// Function to register the custom post type "Portfolio"
function register_portfolio_post_type() {
    // Define labels for the Portfolio custom post type
    $labels = array(
        'name'               => __('Portfolios'), // Name of the post type in the admin menu
        'singular_name'      => __('Portfolio'), // Singular name for one portfolio item
        'add_new'            => __('Add New Portfolio'), // Text for the "Add New" button
        'add_new_item'       => __('Add New Portfolio Item'), // Text for the "Add New Item" page
        'edit_item'          => __('Edit Portfolio Item'), // Text for the "Edit Item" page
        'new_item'           => __('New Portfolio Item'), // Text for creating a new item
        'view_item'          => __('View Portfolio Item'), // Text for viewing a single item
        'search_items'       => __('Search Portfolios'), // Text for the search functionality
        'not_found'          => __('No portfolios found'), // Message when no items are found
        'not_found_in_trash' => __('No portfolios found in trash'), // Message when no items are in the trash
        'menu_name'          => __('Portfolios'), // Label for the post type in the admin menu
    );

    // Define arguments for registering the Portfolio custom post type
    $args = array(
        'labels'             => $labels, // Assign the labels defined above
        'public'             => true, // Make the post type visible on the frontend and backend
        'has_archive'        => true, // Enable archive pages for the post type
        'rewrite'            => array('slug' => 'portfolio'), // URL slug for the portfolio
        'supports'           => array('title', 'editor', 'thumbnail', 'custom-fields'), // Features supported by the post type
        'menu_position'      => 5, // Position in the WordPress admin menu (below "Posts")
        'menu_icon'          => 'dashicons-portfolio', // Dashicon icon to represent the post type
    );

    // Register the custom post type
    register_post_type('portfolio', $args);
}

// Hook the function to the 'init' action to register the post type when WordPress initializes
add_action('init', 'register_portfolio_post_type');


// Function to load a custom template for single Portfolio posts
function portfolio_single_template($single) {
    global $post; // Access the global $post object

    // Check if the current post is of type 'portfolio'
    if ($post->post_type == 'portfolio' && file_exists(get_template_directory() . '/single-portfolio.php')) {
        // If a custom template exists, use it for displaying single Portfolio posts
        return get_template_directory() . '/single-portfolio.php';
    }

    // Return the default template if no custom template is found
    return $single;
}

// Hook the function to the 'single_template' filter to determine which template to use for single posts
add_filter('single_template', 'portfolio_single_template');
