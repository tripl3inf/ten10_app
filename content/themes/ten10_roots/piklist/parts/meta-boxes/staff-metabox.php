<?php
/*
Title: Staff Member Information
Post Type: cpt_staff
*/

piklist('field', array(
  'type' => 'text'
,'field' => 'staff_name'
//,'scope' => 'post_meta'
,'label' => 'Staff Member Name:'
,'description' => 'Enter a first & last name'
,'value' => 'new member'
,'help' => "Enter a staff member's relevant information to add them to the Studio Page roster"
,'attributes' => array(
    'class' => 'text'
  )
));


piklist('field', array(
  'type' => 'text'
,'field' => 'staff_position'
,'label' => 'Staff Members Title'
,'description' => 'The employees position or title'
,'value' => 'general'
,'attributes' => array(
    'class' => 'text'
  )
));



// END
?>
