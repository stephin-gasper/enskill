<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Enskill
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('row'); ?> itemscope="" itemtype="http://schema.org/BlogPosting" itemprop="blogPost">
    <div class="col-md-4 col-sm-12">
        <a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo esc_html(get_the_title()); ?>">
            <?php the_post_thumbnail(); ?>
        </a>
    </div>
    <div class="col-md-8 col-sm-12">
         <header class="entry-header">
            <?php
                    if ( is_single() ) {
                            the_title( '<h2 class="entry-title" itemprop="headline">', '</h2>' );
                    } else {
                            the_title( '<h2 class="entry-title" itemprop="headline"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                    }

            if ( 'post' === get_post_type() ) : ?>
            <p class="entry-meta">
                    <?php enskill_posted_on(); ?>
            </p><!-- .entry-meta -->
            <?php
            endif; ?>
        </header><!-- .entry-header -->

        <div class="entry-content" itemprop="text">
            <?php
                    the_content( sprintf(
                            /* translators: %s: Name of current post. */
                            wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'enskill' ), array( 'span' => array( 'class' => array() ) ) ),
                            the_title( '<span class="screen-reader-text">"', '"</span>', false )
                    ) );

                    wp_link_pages( array(
                            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'enskill' ),
                            'after'  => '</div>',
                    ) );
            ?>
        </div><!-- .entry-content -->

        <footer class="entry-footer">
            <?php enskill_entry_footer(); ?>
        </footer><!-- .entry-footer -->
    </div>
</article><!-- #post-## -->
