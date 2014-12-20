<?php
/**
 * OnePageMadness functions and definitions
 *
 * @package OnePageMadness
 */

if ( ! isset( $content_width ) ) {
    $content_width = 800; /* pixels */
}

if(!class_exists("CMB2")){
    require_once(dirname(__FILE__)."/libs/cmb/init.php");
}

if ( !class_exists( 'ReduxFramework' ) && file_exists( dirname( __FILE__ ) . '/libs/redux-framework/ReduxCore/framework.php' ) ) {
    require_once( dirname( __FILE__ ) . '/libs/redux-framework/ReduxCore/framework.php' );
    require_once(dirname(__FILE__) . '/inc/admin.php');
}


if ( ! function_exists( 'opm_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function opm_setup() {


    /**
     * Set the content width based on the theme's design and stylesheet.
     */


	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on OnePageMadness, use a find and replace
	 * to change 'opm' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'opm', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'opm' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'opm_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

    add_image_size("banner",1400,99999);
    add_image_size("portfolio",600,9999);
}
endif; // opm_setup
add_action( 'after_setup_theme', 'opm_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function opm_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'opm' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

    register_sidebar( array(
        'name'          => __( 'Footer', 'opm' ),
        'id'            => 'footer',
        'description'   => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'opm_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function opm_scripts() {

    wp_enqueue_script("jquery");

	wp_enqueue_style( 'opm-style', get_stylesheet_uri() );

	wp_enqueue_script( 'opm-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'opm-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

    wp_enqueue_style("opm-bs",get_template_directory_uri()."/css/bootstrap.min.css");
    wp_enqueue_style("opm-fa",get_template_directory_uri()."/css/font-awesome.min.css");
    wp_enqueue_style("opm-owl",get_template_directory_uri()."/css/owl.carousel.css");
    wp_enqueue_style("opm-owl-theme",get_template_directory_uri()."/css/owl.theme.default.css");
    wp_enqueue_style("opm-google-os","//fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800,900");
    wp_enqueue_style("opm-css",get_template_directory_uri()."/css/style.css");


    wp_enqueue_script( 'opm-bs', get_template_directory_uri() . '/js/bootstrap.min.js', array("jquery"), '20130115', true );
    wp_enqueue_script( 'opm-jbs', get_template_directory_uri() . '/js/jquery.backstretch.min.js', array("jquery"), '20130115', true );
    wp_enqueue_script( 'opm-owl', get_template_directory_uri() . '/js/owl.carousel.min.js', array("jquery"), '20130115', true );
    wp_enqueue_script( 'opm-js', get_template_directory_uri() . '/js/script.js', array("jquery"), '20130115', true );
    wp_localize_script("opm-js","site",array("url"=>site_url("/"),"theme_path"=>get_template_directory_uri()));



}
add_action( 'wp_enqueue_scripts', 'opm_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

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
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

require get_template_directory() . '/inc/custom-posts/cpt-services.php';
require get_template_directory() . '/inc/custom-posts/cpt-teammember.php';
require get_template_directory() . '/inc/custom-posts/cpt-testimonial.php';
require get_template_directory() . '/inc/metaboxes/mb-service.php';
require get_template_directory() . '/inc/metaboxes/mb-teammember.php';
require get_template_directory() . '/inc/metaboxes/mb-testimonial.php';


/** Extra Tags Field **/
/* For adding custom field to gallery popup */
function add_image_attachment_fields_to_edit($form_fields, $post)
{

    $form_fields["tags"] = array(
        "label" => __("Tags", 'portex'),
        "input" => "text", // this is default if "input" is omitted
        "value" => get_post_meta($post->ID, "_tags", true),
        "helps" => __("Comma separated tags for filtering", 'portex'),
    );
    unset($form_fields['post_content']);
    return $form_fields;
}

add_filter("attachment_fields_to_edit", "add_image_attachment_fields_to_edit", null, 2);

function add_image_attachment_fields_to_save($post, $attachment)
{

    if (isset($attachment['tags'])) {
        update_post_meta($post['ID'], '_tags', $attachment['tags']);
    }
    return $post;
}

add_filter("attachment_fields_to_save", "add_image_attachment_fields_to_save", null, 2);


add_shortcode("row", "row");
add_shortcode("twothird", "twothird");
add_shortcode("onethird", "onethird");
add_shortcode("half", "half");
add_shortcode("threequarter", "threequarter");
add_shortcode("quarter", "quarter");
add_shortcode("full", "full");


function row($attr, $content = null)
{
    $data = "<div class='row'>";
    $data .= do_shortcode($content);
    $data .= "</div>";
    $data = str_replace("<br>", "", $data);
    return $data;
}

function twothird($attr, $content = null)
{
    $data = "<div class='col-lg-8 col-md-8 col-sm-12 col-xs-12'>";
    $data .= do_shortcode($content);
    $data .= "</div>";
    return $data;

}

function onethird($attr, $content = null)
{
    $data = "<div class='col-lg-4 col-md-4 col-sm-12 col-xs-12'>";
    $data .= do_shortcode($content);
    $data .= "</div>";
    return $data;

}

function half($attr, $content = null)
{
    $data = "<div class='col-lg-6 col-md-6 col-sm-12 col-xs-12'>";
    $data .= do_shortcode($content);
    $data .= "</div>";
    return $data;

}

function threequarter($attr, $content = null)
{
    $data = "<div class='col-lg-9 col-md-9 col-sm-12 col-xs-12'>";
    $data .= do_shortcode($content);
    $data .= "</div>";
    return $data;

}

function quarter($attr, $content = null)
{
    $data = "<div class='col-lg-3 col-md-3 col-sm-12 col-xs-12'>";
    $data .= do_shortcode($content);
    $data .= "</div>";
    return $data;

}

function full($attr, $content = null)
{
    $data = "<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>";
    $data .= do_shortcode($content);
    $data .= "</div>";
    return $data;

}