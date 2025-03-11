<?php get_header(); ?>
<!-- Include Feather Icons -->
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>
<style>
.social-icone a {
    font-size: 24px; /* Adjust size as needed */
    color: #000; /* Adjust color */
    margin: 0 10px; /* Adjust spacing */
}

.social-icone a:hover {
    color: #0073e6; /* Hover color */
}
</style>

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

    <div class="rn-service-area rn-section-gap section-separator" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-left" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true">
                        <span class="subtitle"><?php echo esc_html(get_theme_mod('features_subtitle', '')); ?></span>
                        <h2 class="title"><?php echo esc_html(get_theme_mod('what_i_do_title', 'What We Do')); ?></h2>
                    </div>
                </div>
            </div>
            <div class="row row--25 mt_md--10 mt_sm--10">

                <?php
                // Loop through service 1 to 6
                for ($i = 1; $i <= 6; $i++) :
                    $service_icon_url = get_theme_mod("service_icon_$i", '');
                    $service_title = get_theme_mod("service_title_$i", '');
                    $service_description = get_theme_mod("service_description_$i", '');
                ?>
                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="<?php echo (100 * $i); ?>" data-aos-once="true" class="col-lg-6 col-xl-4 col-md-6 col-sm-12 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-service">
                            <div class="inner">
                                <div class="icon">
                                    <?php if ($service_icon_url) : ?>
                                        <img src="<?php echo esc_url($service_icon_url); ?>" alt="Service Icon">
                                    <?php endif; ?>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="#"><?php echo esc_html($service_title); ?></a></h4>
                                    <p class="description"><?php echo esc_html($service_description); ?></p>
                                    <a class="read-more-button" href="#"><i class="feather-arrow-right"></i></a>
                                </div>
                            </div>
                            <a class="over-link" href="#"></a>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>


    <!-- Start Portfolio Area -->
    <div class="rn-portfolio-area rn-section-gap section-separator" id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <span class="subtitle">Visit my portfolio and keep your feedback</span>
                    <h2 class="title">My Portfolio</h2>
                </div>
            </div>
        </div>

        <div class="row row--25 mt--10 mt_md--10 mt_sm--10">
            <?php
            $args = array('post_type' => 'portfolio', 'posts_per_page' => -1);
            $query = new WP_Query($args);
            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
                    $category = get_post_meta(get_the_ID(), 'portfolio_category', true);
                    $likes = get_post_meta(get_the_ID(), 'portfolio_likes', true);
                    ?>
                    <div class="col-lg-6 col-xl-4 col-md-6 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-portfolio">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('full'); ?>
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="category-info">
                                        <div class="category-list">
                                            <a href="#"><?php echo esc_html($category); ?></a>
                                        </div>
                                        <div class="meta">
                                            <span><a href="#"><i class="feather-heart"></i></a>
                                                <?php echo intval($likes); ?></span>
                                        </div>
                                    </div>
                                    <h4 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?> <i
                                                class="feather-arrow-up-right"></i></a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
    </div>
</div>
<!-- End portfolio Area -->

<!-- Start News Area -->
<div class="rn-blog-area rn-section-gap section-separator" id="blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="500" data-aos-once="true" class="section-title text-center">
                    <span class="subtitle">Visit my blog and keep your feedback</span>
                    <h2 class="title">My Blog</h2>
                </div>
            </div>
        </div>
        <div class="row row--25 mt--30 mt_md--10 mt_sm--10">
            <?php
            $args = array(
                'post_type'      => 'post', // Change if using a custom post type
                'posts_per_page' => 3, // Adjust the number of posts displayed
                'order'          => 'DESC',
                'orderby'        => 'date'
            );
            $query = new WP_Query($args);
            
            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
                    $categories = get_the_category();
                    $category_name = !empty($categories) ? esc_html($categories[0]->name) : 'Uncategorized';
            ?>
            <!-- Start Single Blog -->
            <div data-aos="fade-up" data-aos-duration="500" class="col-lg-6 col-xl-4 mt--30 col-md-6 col-sm-12 col-12">
                <div class="rn-blog">
                    <div class="inner">
                        <div class="thumbnail">
                            <a href="<?php the_permalink(); ?>">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('medium', ['alt' => get_the_title()]); ?>
                                <?php else : ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/default.jpg" alt="Default Blog Image">
                                <?php endif; ?>
                            </a>
                        </div>
                        <div class="content">
                            <div class="category-info">
                                <div class="category-list">
                                    <a href="<?php echo esc_url(get_category_link($categories[0]->term_id)); ?>">
                                        <?php echo esc_html($category_name); ?>
                                    </a>
                                </div>
                                <div class="meta">
                                    <span><i class="feather-clock"></i> <?php echo esc_html(get_the_date()); ?></span>
                                </div>
                            </div>
                            <h4 class="title">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?> <i class="feather-arrow-up-right"></i>
                                </a>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Blog -->
            <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p class="text-center">No blog posts available.</p>';
            endif;
            ?>
        </div>
    </div>
