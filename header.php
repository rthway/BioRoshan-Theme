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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> <!-- Font Awesome for the hamburger icon -->
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
                        <a class="rn-btn" target="_blank" href="https://www.youtube.com/@whitehillitsolution864">
                            <span><?php esc_html_e('Youtube', 'bioroshan'); ?></span>
                        </a>
                        <!-- Hamburger Menu for Mobile -->
                        <div class="hamberger-menu d-block d-xl-none">
                            <i id="menuBtn" class="feather-menu humberger-menu fas fa-bars"></i>
                        </div>
                    </div>
                    <!-- End Header Right -->
                </div>
            </div>
            <!-- End Header Center -->
        </div>
    </header>
    <!-- End Header Area -->

    <!-- Mobile Menu (Initially Hidden) -->
    <div id="mobileMenu" class="mobile-menu d-xl-none">
        <!-- Close Button -->
        <div id="closeMenu" class="close-menu">
            <span><i class="fas fa-times"></i></span>
        </div>

        <?php
        wp_nav_menu([
            'theme_location' => 'primary_menu',
            'menu_class'     => 'mobile-menu-list',
            'container'      => false,
            'fallback_cb'    => false,
        ]);
        ?>
    </div>

    <!-- Add the Toggle Menu Script -->
    <script>
        // Toggle the mobile menu
        document.getElementById('menuBtn').addEventListener('click', function() {
            var mobileMenu = document.getElementById('mobileMenu');
            mobileMenu.classList.toggle('active');
        });

        // Close the mobile menu
        document.getElementById('closeMenu').addEventListener('click', function() {
            var mobileMenu = document.getElementById('mobileMenu');
            mobileMenu.classList.remove('active');
        });
    </script>

    <style>
        /* Mobile Menu Styles */
        #mobileMenu {
            display: none;
            background: #333;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1000;
            padding-top: 50px;
        }

        #mobileMenu.active {
            display: block;
        }

        .mobile-menu-list {
            list-style-type: none;
            padding-left: 0;
            text-align: center;
        }

        .mobile-menu-list li {
            padding: 10px 0;
        }

        .mobile-menu-list li a {
            color: white;
            text-decoration: none;
        }

        /* Mobile Hamburger Icon */
        .feather-menu {
            font-size: 30px;
            color: #fff;
        }

        /* Close Button Styles */
        .close-menu {
            position: absolute;
            top: 20px;
            right: 20px;
            cursor: pointer;
        }

        .close-menu i {
            font-size: 30px;
            color: #fff;
        }
    </style>
    
    <?php wp_footer(); ?>
</body>

</html>
