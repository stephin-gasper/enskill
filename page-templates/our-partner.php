<?php
/**
 *  Template Name: Our Partners Template
 */
remove_filter( 'the_content', 'wpautop' );
get_header();
?>
<main id="main" class="site-main content-wrap" role="main">
    <article id="post-<?php the_ID(); ?>" <?php post_class('container-fluid'); ?> itemscope="" itemtype="http://schema.org/CreativeWork">
        <header class="entry-header row">
            <h1 class="col-lg-12 page-title entry-title">
                <span class="page-title-inner"><?php the_title(); ?></span>
            </h1>
        </header><!-- .entry-header -->
        <div class="entry-content row" itemprop="text">
            <div class="col-lg-12 page-description">
                Etiam feugiat lorem non metus. Sed augue ipsum, egestas nec, vestibulum et, malesuada adipiscing, dui. Donec posuere vulputate arcu. Praesent egestas tristique nibh. Nam at tortor in tellus interdum sagittis.
            </div>
            <div class="col-lg-12 partner-main"><?php
                    while (have_posts()) : the_post();
                        the_content();
                    endwhile; // End of the loop.
                ?></div>
        </div>
    </article>
</main>
<?php
get_footer();
