<?php
/*

*/

// headline field
piklist('field', array(
	'type' => 'text',
	'field' => 'headline2',
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
	//'scope' => 'post_meta', // Not used for settings sections
	'field' => 'copy2',
	'label' => 'Copy',
	'description' => 'Body copy / text',
	'attributes' => array(
		'class' => 'copy'
	)
));

// list-header
piklist('field', array(
	'type' => 'text',
	'field' => 'list_headline',
	'label' => __('List Headline'),
	'description' => __('Sub-headline for bullet list'),
	'attributes' => array(
		'class' => 'list_headline'
	)
));

// list-header
piklist('field', array(
	'type' => 'text',
	'field' => 'list_item',
	'label' => __('List Item'),
	'description' => __('Repeatable bullet / list item'),
	'add_more' => true,
	'attributes' => array(
		'class' => 'list_item'
	)
));

// link selector
piklist('field', array(
	'type' => 'select',
	'field' => 'link_select2',
	'value' => 'option1', // Sets default to Option 2
	'label' => 'Link Selector',
	'description' => 'Select page for widget link',
	'attributes' => array(
		'multiple'
	),
	'choices' => array(
	'1' => 'Secular Films',
	'2' => 'Faith-based Films',
	'3' => 'TV Dev & Prod',
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
