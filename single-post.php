<?php get_header(); ?>

<style>
    .post-title {
        color: black;
        margin-top: 50px;

    }
    .post-content {
        text-align: justify;
    }
    .wp-block-heading {
        color: black;
        margin-top: 30px;
    }

    .post-navigation {
        color: blue;
    }
    .post-navigation a{
        color: red;
        font-weight: bold;
    }
    

</style>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <article id="post-<?php the_ID(); ?>" <?php post_class('single-post'); ?>>
                <header class="post-header text-center mb-4">
                    <h1 class="post-title"><?php the_title(); ?></h1>
                    <div class="post-meta text-muted">
                        <!-- <span><i class="feather-user"></i> <?php the_author_posts_link(); ?></span> | -->
                        <span><i class="feather-calendar"></i> <?php echo get_the_date(); ?></span> 
                        <!-- <span><i class="feather-folder"></i> <?php the_category(', '); ?></span> -->
                    </div>
                </header>
                
                <?php if (has_post_thumbnail()) : ?>
                    <div class="post-thumbnail text-center mb-4">
                        <?php the_post_thumbnail('large', ['class' => 'img-fluid rounded']); ?>
                    </div>
                <?php endif; ?>
                
                <div class="post-content">
                    <?php the_content(); ?>
                </div>

                <footer class="post-footer mt-4">
                    <div class="post-tags">
                        <?php the_tags('<span class="badge bg-primary">', '</span> <span class="badge bg-primary">', '</span>'); ?>
                    </div>
                </footer>
            </article>

            <!-- Post Navigation -->
            <div class="post-navigation my-5">
                <div class="d-flex justify-content-between">
                    <div class="prev-post">
                        <?php previous_post_link('%link', '<i class="feather-arrow-left"></i> Previous Post'); ?>
                    </div>
                    <div class="next-post">
                        <?php next_post_link('%link', 'Next Post <i class="feather-arrow-right"></i>'); ?>
                    </div>
                </div>
            </div>

            <!-- Comments Section -->
            <div class="comments-area mt-5">
                <?php comments_template(); ?>
            </div>
        </div>
    </div>
</div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>