</div>
<!-- End News Area -->





<!-- Start Contact section -->
<div class="rn-contact-area rn-section-gap section-separator" id="contacts">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <span class="subtitle"><?php echo get_option('contact_section_subtitle', 'Contact'); ?></span>
                    <h2 class="title"><?php echo get_option('contact_section_title', 'Contact With Me'); ?></h2>
                </div>
            </div>
        </div>
        <div class="row mt--50 mt_md--40 mt_sm--40 mt-contact-sm">
            <div class="col-lg-5">
                <div class="contact-about-area">
                    <div class="thumbnail">
                        <img src="<?php echo esc_url(get_theme_mod('contact_image_url', get_template_directory_uri() . '/assets/images/contact/contact1.png')); ?>" alt="contact-img">
                    </div>
                    <div class="title-area">
                        <h4 class="title"><?php echo esc_html(get_theme_mod('contact_person_name', 'Roshan Kumar Thapa')); ?></h4>
                        <span><?php echo esc_html(get_theme_mod('contact_person_title', 'Chief Operating Officer')); ?></span>
                    </div>
                    <div class="description">
                        <p><?php echo esc_html(get_theme_mod('contact_description', 'I am available for freelance work. Connect with me via and call in to my account.')); ?></p>
                        <span class="phone">
                            <?php 
                                $phone = get_theme_mod('contact_phone', '+01234567890'); 
                                echo 'Phone: <a href="tel:' . esc_attr($phone) . '">' . esc_html($phone) . '</a>'; 
                            ?>
                        </span>
                        <span class="mail">
                            <?php 
                                $email = get_theme_mod('contact_email', 'admin@example.com'); 
                                echo 'Email: <a href="mailto:' . esc_attr($email) . '">' . esc_html($email) . '</a>'; 
                            ?>
                        </span>
                    </div>
                    <div class="social-area">
                        <div class="name"><?php echo esc_html(get_theme_mod('contact_social_title', 'FIND WITH ME')); ?></div>
                        <div class="social-icone">
                            <a href="<?php echo esc_url(get_theme_mod('facebook_url', '#')); ?>"><i class="fab fa-facebook"></i></a>
                            <a href="<?php echo esc_url(get_theme_mod('linkedin_url', '#')); ?>"><i class="fab fa-github"></i></a>
                            <a href="<?php echo esc_url(get_theme_mod('instagram_url', '#')); ?>"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div data-aos-delay="600" class="col-lg-7 contact-input">
                <div class="contact-form-wrapper">
                    <div class="introduce">
                        <form class="rnt-contact-form rwt-dynamic-form row" id="contact-form" method="POST" action="">

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="contact-name">Name</label>
                                    <input class="form-control form-control-lg" name="contact-name" id="contact-name" type="text" required>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="contact-phone">Phone</label>
                                    <input class="form-control" name="contact-phone" id="contact-phone" type="text" required>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="contact-email">E-mail</label>
                                    <input class="form-control form-control-sm" id="contact-email" name="contact-email" type="email" required>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="subject">Subject</label>
                                    <input class="form-control form-control-sm" id="subject" name="subject" type="text" required>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="contact-message">Your Message</label>
                                    <textarea name="contact-message" id="contact-message" cols="30" rows="10" required></textarea>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <button name="submit" type="submit" id="submit" class="rn-btn">
                                    <span>SEND MESSAGE</span>
                                    <i data-feather="arrow-right"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Contact section -->


<?php
get_footer(); // Loads the footer.php file
?>

