<?php
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('style-homepage', get_template_directory_uri() . '/css/homepage.css');
    wp_enqueue_script('script-classie', get_template_directory_uri() . '/js/classie.js', array(), ENSKILL_THEME_VERSION, true);
    wp_enqueue_script('script-homepage', get_template_directory_uri() . '/js/homepage.js', array('jquery'), ENSKILL_THEME_VERSION, true);
});
get_header();
?>
<main id="main" class="site-main content-wrap" role="main">
    <article id="post-<?php the_ID(); ?>" <?php post_class('container-fluid'); ?> itemscope="" itemtype="http://schema.org/CreativeWork">
        <div class="entry-content" itemprop="text">
            <div class="row">
                <section class="col-lg-5 col-md-6">
                    <article class="intro-content">
                        <h2 class="intro-title sec-title sm-align-center"><div class="intro-title-inner display-inline-blk sec-title-inner">What is EnSkill?<span class="intro-title-underline sec-title-underline"></span></div></h2>
                        <p class="intro-description">EnSkill is a movement, aiming to cease the growing unemployability of Engineers in India.<br/><br/> It is an unprecedented endeavour to help engineers explore, evaluate & expand their knowledge in the field of their choice and interest, thereby assisting them to pick-up the right career path with the right skills.</p>
                    </article>
                </section>
                <section class="col-lg-7 col-md-6">
                    <article class="intro-video-main-outer">
                        <div class="embed-responsive embed-responsive-16by9 into-video-main-wrap">
                            <iframe class="embed-responsive-item into-video-main" src="https://www.youtube.com/embed/kcSTthukEJ8?fs=0&rel=0&showinfo=0&theme=light" frameborder='0' allowfullscreen></iframe>
                        </div>
                    </article>
                </section>
            </div>
            <div class="row">
                <section class="col-lg-12">
                    <h2 class="sec-title service-title"><div class="display-inline-blk sec-title-inner">Our Services<span class="sec-title-underline"></span></div></h2>
                </section>
            </div>
            <div class="row cbp-so-scroller" id="cbp-so-scroller">
                <section class="col-lg-12 services-content-main cbp-so-section animated clearfix" data-animation-name="fadeInUp">
                    <article class="services-img-wrap-main pull-left">
                        <div class="services-img-main"><div class="services-img-wrap"><div class="services-img-inner"><img class="services-img" src="<?php echo get_template_directory_uri(); ?>/img/s1.png" alt="" /></div></div></div>
                    </article>
                    <article class="services-content-outer pull-left">
                        <h3 class="services-content-title-wrap clearfix"><div class="services-content-title display-inline-blk">EnGenius<span class="services-content-title-underline services-content-title-underline-1"></span></div><span class="services-number display-inline-blk pull-right">1</span></h3>
                        <p class="services-content-description">The first step towards change is awareness and EnGenius is essentially about making students aware of the wide array of businesses and tech- domains available for them to explore, in order to make them realize where their interest lies, enabling them to become decisive about their choice of industry and step into their career with enthusiasm.</p>
                    </article>
                </section>
                <section class="col-lg-12 services-content-main cbp-so-section animated clearfix" data-animation-name="fadeInUp">
                    <article class="services-img-wrap-main services-img-wrap-main-alt pull-right">
                        <div class="services-img-main services-img-main-alt"><div class="services-img-wrap services-img-wrap-alt"><div class="services-img-inner services-img-inner-alt"><img class="services-img services-img-alt" src="<?php echo get_template_directory_uri(); ?>/img/s2.png" alt="" /></div></div></div>
                    </article>
                    <article class="services-content-outer services-content-outer-alt pull-right">
                        <h3 class="services-content-title-wrap services-content-title-wrap-alt"><div class="services-content-title services-content-title-alt display-inline-blk">EnPrentice<span class="services-content-title-underline services-content-title-underline-2"></span></div><span class="services-number display-inline-blk pull-right">2</span></h3>
                        <p class="services-content-description services-content-description-alt">Awareness without action is inconsequential. Under EnPrentice candidates are evaluated and given the opportunity to work as part-time / full-time interns during vacations or holidays in their choice of a stream, in effect giving them a first-hand experience of the industry, its requirements and knowledge applications.</p>
                    </article>
                </section>
                <section class="col-lg-12 services-content-main cbp-so-section animated clearfix entrust-content-main" data-animation-name="fadeInUp">
                    <article class="services-img-wrap-main pull-left">
                        <div class="services-img-main"><div class="services-img-wrap"><div class="services-img-inner"><img class="services-img" src="<?php echo get_template_directory_uri(); ?>/img/s3.png" alt="" /></div></div></div>
                    </article>
                    <article class="services-content-outer pull-left entrust-content-outer">                          
                        <h3 class="services-content-title-wrap"><div class="services-content-title display-inline-blk">EnTrust<span class="services-content-title-underline services-content-title-underline-3"></span></div><span class="services-number display-inline-blk pull-right entrust-number">3</span></h3>
                        <p class="services-content-description">EnTrust provides students with an opportunity to work in their desired field of interest. Companies looking for specific skill-oriented individuals can recruit students with similar interests and skills, thereby having the right people with aligned interest to work and attain goals. Its purpose is to guide engineers in making informed decisions in order to foster a happy and growing career.</p>
                    </article>
                </section>
            </div>
        </div>
    </article>
</main>
<?php
get_footer();
