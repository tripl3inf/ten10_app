<?php
/*
Title: Widget - Slider (full width) BE-Form
Description: Full width Slider gallery for sub-head widget area
*/

// headline field
piklist('field', array(
	'type' => 'text',
	'field' => 'headline',
  'scope' => 'post_meta', // Not used for settings sections
	'label' => __('Headline'),
	'value' => 'Headline!',
	'description' => __('Headline at top of widget'),
	'attributes' => array(
		'class' => 'headline'
	)
));

// copy
piklist('field', array(
	'type' => 'textarea',
  'scope' => 'post_meta', // Not used for settings sections
  'label' => __('Headline'),
	'field' => 'copy',
	'label' => 'Copy',
	'description' => 'Body copy / text',
	'attributes' => array(
		'class' => 'copy'
	)
));

piklist('field', array(
  'type' => 'select',
'scope' => 'post_meta', // Not used for settings sections
'field' => 'select_test',
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


// link selector
piklist('field', array(
	'type' => 'select',
  'scope' => 'post_meta', // Not used for settings sections
	'field' => 'project_select',
//	'value' => 'option1', // Sets default to Option 2
	'label' => 'Project Type',
	'description' => 'Select the Project Type/Category that will populate the slider',
//	'attributes' => array(
//		'multiple'
//	),
  'choices' => piklist(
    get_terms('project_type', array(
      'hide_empty' => false
    )),
    array(
      'term_id',
    'name'
    )
	)
));


// END widget
