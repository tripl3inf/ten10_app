<?php
/*
Title: Featured Content Slider/Static Image Widget
Description: Slider Gallery Home Page
*/

global $post;
if ( ! empty( $post ) ) {
  $args = array( 'post_type' => 'cpt_slider_home', 'posts_per_page' => - 1 );
  $loop = new WP_Query( $args );
}

$field_groups = $settings;
$temp_dir = get_template_directory();
?>


<?php echo $before_widget;

// Get the post meta information
?>


<?php
while ( $loop->have_posts() ) :
  $loop->the_post();

  $pricing = get_post_meta($post->ID, 'pricing_tier_group', true);
  piklist( get_template_directory() . '/piklist/pricing_tier_group_template', array('data' => $pricing, 'loop' => 'data'));
  ?>



<?php
endwhile;
echo $after_widget;
?>
