<?php get_header(); ?>

<main class="main-page-wrapper">

    <!-- Start Slider Area -->
    <div id="home" class="rn-slider-area">
        <div class="slide slider-style-1">
            <div class="container">
                <div class="row row--30 align-items-center">
                    <div class="order-2 order-lg-1 col-lg-7 mt_md--50 mt_sm--50 mt_lg--30">
                        <div class="content">
                            <div class="inner">
                                <span class="subtitle"><?php echo esc_html(get_theme_mod('slider_subtitle', 'Welcome to my world')); ?></span>
                                <h1 class="title">
                                    Hi, I’m <span><?php echo esc_html(get_theme_mod('slider_name', 'John Doe')); ?></span><br>
                                    <span class="header-caption" id="page-top">
                                        <span class="cd-headline clip is-full-width">
                                            <span>a </span>
                                            <span class="cd-words-wrapper">
                                                <?php
                                                $rotating_texts = explode(',', get_theme_mod('slider_rotating_text', 'Developer.,Professional Coder.,Designer.'));
                                                foreach ($rotating_texts as $index => $text) {
                                                    $visibility = $index === 0 ? 'is-visible' : 'is-hidden';
                                                    echo "<b class='{$visibility}'>" . esc_html($text) . "</b>";
                                                }
                                                ?>
                                            </span>
                                        </span>
                                    </span>
                                </h1>
                                <div>
                                    <p class="description">
                                        <?php echo esc_html(get_theme_mod('slider_description', 'I use animation as a third dimension to simplify experiences and guide users through every interaction.')); ?>
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-xl-6 col-md-6 col-sm-6 col-12">
                                <div class="social-share-inner-left">
                                    <span class="title"><?php esc_html_e('Find with me', 'bioroshan'); ?></span>
                                    <ul class="social-share d-flex liststyle">
                                        <li class="facebook">
                                            <a href="<?php echo esc_url(get_theme_mod('facebook_url', '#')); ?>" target="_blank">
                                                <i class="fab fa-facebook" ></i> <!-- Font Awesome Facebook Icon -->
                                            </a>
                                        </li>
                                        <li class="instagram">
                                            <a href="<?php echo esc_url(get_theme_mod('instagram_url', '#')); ?>" target="_blank">
                                                <i class="fa-brands fa-github"></i>
                                            </a>
                                        </li>
                                        <li class="linkedin">
                                            <a href="<?php echo esc_url(get_theme_mod('linkedin_url', '#')); ?>" target="_blank">
                                                <i class="fab fa-linkedin"></i> <!-- Font Awesome LinkedIn Icon -->
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                </div>
                                <div class="col-lg-6 col-xl-6 col-md-6 col-sm-6 col-12 mt_mobile--30">
                                    <div class="skill-share-inner">
                                        <span class="title"><?php echo esc_html(get_theme_mod('best_skill_title', __('Best skill on', 'bioroshan'))); ?></span>
                                        <ul class="skill-share d-flex liststyle">
                                            <li><img src="<?php echo esc_url(get_theme_mod('skill_icon_1', get_template_directory_uri() . '/assets/images/icons/icons-01.png')); ?>" alt="Icon Image"></li>
                                            <li><img src="<?php echo esc_url(get_theme_mod('skill_icon_2', get_template_directory_uri() . '/assets/images/icons/icons-02.png')); ?>" alt="Icon Image"></li>
                                            <li><img src="<?php echo esc_url(get_theme_mod('skill_icon_3', get_template_directory_uri() . '/assets/images/icons/icons-03.png')); ?>" alt="Icon Image"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="order-1 order-lg-2 col-lg-5">
                        <div class="thumbnail">
                            <div class="inner">
                                <img src="<?php echo esc_url(get_theme_mod('slider_image', get_template_directory_uri() . '/assets/images/slider/banner-01.png')); ?>" alt="Personal Portfolio Images">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Slider Area -->




    


</main>