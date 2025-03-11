<?php
if (post_password_required()) {
    return;
}
?>

<div id="comments" class="comments-area">

    <?php if (have_comments()) : ?>
        <h2 class="comments-title">
            <?php
            $comment_count = get_comments_number();
            echo $comment_count . ' ' . _n('Comment', 'Comments', $comment_count, 'textdomain');
            ?>
        </h2>

        <ul class="comment-list">
            <?php
            wp_list_comments([
                'style'      => 'ul',
                'short_ping' => true,
                'avatar_size' => 50,
            ]);
            ?>
        </ul>

        <?php the_comments_navigation(); ?>

    <?php endif; ?>

    <?php if (!comments_open() && get_comments_number()) : ?>
        <p class="no-comments"><?php esc_html_e('Comments are closed.', 'textdomain'); ?></p>
    <?php endif; ?>

    <?php
    comment_form([
        'title_reply' => __('Leave a Comment', 'textdomain'),
        'title_reply_before' => '<h2 class="comment-reply-title">',
        'title_reply_after' => '</h2>',
        'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x('Comment', 'noun', 'textdomain') . '</label><textarea id="comment" name="comment" cols="45" rows="5" required></textarea></p>',
        'class_submit' => 'btn btn-primary',
    ]);
    ?>

</div>

<style>
    .comments-area {
        border: 1px solid #ddd;
        padding: 20px;
        border-radius: 8px;
        background-color:rgb(200, 203, 243);
        margin-top: 30px;
    }

    .comments-title, .comment-reply-title {
        color: blue;
    }

    .comment-list {
        list-style: none;
        padding: 0;
    }

    .comment-list li {
        border-bottom: 1px solid #ddd;
        padding: 15px 0;
    }

    .comment-form label {
        font-weight: bold;
        color: blue;
    }

    .comment-form textarea {
        width: 100%;
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 10px;
    }

    .btn-primary {
        background-color: blue;
        border-color: blue;
    }

    .btn-primary:hover {
        background-color: darkblue;
        border-color: darkblue;
    }
</style>
