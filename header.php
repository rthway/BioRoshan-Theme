<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php wp_title(''); ?></title>
    <meta name="robots" content="index, follow" />
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico">
    <?php wp_head(); ?>
</head>

<body <?php body_class('template-color-1 spybody white-version'); ?> data-spy="scroll" data-target=".navbar-example2" data-offset="150">

    <!-- Start Header -->
    <header class="rn-header header-default black-logo-version header--fixed header--sticky">
        <div class="header-wrapper rn-popup-mobile-menu m--0 row align-items-center">
            <!-- Start Header Left -->
            <div class="col-lg-2 col-6">
                <div class="header-left">
                    <div class="logo">
                        <?php if (has_custom_logo()) : ?>
                            <?php the_custom_logo(); ?>
                        <?php else : ?>
                            <a href="<?php echo home_url(); ?>">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo-dark.png" alt="<?php bloginfo('name'); ?>">
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <!-- End Header Left -->
            <!-- Start Header Center -->
            <div class="col-lg-10 col-6">
                <div class="header-center">
                    <nav id="sideNav" class="mainmenu-nav navbar-example2 d-none d-xl-block">
                        <!-- Dynamic WordPress Menu -->
                        <?php
                        wp_nav_menu([
                            'theme_location' => 'primary_menu',
                            'menu_class'     => 'primary-menu nav nav-pills',
                            'container'      => false,
                            'fallback_cb'    => false,
                        ]);
                        ?>
                    </nav>
                    <!-- Start Header Right -->
                    <div class="header-right">
                        <a class="rn-btn" target="_blank" href="#">
                            <span><?php esc_html_e('BUY NOW', 'bioroshan'); ?></span>
                        </a>
                        <div class="hamberger-menu d-block d-xl-none">
                            <i id="menuBtn" class="feather-menu humberger-menu"></i>
                        </div>
                        <div class="close-menu d-block">
                            <span class="closeTrigger">
                                <i data-feather="x"></i>
                            </span>
                        </div>
                    </div>
                    <!-- End Header Right -->
                </div>
            </div>
            <!-- End Header Center -->
        </div>
    </header>
    <!-- End Header Area -->
