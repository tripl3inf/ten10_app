<?php
/*
Title: Featured Content Slider/Static Image Widget
Description: Slider Gallery Home Page
*/

global $post;
if ( ! empty( $post ) ) {
  $args = array(
    'post_type' => 'cpt_slider_home',
    'name' => 'test-panel-1',
    'posts_per_page' => - 1
  );
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

  $pricing = get_post_meta($post->ID, 'slider-group', true);
  piklist( get_template_directory() . '/piklist/parts/templates/slider-main-template', array('data' => $pricing,
                                                                                     'loop' => 'data'));
  ?>



<?php
endwhile;
echo $after_widget;
?>
