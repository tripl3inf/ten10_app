<?php



add_image_size( 'archive-staff-thumb', 82, 95 );
add_image_size( 'archive-project-thumb', 125, 175 );

add_filter( 'piklist_post_types', 'custom_post_types' );
function custom_post_types( $post_types ) {
  $post_types = array_merge( $post_types, array(
    // staff
    'cpt_staff'   => array(
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
    ),
    // projects
    'cpt_project' => array(
      'labels'        => piklist( 'post_type_labels', 'Projects' ),
      'title'         => __( 'Ten10 Projects' ),
      'supports'      => array(
        'title',
        'thumbnail',
        'author',
        'revisions'
      ),
      'public'        => true,
      'has_archive'   => true,
      'rewrite'       => array(
        'slug' => 'project'
      ),
      'hide_meta_box' => array(
        'slug',
        'author',
        'revisions',
        'comments',
        'commentstatus'
      )
    )
  ) );

  return $post_types;
}
