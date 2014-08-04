<?php
/**
 * Enable theme features
 */
add_theme_support('soil-clean-up');         // Enable clean up from Soil
add_theme_support('soil-relative-urls');    // Enable relative URLs from Soil
add_theme_support('soil-nice-search');      // Enable /?s= to /search/ redirect from Soil
add_theme_support('bootstrap-gallery');     // Enable Bootstrap's thumbnails component on [gallery]
add_theme_support('jquery-cdn');            // Enable to load jQuery from the Google CDN

add_image_size( 'featured_img_split', 600, 665, true );
add_image_size( 'img_gallery_home', 800, 9999999, true ); // Permalink thumbnail size




/**
 * Configuration values
 */
define('GOOGLE_ANALYTICS_ID', ''); // UA-XXXXX-Y (Note: Universal Analytics only, not Classic Analytics)


//footer nav
$footer_nav_id = wp_create_nav_menu(__('Footer Navigation', 'roots'), array('slug' => 'footer_nav'));
$roots_nav_theme_mod['footer_nav'] = $footer_nav_id;





/**
 * .main classes
 */
function roots_main_class() {
//  if (roots_display_sidebar()) {
//    // Classes on pages with the sidebar
//    $class = 'col-sm-8';
//  } else {
//    // Classes on full width pages
//    $class = 'col-sm-12';
//  }

  //  $class = 'test';
  //return apply_filters('roots/main_class', $class);
}

/**
 * .sidebar classes
function roots_sidebar_class() {
  return apply_filters('roots/sidebar_class', 'col-sm-4');
}
 */


/**
 * Define which pages shouldn't have the sidebar
 *
 * See lib/sidebar.php for more details
 */


// find custom post types
function is_cpt_return(){
    if ( get_post_type() == 'gallery' )
        return true;
    else return false;
}

function roots_display_sidebar() {
  $sidebar_config = new Roots_Sidebar(
    /**
     * Conditional tag checks (http://codex.wordpress.org/Conditional_Tags)
     * Any of these conditional tags that return true won't show the sidebar
     *
     * To use a function that accepts arguments, use the following format:
     *
     * array('function_name', array('arg1', 'arg2'))
     *
     * The second element must be an array even if there's only 1 argument.
     */
    array(
      'is_cpt_return',
      'is_404',
      'is_front_page'
    ),
    /**
     * Page template checks (via is_page_template())
     * Any of these page templates that return true won't show the sidebar
     */
    array(
      'template-custom.php',
      'templates/template-feature-split.php'
    )
  );

  return apply_filters('roots/display_sidebar', $sidebar_config->display);
}
/**
 * $content_width is a global variable used by WordPress for max image upload sizes
 * and media embeds (in pixels).
 *
 * Example: If the content area is 640px wide, set $content_width = 620; so images and videos will not overflow.
 * Default: 1140px is the default Bootstrap container width.
 */
if (!isset($content_width)) { $content_width = 1140; }





// remove standard featured img metabox
//function ds_hide_stuff() {
//	global $post_type;
//		//remove_action( 'media_buttons', 'media_buttons' );
//		//remove_meta_box('slugdiv', $post_type, 'normal');
//		remove_meta_box('postimagediv', $post_type, 'side');
//
//		//$ds_hide_postdiv = "<style type=\"text/css\"> #postdiv, #postdivrich { display: none; }</style>";
//		//print($ds_hide_postdiv);
//}
//add_action( 'admin_head', 'ds_hide_stuff'  );




function custom_metaboxes( $meta_boxes ) {
    $prefix = '_cmb_'; // Prefix for all fields
    $meta_boxes['metabox_home'] = array(
        'id' => 'metabox_home_imgs',
        'title' => 'Home Page Featured Images',
        'pages' => array('page'), // post type
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
//        'show_on' => array( 'key' => 'page-template', 'value' => 'templates/template-home.php' ),
        'show_on' => array( 'key' => 'id', 'value' => array( 86 ) ),
        'fields' => array(

            array(
                'name' => 'Choose Image 1:',
                'desc' => 'the TOP right static image on home page.',
                'id' => $prefix . 'home_img_1',
                'type' => 'file',
                // 'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
            ),

            array(
                'name' => 'Choose Image 2:',
                'desc' => 'the BOTTOM right static image on home page.',
                'id' => $prefix . 'home_img_2',
                'type' => 'file',
                // 'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
            ),
        ),
    );
    return $meta_boxes;
}
add_filter( 'cmb_meta_boxes', 'custom_metaboxes' );

// Initialize the metabox class
add_action( 'init', 'init_custom_meta_boxes', 9999 );
function init_custom_meta_boxes() {
	if ( !class_exists( 'cmb_Meta_Box' ) ) {
		require_once( 'metabox/init.php' );
	}
}





// move admin bar to bottom
function fb_move_admin_bar() { ?>
    <style type="text/css">
        body {
            margin-top: -28px;
            padding-bottom: 28px;
        }
        body.admin-bar #wphead {
            padding-top: 0;
        }
        body.admin-bar #footer {
            padding-bottom: 28px;
        }
        #wpadminbar {
            top: auto !important;
            bottom: 0;
        }
        #wpadminbar .quicklinks .menupop ul {
            bottom: 28px;
        }
    </style>
<?php }
// on backend area
add_action( 'admin_head', 'fb_move_admin_bar' );
// on frontend area
add_action( 'wp_head', 'fb_move_admin_bar' );


// remove comments tab from admin menubar
// remove links/menus from the admin bar
function mytheme_admin_bar_render() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('comments');



}
add_action( 'wp_before_admin_bar_render', 'mytheme_admin_bar_render' );




// Use your custom URL logo link
function wpc_url_login(){
    return "http://t3inf.com/"; // your URL here
}
add_filter('login_headerurl', 'wpc_url_login');


// Custom WordPress Login Logo
function login_css() {
    wp_enqueue_style( 'login_css', get_template_directory_uri() . '/assets/css/login.css' );
}
add_action('login_head', 'login_css');

// Custom WordPress Footer
function remove_footer_admin () {
    echo '&copy; 2014 - tripl3infinity Design &copy Dev';
}
add_filter('admin_footer_text', 'remove_footer_admin');

// Remove dashboard widgets
add_action('wp_dashboard_setup', 'wpc_dashboard_widgets');
function wpc_dashboard_widgets() {
    global $wp_meta_boxes;
    // Last comments
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
    // Incoming links
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
}




function my_custom_post_product() {
    $labels = array(
        'name'               => _x( 'Products', 'post type general name' ),
        'singular_name'      => _x( 'Product', 'post type singular name' ),
        'add_new'            => _x( 'Add New', 'book' ),
        'add_new_item'       => __( 'Add New Product' ),
        'edit_item'          => __( 'Edit Product' ),
        'new_item'           => __( 'New Product' ),
        'all_items'          => __( 'All Products' ),
        'view_item'          => __( 'View Product' ),
        'search_items'       => __( 'Search Products' ),
        'not_found'          => __( 'No products found' ),
        'not_found_in_trash' => __( 'No products found in the Trash' ),
        'parent_item_colon'  => '',
        'menu_name'          => 'Products'
    );
    $args = array(
        'labels'        => $labels,
        'description'   => 'Holds our products and product specific data',
        'public'        => true,
        'menu_position' => 5,
        'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
        'has_archive'   => true,
    );
    register_post_type( 'product', $args );
}
add_action( 'init', 'my_custom_post_product' );



