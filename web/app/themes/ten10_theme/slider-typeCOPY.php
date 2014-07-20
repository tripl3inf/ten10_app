<?php

//
////----------------------------------------------
////--------------add theme support for thumbnails
////----------------------------------------------
//if ( function_exists( 'add_theme_support')){
//    add_theme_support( 'post-thumbnails' );
//}
//add_image_size( 'admin-list-thumb', 1100, 350, true); //admin thumbnail
//
//
////----------------------------------------------
////----------register and label gallery post type
////----------------------------------------------
//$gallery_labels = array(
//    'name' => _x('Gallery', 'post type general name'),
//    'singular_name' => _x('Gallery', 'post type singular name'),
//    'add_new' => _x('Add New', 'gallery'),
//    'add_new_item' => __("Add New Gallery"),
//    'edit_item' => __("Edit Gallery"),
//    'new_item' => __("New Gallery"),
//    'view_item' => __("View Gallery"),
//    'search_items' => __("Search Gallery"),
//    'not_found' =>  __('No galleries found'),
//    'not_found_in_trash' => __('No galleries found in Trash'),
//    'parent_item_colon' => ''
//
//);
//$gallery_args = array(
//    'labels' => $gallery_labels,
//    'public' => true,
//    'publicly_queryable' => true,
//    'show_ui' => true,
//    'query_var' => true,
//    'rewrite' => true,
//    'hierarchical' => false,
//    'menu_position' => null,
//    'capability_type' => 'post',
//    'supports' => array('title', 'excerpt', 'editor', 'thumbnail'),
//    'menu_icon' => get_bloginfo('template_directory') . '/images/photo-album.png' //16x16 png if you want an icon
//);
//register_post_type('gallery', $gallery_args);
//?>
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->










//add_action( 'init', 'create_book_tax' );
//
//function create_book_tax() {
//    register_taxonomy(
//        'slider-type',
//        'slider-type',
//        array(
//            'label' => __( 'Genre' ),
//            'rewrite' => array( 'slug' => 'genre' ),
//            'hierarchical' => true,
//        )
//    );
//}





//if ( function_exists( 'add_theme_support' ) ) {
////	add_theme_support( 'post-thumbnails' );
////	set_post_thumbnail_size( 300, 170, true ); // Normal post thumbnails
//	add_image_size( 'slider-img', 1100, 350 );
//}


//add_action('init', 'slider_register');
//
//function slider_register() {
//	$args = array(
//			'label' => __('Feature Slider'),
//			'singular_label' => __('Slider Image'),
//			'public' => true,
//			'show_ui' => true,
//			'capability_type' => 'post',
//			'hierarchical' => false,
//			'rewrite' => true,
//			'supports' => array('title', 'editor')
//	);
//
//	register_post_type( 'slider-type' , $args );
//}


//register_taxonomy("slider-type", array("slider-type"), array(
//    "hierarchical" => false,
//    "label" => "Sliders",
//    "singular_label" => "Slider Type",
//    "rewrite" => true));


//add_action("admin_init", "slider_meta_box");


//function slider_meta_box(){
//	add_meta_box("projInfo-meta", "Slider Options", "slider_meta_options", "slider", "side", "low");
//}
//
//
//function slider_meta_options(){
//	global $post;
//	if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) return $post_id;
//	$custom = get_post_custom($post->ID);
//	$link = $custom["projLink"][0];
//	?>
<!--    <label>Link:</label><input name="projLink" value="--><?php //echo $link; ?><!--" />-->
<?php
//}


//add_action('save_post', 'save_project_link');
//
//function save_project_link(){
//	global $post;
//
//	if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ){
//		return $post_id;
//	}else{
//		update_post_meta($post->ID, "projLink", $_POST["projLink"]);
//	}
//}
//
//
//add_filter("manage_edit-slider_columns", "project_edit_columns");
//
//function project_edit_columns($columns){
//	$columns = array(
//			"cb" => "<input type=\"checkbox\" />",
//			"title" => "Project",
//			"description" => "Description",
//			"link" => "Link",
//			"type" => "Type of Project",
//	);
//
//	return $columns;
//}


//add_filter('excerpt_length', 'my_excerpt_length');
//
//function my_excerpt_length($length) {
//
//	return 25;
//
//}
//
//add_filter('excerpt_more', 'new_excerpt_more');
//
//function new_excerpt_more($text){
//
//	return ' ';
//
//}

//function slider_thumbnail_url($pid){
//	$image_id = get_post_thumbnail_id($pid);
//	$image_url = wp_get_attachment_image_src($image_id,'screen-shot');
//	//$image_gallery_url = wp_get_attachment_gallery_image_src($image_id,'gallery');
//	return  $image_url[0];
//}









?>