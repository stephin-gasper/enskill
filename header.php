<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Enskill
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon-180x180.png">
        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon-194x194.png" sizes="194x194">
        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/android-chrome-192x192.png" sizes="192x192">
        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/manifest.json">
        <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/safari-pinned-tab.svg" color="#f45757">
        <meta name="apple-mobile-web-app-title" content="Enskill">
        <meta name="application-name" content="Enskill">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/mstile-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <link rel="canonical" href="<?php echo esc_url(home_url(add_query_arg(NULL, NULL))); ?>">
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/respond.min.js"></script>
        <![endif]-->
        <?php
        if (!function_exists('enskill_enqueue_script')) {

            function enskill_enqueue_script() {
                
            }

        }
//add_action('wp_enqueue_scripts', 'enskill_enqueue_script');
        wp_head();
        ?>
    </head>

    <?php
    $enskill_menu_item = array('item-1' => array('text' => 'About Us', 'url' => get_permalink(get_page_by_path('about-us')), 'icon' => 'ei-aboutus'),
        'item-2' => array('text' => 'Our Partners', 'url' => get_permalink(get_page_by_path('our-partners')), 'icon' => 'ei-our-partners'),
        'item-3' => array('text' => 'Home', 'url' => get_home_url(), 'icon' => 'ei-home'),
        'item-4' => array('text' => 'Blog', 'url' => get_permalink(get_page_by_path('blog')), 'icon' => 'ei-blog'),
        'item-5' => array('text' => 'Contact Us', 'url' => get_permalink(get_page_by_path('contact-us')), 'icon' => 'ei-envelope')
    );
    global $wp;
    $current_url = esc_url(home_url(add_query_arg(array(), $wp->request)) . '/');
    ?>

    <body <?php body_class(); ?> itemscope="" itemtype="http://schema.org/WebPage">
        <section><h2 class="screen-reader-text">Skip links</h2><ul class="genesis-skip-link"><li><a href="#genesis-nav-primary" class="screen-reader-shortcut"> Skip to primary navigation</a></li><li><a href="#genesis-content" class="screen-reader-shortcut"> Skip to content</a></li><li><a href="#genesis-sidebar-primary" class="screen-reader-shortcut"> Skip to primary sidebar</a></li></ul></section>
        <div class="site-container">
            <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'enskill'); ?></a>
            <!-- START HEADER -->
            <header class="site-header" itemscope="" itemtype="http://schema.org/WPHeader">
                <div class="wrap header-wrap">
                    <div class="title-area display-inline-blk">
                        <h1 class="site-title" itemprop="headline"><a href="<?php echo esc_url(get_home_url()); ?>"><?php _e('Enskill', 'enskill'); ?></a></h1>
                        <p class="site-description" itemprop="description">Explore. Participate. Achieve</p>
                        <a href="<?php echo esc_url(get_home_url()); ?>" class="display-inline-blk"><img src="<?php echo get_template_directory_uri(); ?>/img/enskilllogotr.png" alt="Logo" class="enskill-logo" /></a>
                    </div><!--
                    --><?php if (is_active_sidebar('header-public-1')) : ?>
                        <div class="widget-area header-widget-area display-inline-blk">
                            <h2 class="screen-reader-text">Header Right</h2>
                            <?php dynamic_sidebar('header-public-1'); ?>
                        </div>
                    <?php else: ?>
                        <div class="alignright header-right display-inline-blk">
                            <h2 class="screen-reader-text">Header Right</h2>
                            <div class="clearfix sm-align-center">
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
                                <div class="headerform-link-wrap pull-right menu-outer clearfix sm-pull-none">
                                    <span class="headerform-link clearfix headerform-menu-link">
                                        <span class="headerform-iconwrap headerform-menu-iconwrap"><i class="ei ei-menu headerform-icon headerform-menu-icon" aria-hidden="true"></i></span>
                                        <h6 class="headerform-text headerform-menu-text">Menu</h6>
                                    </span>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="nav-wrap hide-elem">
                        <h2 class="screen-reader-text">Main navigation</h2>
                        <nav class="menu " itemscope="" itemtype="http://schema.org/SiteNavigationElement" aria-label="Main navigation">
                            <ul>
                                <?php
                                foreach ($enskill_menu_item as $key => $value) {
                                    echo '<li';
                                    echo '><a href="' . $value['url'] . '" itemprop="url"><span itemprop="name">' . $value['text'] . '</span></a></li>';
                                }
                                ?>
                            </ul>
                        </nav>
                    </div>
                </div>
            </header>
            <!-- END HEADER -->

            <?php
            $header_quote_text_value = get_post_meta(get_the_ID(), 'header_quote_text', true);
            $text = (!empty($header_quote_text_value) ? esc_html($header_quote_text_value) : "Success is simple. Do what's right, the right way, at the right time !");
            ?>
            <div class="banner-quote-outer sm-hide-content">
                <div class="wrap banner-quote-wrap">
                    <blockquote class="quotes banner-quote typing-animation"><?php echo $text; ?></blockquote>
                </div>
            </div>

            <div class="component">
                <!-- Start Nav Structure -->
                <button class="cn-button" id="cn-button">+</button>
                <div class="cn-wrapper" id="cn-wrapper">
                    <ul>
                        <?php
                        foreach ($enskill_menu_item as $key => $value) {
                            echo '<li';
                            if (strcmp($value['url'], $current_url) === 0) {
                                echo ' class="active" ';
                            }
                            echo '><a href="' . $value['url'] . '" class="menu-item" data-title="' . $value['text'] . '"><span class="ei ' . $value['icon'] . '"></span></a></li>';
                        }
                        ?>
                    </ul>
                </div>
                <div id="cn-overlay" class="cn-overlay"><div class="overlay-title-wrap"><div class="overlay-title-inner"><h1 class="overlay-title"></h1></div></div></div>
                <!-- End Nav Structure -->
            </div>

            <!-- START CONTENT -->
            <section class="site-inner">
