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



piklist('field', array(
'type' => 'file',
'field' => 'upload_media',
'scope' => 'post_meta',
'label' => __('Add File(s)','piklist'),
'description' => __('This is the uploader seen in the admin by default.','piklist'),
'options' => array(
  'modal_title' => __('Add File(s)','piklist'),
  'button' => __('Add','piklist')
  )
));


piklist('field', array(
  'type' => 'select',
'scope' => 'post_meta', // Not used for settings sections
'field' => 'project_select',
'value' => 'option_1', // Sets default to Option 2
'label' => 'Select Member Team',
'description' => 'Select either studio or financial team',
'attributes' => array(
    'class' => 'text'
  ),
'choices' => array(
    'option_1' => 'Studio'
  ,'option_2' => 'Financial'
  )
));





// END

