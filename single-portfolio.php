<?php
/**
 * Single Portfolio Template
 *
 * @package YourThemeName
 */

get_header();
?>

<div class="rn-portfolio-single-area rn-section-gap section-separator">
    <div class="container">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <!-- Section Title -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h2 class="title"><?php the_title(); ?></h2>
                        <span class="subtitle">
                            <?php echo esc_html(get_post_meta(get_the_ID(), 'portfolio_category', true)); ?>
                        </span>
                    </div>
                </div>
            </div>

            <!-- Portfolio Details -->
            <div class="row mt--40">
                <!-- Thumbnail -->
                <div class="col-lg-8 col-md-12">
                    <div class="portfolio-thumbnail">
                        <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" alt="<?php the_title(); ?>">
                        <?php endif; ?>
                    </div>
                </div>
                <!-- Details -->
                <div class="col-lg-4 col-md-12">
                    <div class="portfolio-details">
                        <h4>Project Details</h4>
                        <ul>
                            <li><strong>Category:</strong> 
                                <?php echo esc_html(get_post_meta(get_the_ID(), 'portfolio_category', true)); ?>
                            </li>
                            <li><strong>Likes:</strong> 
                                <?php echo intval(get_post_meta(get_the_ID(), 'portfolio_likes', true)); ?>
                            </li>
                            <li><strong>Published on:</strong> <?php echo get_the_date(); ?></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Portfolio Content -->
            <div class="row mt--50">
                <div class="col-lg-12">
                    <div class="portfolio-content">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>

            <!-- Back to Portfolio -->
            <div class="row mt--40">
                <div class="col-lg-12 text-center">
                    <a href="<?php echo esc_url(get_post_type_archive_link('portfolio')); ?>" class="btn btn-primary">Back to Portfolio</a>
                </div>
            </div>
        <?php endwhile; endif; ?>
    </div>
</div>

<?php get_footer(); ?>
