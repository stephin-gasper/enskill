<?php

/**
 * Enskill functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Enskill
 */

define( 'ENSKILL_THEME_VERSION', '1.0.0' );
define( 'ENSKILL_DOMAIN', 'Enskill' );

if (!function_exists('enskill_setup')) :

    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function enskill_setup() {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on Enskill, use a find and replace
         * to change 'enskill' to the name of your theme in all the template files.
         */
        load_theme_textdomain('enskill', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'primary' => esc_html__('Primary', 'enskill'),
        ));

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        /*
         * Enable support for Post Formats.
         * See https://developer.wordpress.org/themes/functionality/post-formats/
         */
        add_theme_support('post-formats', array(
            'aside',
            'image',
            'video',
            'quote',
            'link',
        ));

        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('enskill_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));
    }

endif;
add_action('after_setup_theme', 'enskill_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function enskill_content_width() {
    $GLOBALS['content_width'] = apply_filters('enskill_content_width', 640);
}

add_action('after_setup_theme', 'enskill_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function enskill_widgets_init() {
    register_sidebar(array(
        'name' => esc_html__('Sidebar', 'enskill'),
        'id' => 'sidebar-1',
        'description' => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => __('Header Widget Area', 'enskill'),
        'id' => 'header-public-1',
        'description' => __('Header Widget Area', 'enskill'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => __('Footer Widget Area', 'enskill'),
        'id' => 'footer-public-1',
        'description' => __('Footer Widget Area', 'enskill'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}

add_action('widgets_init', 'enskill_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function enskill_scripts() {
    wp_enqueue_style('enskill-style', get_stylesheet_uri());

    wp_enqueue_style('font-open-sans', '//fonts.googleapis.com/css?family=Open+Sans:800,600',array(),ENSKILL_THEME_VERSION);
//    wp_enqueue_style('font-baskerville', '//fonts.googleapis.com/css?family=Libre+Baskerville:400,400italic',array(),ENSKILL_THEME_VERSION);
    wp_enqueue_style('font-monserrat', '//fonts.googleapis.com/css?family=Montserrat',array(),ENSKILL_THEME_VERSION);
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css',array(),ENSKILL_THEME_VERSION);
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css',array(),ENSKILL_THEME_VERSION);
    wp_enqueue_script('enskill-modernizer', get_template_directory_uri() . '/js/modernizr-2.6.2.min.js',array(),ENSKILL_THEME_VERSION);
    wp_enqueue_script('public-script', get_template_directory_uri() . '/js/script.js', array('jquery'), ENSKILL_THEME_VERSION, true);

    wp_enqueue_script('enskill-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), ENSKILL_THEME_VERSION, true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'enskill_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Widgets.
 */
require get_template_directory() . '/widgets/form-links.php';
require get_template_directory() . '/widgets/social-icons.php';

/**
 * Shortcodes.
 */
require get_template_directory() . '/shortcodes/partners.php';

/**
 * Load Jetpack compatibility file.
 */
// require get_template_directory() . '/inc/jetpack.php';

add_filter('show_admin_bar', '__return_false');

if(!function_exists('enskill_quote_meta_box')) {
    add_action( 'add_meta_boxes', 'enskill_quote_meta_box' );
    function enskill_quote_meta_box()
    {
        add_meta_box( 'header-quote', 'Header Quote', 'enskill_quote_meta_box_cb', 'page', 'normal', 'high' );
    }
}

if(!function_exists('enskill_quote_meta_box_cb')){
    function enskill_quote_meta_box_cb($post)
    {
        $values = get_post_custom($post->ID);
        $text = isset( $values['header_quote_text'] ) ? esc_attr( $values['header_quote_text'][0] ) : '';     
        // We'll use this nonce field later on when saving.
        wp_nonce_field( 'enskill_quote_meta_box_nonce', 'quote_meta_box_nonce' );
        ?>
            <table class="form-table">
                <tbody>
                    <tr>
                        <th scope="row">
                            <label for="header-quote-text">Quote to display below header</label>
                        </th>
                        <td>
                            <input type="text" name="header_quote_text" id="header-quote-text" value="<?php echo $text; ?>" class="large-text"/>
                        </td>
                    </tr>
                </tbody>
            </table>
        <?php    
    }
}

if(!function_exists('enskill_quote_meta_box_save')) {
    add_action( 'save_post', 'enskill_quote_meta_box_save' );
    function enskill_quote_meta_box_save( $post_id )
    {
        // Bail if we're doing an auto save
        if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;

        // if our nonce isn't there, or we can't verify it, bail
        if( !isset( $_POST['quote_meta_box_nonce'] ) || !wp_verify_nonce( $_POST['quote_meta_box_nonce'], 'enskill_quote_meta_box_nonce' ) ) return;

        // if our current user can't edit this post, bail
        if( !current_user_can( 'edit_post' ) ) return;

        // now we can actually save the data
        $allowed = array( 
            'em' => array(),
            'strong' => array()
        );

        // Make sure your data is set before trying to save it
        if( isset( $_POST['header_quote_text'] ) )
            update_post_meta( $post_id, 'header_quote_text', wp_kses( $_POST['header_quote_text'], $allowed ) );

    }
}
