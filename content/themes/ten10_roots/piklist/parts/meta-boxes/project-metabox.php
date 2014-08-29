<?php
/*
Title: Staff Member Information
Post Type: cpt_project
*/

piklist( 'field', array(
  'type'        => 'text',
  'field'       => 'project_director',
  'scope'       => 'post_meta',
  'label'       => 'Director',
  'description' => 'Enter the project directors first & last name',
  'value'       => 'director',
  'attributes'  => array(
    'class' => 'text'
  )
));



piklist( 'field', array(
  'type'        => 'text',
  'field'       => 'project_producer',
  'scope'       => 'post_meta',
  'label'       => 'Producer',
  'description' => 'Enter the project producers first & last name',
  'value'       => 'producer',
  'attributes'  => array(
    'class' => 'text'
  )
));



piklist( 'field', array(
  'type'        => 'text',
  'field'       => 'project_trailer_url',
  'scope'       => 'post_meta',
  'label'       => 'Trailer URL',
  'description' => 'Enter URL to the film trailer / preview',
  'value'       => 'enter URL',
  'attributes'  => array(
    'class' => 'text'
  )
));



piklist( 'field', array(
  'type'        => 'textarea',
  'field'       => 'project_desc',
  'scope'       => 'post_meta',
  'label'       => 'Project Description',
  'description' => 'Enter copy for the film description',
  'value'       => 'enter project description',
  'attributes'  => array(
    'class' => 'text'
  )
));

// END

