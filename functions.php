<?php
/*
 *  Author: Todd Motto | @toddmotto
 *  URL: html5blank.com | @html5blank
 *  Custom functions, support, custom post types and more.
 */

/*------------------------------------*\
	External Modules/Files
\*------------------------------------*/

// Load any external files you have here

/*------------------------------------*\
	Theme Support
\*------------------------------------*/



// Add Menu Support
add_theme_support('menus');

// Add Thumbnail Theme Support


add_theme_support('post-thumbnails');

function wpse_setup_theme() {
add_image_size('large', 700, '', true); // Large Thumbnail
add_image_size('medium', 250, '', true); // Medium Thumbnail
add_image_size('small', 120, '', true); // Small Thumbnail
add_image_size('profil-profesora', 240, 320, true);// Profil profesora
add_image_size('custom-size', 700, 200, true);
add_image_size('custom-single', 290, 160, true);
add_image_size('category-size', 150, 150, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');
}

add_action( 'after_setup_theme', 'wpse_setup_theme' );

// Add Support for Custom Backgrounds - Uncomment below if you're going to use
/*add_theme_support('custom-background', array(
'default-color' => 'FFF',
'default-image' => get_template_directory_uri() . '/img/bg.jpg'
));*/

// Add Support for Custom Header - Uncomment below if you're going to use
/*add_theme_support('custom-header', array(
'default-image'			=> get_template_directory_uri() . '/img/headers/default.jpg',
'header-text'			=> false,
'default-text-color'		=> '000',
'width'				=> 1000,
'height'			=> 198,
'random-default'		=> false,
'wp-head-callback'		=> $wphead_cb,
'admin-head-callback'		=> $adminhead_cb,
'admin-preview-callback'	=> $adminpreview_cb
));*/

// Enables post and comment RSS feed links to head
add_theme_support('automatic-feed-links');

// Localisation Support
load_theme_textdomain('mweb', get_template_directory() . '/languages');


/*------------------------------------*\
	Functions
\*------------------------------------*/

// HTML5 Blank navigation
function mweb_nav()
{
	wp_nav_menu(
	array(
		'theme_location'  => 'header-menu',
		'menu'            => '',
		'container'       => '',
		'container_class' => 'menu-{menu slug}-container',
		'container_id'    => '',
		'menu_class'      => 'menu',
		'menu_id'         => 'tr',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul>%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
		)
	);
}

// LOAD BX SLIDER
function loadbxslider()
{
    wp_enqueue_script('bxscript', get_template_directory_uri() . '/js/jquery.bxslider.min.js', array('jquery'));
}
add_action('init', 'loadbxslider');


 
// wp_register_style() example
wp_register_style(
    'my-bootstrap-extension', // handle name
    get_template_directory_uri() . '/style.css', // the URL of the stylesheet
    array( 'bootstrap-main' ), // an array of dependent styles
    '1.2', // version number
    'screen' // CSS media type
);

load_theme_textdomain('sfb', get_template_directory() . '/languages');


// Load HTML5 Blank styles
function html5blank_styles()
{
    wp_register_style('normalize', get_template_directory_uri() . '/css/normalize.min.css', array(), '1.0', 'all');
    wp_enqueue_style('normalize'); // Enqueue it!

    wp_register_style('html5blank', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('html5blank'); // Enqueue it!
}

function register_my_menus() {
  register_nav_menus(
    array(
      'header-top-menu' => __( 'Header - Top Menu' ),
      'header-menu' => __( 'Header Menu' ),
      'footer-menu-bl' => __( 'Footer Menu Brzi Linkovi' ),
      'footer-menu-fc' => __( 'Footer Menu Fakultet' ),
      'footer-menu-ob' => __( 'Footer Menu Studijski program' ),
      'footer-menu-st' => __( 'Footer Menu Studenti' ),
      'footer-menu-na' => __( 'Footer Menu Nauka' ),
      'footer-menu-sa' => __( 'Footer Menu Saradnja' ),
      'footer-menu-us' => __( 'Footer Menu Usluge' ),
      'footer-menu-nb' => __( 'Footer Menu Nastavna Baza' ),
      'header-res' => __( 'Header responsive menu' ),
      'page-sidebar' => __( 'Stranica sidebar' )
    )
  );
}

add_action( 'init', 'register_my_menus' );
    
add_theme_support( 'post-thumbnails');

// Remove the <div> surrounding the dynamic navigation to cleanup markup
function my_wp_nav_menu_args($args = '')
{
    $args['container'] = false;
    return $args;
}

// Remove Injected classes, ID's and Page ID's from Navigation <li> items
function my_css_attributes_filter($var)
{
    return is_array($var) ? array() : '';
}

// Remove invalid rel attribute values in the categorylist
function remove_category_rel_from_category_list($thelist)
{
    return str_replace('rel="category tag"', 'rel="tag"', $thelist);
}

add_filter('show_admin_bar', '__return_false');

// If Dynamic Sidebar Exists
if (function_exists('register_sidebar'))
{
    // Define Sidebar Widget Area 1
    register_sidebar(array(
        'name' => __('Widget Area 1', 'html5blank'),
        'description' => __('Description for this widget-area...', 'html5blank'),
        'id' => 'widget-area-1',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>'
    ));

}

if (function_exists('register_sidebar'))
{
    // Define Sidebar Widget Area 1
    register_sidebar(array(
        'name' => __('Widget Area 2', 'html5blank'),
        'description' => __('Description for this widget-area...', 'html5blank'),
        'id' => 'widget-area-2',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<a>',
        'after_title' => '</a>'
    ));

}

if (function_exists('register_sidebar'))
{
    // Define Sidebar Widget Area 1
    register_sidebar(array(
        'name' => __('Widget Area 3', 'html5blank'),
        'description' => __('Description for this widget-area...', 'html5blank'),
        'id' => 'widget-area-3',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<a>',
        'after_title' => '</a>'
    ));

}

if (function_exists('register_sidebar'))
{
    // Define Sidebar Widget Area 1
    register_sidebar(array(
        'name' => __('Widget Area 4', 'html5blank'),
        'description' => __('Description for this widget-area...', 'html5blank'),
        'id' => 'widget-area-4',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<a>',
        'after_title' => '</a>'
    ));

}


// Remove wp_head() injected Recent Comment styles
function my_remove_recent_comments_style()
{
    global $wp_widget_factory;
    remove_action('wp_head', array(
        $wp_widget_factory->widgets['WP_Widget_Recent_Comments'],
        'recent_comments_style'
    ));
}

// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
function html5wp_pagination()
{
    global $wp_query;
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages
    ));
}

