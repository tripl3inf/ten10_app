<?php
/*
Title: Staff Member Information
Post Type: cpt_staff
*/






//piklist('field', array(
//  'type' => 'text'
//,'field' => 'staff_name'
////,'scope' => 'post_meta'
//,'label' => 'Staff Member Name:'
//,'description' => 'Enter a first & last name'
//,'value' => 'new member'
//,'help' => "Enter a staff member's relevant information to add them to the Studio Page roster"
//,'attributes' => array(
//    'class' => 'text'
//  )
//));

//    piklist('field', array(
//      'type' => 'file',
//    'field' => 'staff',
//    'scope' => 'post_meta',
//    'label' => __('Add File(s)','piklist'),
//    'description' => __('This is the uploader seen in the admin by default.','piklist'),
//    'options' => array(
//        'modal_title' => __('Add File(s)','piklist'),
//      'button' => __('Add','piklist')
//      )
//    ));

piklist( 'field', array(
  'type'        => 'text',
  'field'       => 'staff_position',
  'scope'       => 'post_meta',
  'label'       => 'Staff Members Title',
  'description' => 'The employees position or title',
  'value'       => 'general',
  'attributes'  => array(
    'class' => 'text'
  )
));

piklist('field', array(
  'type' => 'select'
,'scope' => 'post_meta' // Not used for settings sections
,'field' => 'select_team'
,'value' => 'option_1' // Sets default to Option 2
,'label' => 'Select Member Team'
,'description' => 'Select either studio or financial team'
,'attributes' => array(
    'class' => 'text'
  )
,'choices' => array(
    'option_1' => 'Studio'
  ,'option_2' => 'Financial'
  )
));





// END

