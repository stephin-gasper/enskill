<?php
/**
 *  Template Name: Thank You Template
 */
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
            <div class="col-lg-12 page-description" style="text-align: center;">
                Thank You<?php if(isset($_POST['name'])) echo ' '.$_POST['name']; ?>, we will get back to you shortly.
            </div>
        </div>
    </article>
</main>
<?php
get_footer();
