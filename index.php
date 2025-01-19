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