// Custom Excerpts
function html5wp_index($length) // Create 20 Word Callback for Index page Excerpts, call using html5wp_excerpt('html5wp_index');
{
    return 20;
}

// Create 40 Word Callback for Custom Post Excerpts, call using html5wp_excerpt('html5wp_custom_post');
function html5wp_custom_post($length)
{
    return 40;
}

// Create the Custom Excerpts callback
function html5wp_excerpt($length_callback = '', $more_callback = '')
{
    global $post;
    if (function_exists($length_callback)) {
        add_filter('excerpt_length', $length_callback);
    }
    if (function_exists($more_callback)) {
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>' . $output . '</p>';
    echo $output;
}




add_filter('acf/settings/default_language', 'my_acf_settings_default_language'); 
function my_acf_settings_default_language( $language ) { 
    return 'en';
}

add_filter('acf/settings/current_language', 'my_acf_settings_current_language'); 
function my_acf_settings_current_language( $language ) { 
    return 'sr';    
}


// Custom View Article link to Post
function html5_blank_view_article($more)
{
    global $post;
    return '... <a class="view-article" href="' . get_permalink($post->ID) . '">' . __('View Article', 'html5blank') . '</a>';
}

// Remove Admin bar
function remove_admin_bar()
{
    return false;
}

// Remove 'text/css' from our enqueued stylesheet
function html5_style_remove($tag)
{
    return preg_replace('~\s+type=["\'][^"\']++["\']~', '', $tag);
}

// Remove thumbnail width and height dimensions that prevent fluid images in the_thumbnail
function remove_thumbnail_dimensions( $html )
{
    $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
    return $html;
}

// Custom Gravatar in Settings > Discussion
function html5blankgravatar ($avatar_defaults)
{
    $myavatar = get_template_directory_uri() . '/img/gravatar.jpg';
    $avatar_defaults[$myavatar] = "Custom Gravatar";
    return $avatar_defaults;
}

// Threaded Comments
function enable_threaded_comments()
{
    if (!is_admin()) {
        if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
            wp_enqueue_script('comment-reply');
        }
    }
}


// Shortcode Demo with Nested Capability
function html5_shortcode_demo($atts, $content = null)
{
    return '<div class="shortcode-demo">' . do_shortcode($content) . '</div>'; // do_shortcode allows for nested Shortcodes
}

// Shortcode Demo with simple <h2> tag
function html5_shortcode_demo_2($atts, $content = null) // Demo Heading H2 shortcode, allows for nesting within above element. Fully expandable.
{
    return '<h2>' . $content . '</h2>';
}


//Prekid učitavanja CSS-a za WPML language swicher
define('ICL_DONT_LOAD_LANGUAGE_SELECTOR_CSS', true);

//Dodavanje body classe aktivnog jezika
add_filter('body_class', 'append_language_class');
function append_language_class($classes){
  $classes[] = ICL_LANGUAGE_CODE;  
  return $classes;
}

function wpb_list_child_pages() { 

global $post; 

if ( is_page() && $post->post_parent )

    $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->post_parent . '&echo=0' );
else
    $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->ID . '&echo=0' );

if ( $childpages ) {

    $string = '<ul>' . $childpages . '</ul>';
}

return $string;

}

add_shortcode('wpb_childpages', 'wpb_list_child_pages');

add_filter('single_template', create_function('$t', 'foreach( (array) get_the_category() as $cat ) { if ( file_exists(TEMPLATEPATH . "/single-{$cat->term_id}.php") ) return TEMPLATEPATH . "/single-{$cat->term_id}.php"; } return $t;' ));



//Funkcija koja briše određene kategorije iz breadcrumbs-a
add_action('bcn_after_fill', 'exclude_these_crumbs');
$exclude_ids = [30];
function exclude_these_crumbs($trail) {
    global $exclude_ids;

    foreach ($trail->breadcrumbs as $key => $breadcrumb) {
        if (in_array($breadcrumb->get_id(), $exclude_ids)) {
            array_splice($trail->breadcrumbs, $key, 1);
        }
    }
}


//Link ka strani, učitava se WPML 
function get_permalink_current_language( $post_id )
{
    $language = ICL_LANGUAGE_CODE;
    $lang_post_id = icl_object_id( $post_id , 'page', true, $language );

    $url = "";
    if($lang_post_id != 0) {
        $url = get_permalink( $lang_post_id );
    }else {
        // No page found, it's most likely the homepage
        global $sitepress;
        $url = $sitepress->language_url( $language );
    }

    return $url;
}




?>