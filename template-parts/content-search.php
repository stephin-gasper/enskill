<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Enskill
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>  itemscope="" itemtype="http://schema.org/CreativeWork">
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title" itemprop="headline"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<p class="entry-meta">
			<?php enskill_posted_on(); ?>
		</p><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<footer class="entry-footer">
		<?php enskill_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
