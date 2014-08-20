<?php
/*
Title: Film Page Widget
Description: Sidebar widget for film pages
*/
?>


<?php echo $before_widget; ?>

<?php echo $before_title; ?>

<?php echo $after_title; ?>




<?php $test_field = $settings['field_name'];

//$test_fields = get_post_meta($post_id, 'field_name');

foreach ($test_field as $test_field)
{
//	$test = get_post($test_field);
//	$title = $myupload->post_title;
//	$description = $myupload->post_content;
//	$caption = $myupload->post_excerpt;

//	echo 'title:' . $title;
//	echo 'description:' . $description;
	echo "<p>" . $test_field . "</p>";

//	echo '<img src="' . wp_get_attachment_url($image) . '"/>';

//print_r($test); // Displays all data
}


?>






<?php echo $after_widget; ?>