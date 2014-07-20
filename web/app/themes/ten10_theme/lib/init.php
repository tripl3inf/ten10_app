<?php
/**
 * Roots initial setup and constants
 */
function roots_setup() {
  // Make theme available for translation
  // Community translations can be found at https://github.com/roots/roots-translations
  load_theme_textdomain('roots', get_template_directory() . '/lang');

  // Register wp_nav_menu() menus
  // http://codex.wordpress.org/Function_Reference/register_nav_menus
  register_nav_menus(array(
    'primary_navigation' => __('Primary Navigation', 'roots')
  ));

  // Add post thumbnails
  // http://codex.wordpress.org/Post_Thumbnails
  // http://codex.wordpress.org/Function_Reference/set_post_thumbnail_size
  // http://codex.wordpress.org/Function_Reference/add_image_size
  add_theme_support('post-thumbnails');

  // Add post formats
  // http://codex.wordpress.org/Post_Formats
  add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio'));

  // Tell the TinyMCE editor to use a custom stylesheet
  add_editor_style('/assets/css/editor-style.css');
}
add_action('after_setup_theme', 'roots_setup');

/**
 * Register sidebars
 */
function roots_widgets_init() {
  register_sidebar(array(
    'name'          => __('Primary', 'roots'),
    'id'            => 'sidebar-primary',
    'before_widget' => '<section class="widget %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
  ));

  register_sidebar(array(
    'name'          => __('Footer', 'roots'),
    'id'            => 'sidebar-footer',
    'before_widget' => '<section class="widget %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
  ));
}
add_action('widgets_init', 'roots_widgets_init');





//----------------------------------------------
//--------------add theme support for thumbnails
//----------------------------------------------
if ( function_exists( 'add_theme_support')){
    add_theme_support( 'post-thumbnails' );
}
add_image_size( 'admin-list-thumb', 80, 80, true); //admin thumbnail
add_image_size( 'album-grid', 450, 450, true );



//----------------------------------------------
//----------register and label gallery post type
//----------------------------------------------
$gallery_labels = array(
    'name' => _x('Gallery', 'post type general name'),
    'singular_name' => _x('Gallery', 'post type singular name'),
    'add_new' => _x('Add New', 'gallery'),
    'add_new_item' => __("Add New Gallery"),
    'edit_item' => __("Edit Gallery"),
    'new_item' => __("New Gallery"),
    'view_item' => __("View Gallery"),
    'search_items' => __("Search Gallery"),
    'not_found' =>  __('No galleries found'),
    'not_found_in_trash' => __('No galleries found in Trash'),
    'parent_item_colon' => ''

);
$gallery_args = array(
    'labels' => $gallery_labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => true,
    'hierarchical' => false,
    'menu_position' => null,
    'capability_type' => 'post',
    'supports' => array('title', 'excerpt', 'editor', 'thumbnail'),
    'menu_icon' => get_bloginfo('template_directory') . '/images/photo-album.png' //16x16 png if you want an icon
);
register_post_type('gallery', $gallery_args);


//----------------------------------------------
//------------------------create custom taxonomy
//----------------------------------------------
add_action( 'init', 'jss_create_gallery_taxonomies', 0);

function jss_create_gallery_taxonomies(){
    register_taxonomy(
        'phototype', 'gallery',
        array(
            'hierarchical'=> true,
            'label' => 'Photo Types',
            'singular_label' => 'Photo Type',
            'rewrite' => true
        )
    );
}



//----------------------------------------------
//--------------------------admin custom columns
//----------------------------------------------
//admin_init
add_action('manage_posts_custom_column', 'jss_custom_columns');
add_filter('manage_edit-gallery_columns', 'jss_add_new_gallery_columns');

function jss_add_new_gallery_columns( $columns ){
    $columns = array(
        'cb'                =>        '<input type="checkbox">',
        'jss_post_thumb'    =>        'Thumbnail',
        'title'                =>        'Photo Title',
        'phototype'            =>        'Photo Type',
        'author'            =>        'Author',
        'date'                =>        'Date'

    );
    return $columns;
}

function jss_custom_columns( $column ){
    global $post;

    switch ($column) {
        case 'jss_post_thumb' : echo the_post_thumbnail('admin-list-thumb'); break;
        case 'description' : the_excerpt(); break;
        case 'phototype' : echo get_the_term_list( $post->ID, 'phototype', '', ', ',''); break;
    }
}

//add thumbnail images to column
add_filter('manage_posts_columns', 'jss_add_post_thumbnail_column', 5);
add_filter('manage_pages_columns', 'jss_add_post_thumbnail_column', 5);
add_filter('manage_custom_post_columns', 'jss_add_post_thumbnail_column', 5);

// Add the column
function jss_add_post_thumbnail_column($cols){
    $cols['jss_post_thumb'] = __('Thumbnail');
    return $cols;
}

function jss_display_post_thumbnail_column($col, $id){
    switch($col){
        case 'jss_post_thumb':
            if( function_exists('the_post_thumbnail') )
                echo the_post_thumbnail( 'admin-list-thumb' );
            else
                echo 'Not supported in this theme';
            break;
    }
}




