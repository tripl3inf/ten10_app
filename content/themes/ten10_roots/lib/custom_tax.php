<?php
/**
 * User: tripl3inf
 * Date: 8/26/14
 * Time: 7:25 PM
 */


add_filter( 'piklist_taxonomies', 'tax_projects' );
function tax_projects( $taxonomies ) {
  $taxonomies[] = array(
    'post_type'         => 'cpt_project',
    'name'              => 'cpt_project',
    'show_admin_column' => true,
    'hide_meta_box'     => true,
    'configuration'     => array(
      'hierarchical' => true,
      'labels'       => piklist( 'taxonomy_labels', 'Projects Type' ),
      'show_ui'      => true,
      'query_var'    => true,
      'rewrite'      => array(
        'slug' => 'project-type'
      )
    )
  );

  return $taxonomies;
}




