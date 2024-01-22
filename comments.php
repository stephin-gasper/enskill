<?php
/**
 * The template for displaying comments.
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Enskill
 */
/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if (post_password_required()) {
    return;
}
?>
<h2 class="screen-reader-text">Reader Interactions</h2>
<div class="entry-comments" id="comments">

    <?php
    // You can start editing here -- including this comment!
    if (have_comments()) :
        ?>
        <h3 class="comments-title">
            <?php
            _e('Comments', 'enskill');
            ?>
        </h3>

        <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : // Are there comments to navigate through? ?>
            <nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
                <h2 class="screen-reader-text"><?php esc_html_e('Comment navigation', 'enskill'); ?></h2>
                <div class="nav-links">

                    <div class="nav-previous"><?php previous_comments_link(esc_html__('Older Comments', 'enskill')); ?></div>
                    <div class="nav-next"><?php next_comments_link(esc_html__('Newer Comments', 'enskill')); ?></div>

                </div><!-- .nav-links -->
            </nav><!-- #comment-nav-above -->
        <?php endif; // Check for comment navigation. ?>

        <ol class="comment-list">
            <?php
            wp_list_comments(array(
                'type' => 'comment',
                'avatar_size' => 48,
                'format' => 'html5', //* Not necessary, but a good example
                'callback' => 'enskill_comment_callback',
            ));
            ?>
        </ol><!-- .comment-list -->

        <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : // Are there comments to navigate through? ?>
            <nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
                <h2 class="screen-reader-text"><?php esc_html_e('Comment navigation', 'enskill'); ?></h2>
                <div class="nav-links">

                    <div class="nav-previous"><?php previous_comments_link(esc_html__('Older Comments', 'enskill')); ?></div>
                    <div class="nav-next"><?php next_comments_link(esc_html__('Newer Comments', 'enskill')); ?></div>

                </div><!-- .nav-links -->
            </nav><!-- #comment-nav-below -->
            <?php
        endif; // Check for comment navigation.

    endif; // Check for have_comments().
    // If comments are closed and there are comments, let's leave a little note, shall we?
    if (!comments_open() && get_comments_number() && post_type_supports(get_post_type(), 'comments')) :
        ?>

        <p class="no-comments"><?php esc_html_e('Comments are closed.', 'enskill'); ?></p>
        <?php
    endif;
    ?>

</div><!-- #comments -->
<?php
comment_form();

function enskill_comment_callback($comment, array $args, $depth) {

    $GLOBALS['comment'] = $comment;
    ?>

    <li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
        <article itemprop="comment" itemscope="" itemtype="http://schema.org/Comment">

            <header class="comment-header">
                <p class="comment-author" itemprop="author" itemscope="" itemtype="http://schema.org/Person">
                    <?php
                    echo get_avatar($comment, $args['avatar_size']);

                    $author = get_comment_author();
                    $url = get_comment_author_url();

                    if (!empty($url) && 'http://' !== $url) {
                        $author = sprintf('<a href="%s" class="comment-author-link" rel="external nofollow" itemprop="url">%s</a>', esc_url($url), $author);
                    }

                    /**
                     * Filter the "comment author says" text.
                     *
                     * Allows developer to filter the "comment author says" text so it can say something different, or nothing at all.
                     *
                     * @since unknown
                     * 
                     * @param string $text Comment author says text.
                     */
                    $comment_author_says_text = apply_filters('comment_author_says_text', __('says', 'enskill'));

                    if (!empty($comment_author_says_text)) {
                        $comment_author_says_text = '<span class="says">' . $comment_author_says_text . '</span>';
                    }

                    printf('<span itemprop="name">%s</span> %s', $author, $comment_author_says_text);
                    ?>
                </p>

                <?php
                echo '<p class="comment-meta">';
                echo '<time class="comment-time" datetime="'.get_comment_time( 'c' ).'" itemprop="datePublished">';
                printf('<a href="%s" %s>', esc_url(get_comment_link($comment->comment_ID)), 'class="comment-time-link" itemprop="url"');
                echo esc_html(get_comment_date()) . ' ' . __('at', 'genesis') . ' ' . esc_html(get_comment_time());
                echo '</a></time></p>';

                edit_comment_link(__('(Edit)', 'enskill'), ' ');
                ?>
            </header>

            <div class="comment-content" itemprop="text">
                <?php if (!$comment->comment_approved) : ?>
                    <?php
                    /**
                     * Filter the "comment awaiting moderation" text.
                     *
                     * Allows developer to filter the "comment awaiting moderation" text so it can say something different, or nothing at all.
                     *
                     * @since unknown
                     * 
                     * @param string $text Comment awaiting moderation text.
                     */
                    $comment_awaiting_moderation_text = __('Your comment is awaiting moderation.', 'enskill');
                    ?>
                    <p class="alert"><?php echo $comment_awaiting_moderation_text; ?></p>
                <?php endif; ?>

                <?php comment_text(); ?>
            </div>

            <?php
            comment_reply_link(array_merge($args, array(
                'depth' => $depth,
                'before' => sprintf('<div %s>', 'class="comment-reply"'),
                'after' => '</div>',
            )));
            ?>

        </article>
        <?php
        //* No ending </li> tag because of comment threading
    }
    