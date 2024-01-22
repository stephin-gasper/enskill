<?php
/**
 *  Template Name: About Us Template
 */

/**
 * Enqueue scripts and styles.
 */
get_header();
?>
<div class="content-wrap">
    <div class="container-fluid">
        <div class="row">
            <h2 class="col-lg-12 page-title">
                <span class="page-title-inner"><?php the_title(); ?></span>
            </h2>
            <section class="col-lg-12 page-start">
                EnSkill is a focused skill development company, catering to students pursuing Engineering in colleges across India.<br/>
                At EnSkill, we respect the uniqueness of every individual and urge everyone to stop following the crowd and start following your interests.<br/>
                Our traditional system of education today makes every distinct individual go through the same pattern of education and is evaluated for their memory skills over intellect. It’s high time we have reforms on such practices and bring an evolved result oriented structured course of action !<br/><br/>
                <div class="mission-main">
                    <div class="mission-img-wrap display-inline-blk"><img src="<?php echo get_template_directory_uri() . '/img/enskill-team.png'; ?>" alt="EnSkill Team" class="mission-img"/></div><!--
                    --><div class="mission-inner display-inline-blk">                        
                        <h3 class="mission-title heading-wrap"><div class="heading-text">Mission<span class="heading-underline"></span></div></h3>
                    <div class="mission-content">
                        To positively impact the life of engineering students by engaging them in continuous learning, keeping them updated with latest trends in industry, and helping them in applying their interest and intellect in choosing the right career path with the right skills.
                    </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<?php
get_footer();
