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
function ds_hide_stuff() {
	global $post_type;
		//remove_action( 'media_buttons', 'media_buttons' );
		//remove_meta_box('slugdiv', $post_type, 'normal');
		remove_meta_box('postimagediv', $post_type, 'side');

		//$ds_hide_postdiv = "<style type=\"text/css\"> #postdiv, #postdivrich { display: none; }</style>";
		//print($ds_hide_postdiv);
}
add_action( 'admin_head', 'ds_hide_stuff'  );




function be_sample_metaboxes( $meta_boxes ) {
    $prefix = '_cmb_'; // Prefix for all fields
    $meta_boxes['test_metabox'] = array(
        'id' => 'test_metabox',
        'title' => 'Test Metabox',
        'pages' => array('page'), // post type
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        'fields' => array(
            
        	array(
                'name' => 'Test Text',
                'desc' => 'field description (optional)',
                'id' => $prefix . 'test_text',
        		'type' => 'file',
            ),		
        ),
    );
    return $meta_boxes;
}
add_filter( 'cmb_meta_boxes', 'be_sample_metaboxes' );

// Initialize the metabox class
add_action( 'init', 'be_initialize_cmb_meta_boxes', 9999 );
function be_initialize_cmb_meta_boxes() {
	if ( !class_exists( 'cmb_Meta_Box' ) ) {
		require_once( 'metabox/init.php' );
	}
}




