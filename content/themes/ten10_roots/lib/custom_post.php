<?php


add_filter( 'piklist_post_types', 'cpt_staff' );
function cpt_staff( $post_types ) {
  $post_types['cpt_staff'] = array(
    'labels'          => piklist( 'post_type_labels', 'Staff Members' ),
    'title'           => __( 'enter member name' ),
    'public'          => true,
    'has_archive'     => true,
    'rewrite'         => array(
      'slug' => 'cpt_staff'
    ),
    'capability_type' => 'post',
    'supports'        => array(
      'title',
      'thumbnail',
      'author',
      'revisions'
    ),
    'hide_meta_box'   => array(
      'slug',
      'author',
      'revisions',
      'comments',
      'commentstatus'
    )
  );

  return $post_types;
}

add_image_size( 'archive-staff-thumb', 82, 95 );

