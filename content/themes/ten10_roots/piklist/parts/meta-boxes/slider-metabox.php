<?php
/*
Title: Slider Panels
Post Type: cpt-slider
*/


piklist( 'field', array(
  'type'     => 'group',
  'field'    => 'group-img-static',
  'label'    => __( 'Static Images' ),
  'description' => __('Choose the static featured image links'),
  'template' => 'field',
  'add_more' => false,
  'fields'   => array(

    array(
      'type'    => 'text',
      'field'   => 'img-static-title',
      'label'   => __( 'Title:' ),
      'columns' => 12,
    ),
    array(
      'type'        => 'file',
      'field'       => 'img-static',
      //  'scope' => 'post_meta',
      'label'       => __( 'Add File(s)', 'piklist' ),
      'description' => __( 'This is the uploader seen in the admin by default.', 'piklist' ),
      'options'     => array(
        'modal_title' => __( 'Add File(s)', 'piklist' ),
        'button'      => __( 'Add', 'piklist' )
      )
    ),
  )
) );

piklist( 'field', array(
  'type'     => 'group',
  'field'    => 'slider-group',
  'label'    => __( 'Panel' ),
  'template' => 'field',
  'add_more' => true,
  'fields'   => array(


    array(
      'type'    => 'text',
      'field'   => 'title',
      'label'   => __( 'Title:' ),
      'columns' => 12,
    ),
    array(
      'type'    => 'select',
      'field'   => 'page_link',
      'label'   => __( 'Link to Page:' ),
      'columns' => 12,
      'choices' => piklist(
        get_pages(
          array(
            'post_type' => 'page',
            'child_of'  => 0,
            'parent'    => - 1,
            //  ,'orderby' => 'post_date'
          ),
          'objects'
        ),
        array(
          'ID',
          'post_title'
        )
      )
    ),
    array(
      'type'        => 'file',
      'field'       => 'upload_media',
      //  'scope' => 'post_meta',
      'label'       => __( 'Add File(s)', 'piklist' ),
      'description' => __( 'This is the uploader seen in the admin by default.', 'piklist' ),
      'options'     => array(
        'modal_title' => __( 'Add File(s)', 'piklist' ),
        'button'      => __( 'Add', 'piklist' )
      )
    )
  )

) );




// END

