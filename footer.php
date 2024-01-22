<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Enskill
 */
?>
</section>
<!-- END CONTENT -->
<?php
global $wp;
$current_url = esc_url(home_url(add_query_arg(array(), $wp->request)) . '/');
$add_class = '';
?>
<div class="clearfix sm-align-center hide-elem footer-alt-link-wrap">
    <div class="headerform-link-wrap pull-left clearfix sm-pull-none">
        <?php
        $url = get_permalink(get_page_by_path('voice-your-views'));
        if (strcmp($url, $current_url) === 0) {
            $add_class = ' active ';
        } else {
            $add_class = '';
        }
        ?>
        <span class="headerform-link headerform-voiceview-link clearfix<?php echo $add_class; ?>">
            <span class="headerform-iconwrap headerform-voiceview-iconwrap"><i class="ei ei-voiceyourviews headerform-icon headerform-voiceview-icon" aria-hidden="true"></i></span>
            <h6 class="headerform-text headerform-voiceview-text"><a href="<?php echo $url; ?>" class="headerform-text-link">Voice Your Views</a></h6>
        </span>
        <?php
        $url = get_permalink(get_page_by_path('join-partner-with-us'));
        if (strcmp($url, $current_url) === 0) {
            $add_class = ' active ';
        } else {
            $add_class = '';
        }
        ?>
        <span class="headerform-link headerform-contribute-link clearfix<?php echo $add_class; ?>">
            <span class="headerform-iconwrap headerform-contribute-iconwrap"><i class="ei ei-contribute headerform-icon headerform-contribute-icon" aria-hidden="true"></i></span>
            <h6 class="headerform-text headerform-contribute-text"><a href="<?php echo $url; ?>" class="headerform-text-link">Partner With Us</a></h6>
        </span>
    </div>
</div>
<div class="footer-top">
    <div class="wrap footer-wrap">
        <div class="container-fluid xs-align-center">
            <span class="footer-top-1 display-inline-blk">Let's</span>
            <span class="footer-top-2 display-inline-blk">be friends</span>
        </div>
    </div>
</div>
<!-- START FOOTER -->
<footer class="site-footer" itemscope="" itemtype="http://schema.org/WPFooter">
    <div class="wrap footer-wrap">
        <div class="container-fluid clearfix xs-align-center">
            <?php if (is_active_sidebar('footer-public-1')) : ?>
                <div class="widget-area widget-area-footer pull-left xs-pull-none" role="complementary">
                    <?php dynamic_sidebar('footer-public-1'); ?>
                </div>
            <?php else: ?>
                <div class="pull-left xs-pull-none" role="complementary">
                    <div class="social-media-wrap">
                        <span class="social-icon-outer display-inline-blk">
                            <a href="https://www.facebook.com/EnSkill" class="social-icon-wrap"><i class="ei ei-circle social-icon-level-1"></i><i class="ei ei-facebook social-icon-level-2"></i></a>
                            <a href="https://twitter.com/theEnSkill" class="social-icon-wrap"><i class="ei ei-circle social-icon-level-1"></i><i class="ei ei-twitter social-icon-level-2"></i></a>
                            <a href="https://www.linkedin.com/company/enskill" class="social-icon-wrap"><i class="ei ei-circle social-icon-level-1"></i><i class="ei ei-linkedin social-icon-level-2"></i></a>
                            <a href="https://plus.google.com/+EnskillIn" class="social-icon-wrap google-icon-wrap"><i class="ei ei-circle social-icon-level-1"></i><i class="ei ei-google-plus social-icon-level-2"></i></a>
                            <a href="https://goo.gl/43OoTM" class="social-icon-wrap"><i class="ei ei-circle social-icon-level-1"></i><i class="ei ei-youtube social-icon-level-2"></i></a>
                        </span>
                    </div>
                </div>
            <?php endif; ?>
            <!-- START COPYRIGHT -->
            <div class="copyright pull-right xs-pull-none">
                <p>
                    <?php _e('Copyrights', ENSKILL_DOMAIN); ?> &copy; <?php echo date("Y"); ?> Enskill
                </p>
            </div>
            <!-- END COPYRIGHT -->
        </div>
    </div>
</footer>
<!-- END FOOTER -->
<!-- JAVSCRIPTS BELOW AND FILES LOADED BY WORDPRESS -->
<?php wp_footer(); ?>
</div>
</body>
<!-- END BODY -->
</html>
