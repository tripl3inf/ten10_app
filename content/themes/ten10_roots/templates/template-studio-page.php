<?php
/*
Template Name: Studio Page/Employee Roster
*/
global $post;
//if ( ! empty( $post ) ) {
  $name = get_post_meta($post->ID, 'cpt_staff_text', true);
//  $position = get_post_meta($post->ID, 'position', true);
//  $staff_photo =  get_post_meta($post->ID, 'staff_photo', true);
//}
?>



<section class="content-wrap template-studio">
	<?php while ( have_posts() ) : the_post(); ?>
		<div class="featured_img_full">
			<img src="<?php //echo $staff_photo; ?>" class="img-responsive">
		</div>

			<?php //dynamic_sidebar('sidebar-left-rail'); ?>


		<div class="content">
			<div class="entry-content">

				<p><?php echo $name; ?></p>
			</div>
		</div>
	<?php endwhile; ?>
</section>








