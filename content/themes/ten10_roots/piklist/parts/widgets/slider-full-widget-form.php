<?php
/*
Title: Slider Gallery (full-width) Widget
Description: Slider Gallery For Sub-Head Area
*/

// headline field
piklist('field', array(
	'type' => 'text',
	'field' => 'headline',
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
	'field' => 'copy',
	'label' => 'Copy',
	'description' => 'Body copy / text',
	'attributes' => array(
		'class' => 'copy'
	)
));


// END widget
?>