</main>
<script type="text/javascript">
jQuery(document).ready(function(d){
    var l = 2500, t = 3800, r = t - 3000, n = 50, o = 150, c = 500, h = c + 800, p = 600, e = 1500;
    function u(s) {
        var i, e, a = m(s);
        s.parents(".cd-headline").hasClass("type") ?
            ((i = s.parent(".cd-words-wrapper")).addClass("selected").removeClass("waiting"),
            setTimeout(function(){
                i.removeClass("selected"), s.removeClass("is-visible").addClass("is-hidden").children("i").removeClass("in").addClass("out");
            }, c),
            setTimeout(function(){
                f(a, o);
            }, h)) :
            s.parents(".cd-headline").hasClass("letters") ?
                (e = s.children("i").length >= a.children("i").length,
                function s(i, e, a, n) {
                    i.removeClass("in").addClass("out");
                    i.is(":last-child") ? a && setTimeout(function(){ u(m(e)); }) :
                    setTimeout(function(){ s(i.next(), e, a, n); }, n);
                    var t;
                    i.is(":last-child") && d("html").hasClass("no-csstransitions") && (t = m(e), w(e, t));
                }(s.find("i").eq(0), s, e, n),
                C(a.find("i").eq(0), a, e, n)) :
                s.parents(".cd-headline").hasClass("clip") ?
                    s.parents(".cd-words-wrapper").animate({ width: "2px" }, p, function() {
                        w(s, a), f(a);
                    }) :
                s.parents(".cd-headline").hasClass("loading-bar") ?
                    (s.parents(".cd-words-wrapper").removeClass("is-loading"),
                    w(s, a),
                    setTimeout(function(){
                        u(a);
                    }, t),
                    setTimeout(function(){
                        s.parents(".cd-words-wrapper").addClass("is-loading");
                    }, r)) :
                    (w(s, a),
                    setTimeout(function(){
                        u(a);
                    }, l));
    }

    function f(s, i) {
        s.parents(".cd-headline").hasClass("type") ?
            (C(s.find("i").eq(0), s, false, i), s.addClass("is-visible").removeClass("is-hidden")) :
            s.parents(".cd-headline").hasClass("clip") && s.parents(".cd-words-wrapper").animate({ width: s.width() + 10 }, p, function() {
                setTimeout(function() {
                    u(s);
                }, e);
            });
    }

    function C(s, i, e, a) {
        s.addClass("in").removeClass("out"),
        s.is(":last-child") ?
            (i.parents(".cd-headline").hasClass("type") && setTimeout(function(){
                i.parents(".cd-words-wrapper").addClass("waiting");
            }, 200),
            e || setTimeout(function(){
                u(i);
            }, l)) :
            setTimeout(function(){
                C(s.next(), i, e, a);
            }, a);
    }

    function m(s) {
        return s.is(":last-child") ? s.parent().children().eq(0) : s.next();
    }

    function w(s, i) {
        s.removeClass("is-visible").addClass("is-hidden"), i.removeClass("is-hidden").addClass("is-visible");
    }

    d(".cd-headline.letters").find("b").each(function() {
        var s = d(this), e = s.text().split(""), a = s.hasClass("is-visible");
        for (i in e) 0 < s.parents(".rotate-2").length && (e[i] = "<em>" + e[i] + "</em>"),
        e[i] = a ? '<i class="in">' + e[i] + "</i>" : "<i>" + e[i] + "</i>";
        var n = e.join("");
        s.html(n).css("opacity", 1);
    });

    (function(s) {
        var n = l;
        s.each(function() {
            var s, i, e, a = d(this);
            a.hasClass("loading-bar") ?
                (n = t, setTimeout(function(){
                    a.find(".cd-words-wrapper").addClass("is-loading");
                }, r)) : a.hasClass("clip") ?
                (i = (s = a.find(".cd-words-wrapper")).width() + 10, s.css("width", i)) :
                a.hasClass("type") || (i = a.find(".cd-words-wrapper b"), e = 0, i.each(function() {
                    var s = d(this).width();
                    e < s && (e = s);
                }), a.find(".cd-words-wrapper").css("width", e)),
                setTimeout(function(){
                    u(a.find(".is-visible").eq(0));
                }, n);
        });
    })(d(".cd-headline"));
});
</script>