<?php
/*
Template Name: Home Template 
*/
?>


<section class="row slider_home">
	<div class="slider_container col-lg-8">
    	<?php echo do_shortcode('[image-carousel category="home-slider"]'); ?>
	</div>

    <div class="feat_img_container col-lg-4">
        <?php
        global $post;
        $home_img1 = get_post_meta( $post->ID, '_cmb_home_img_1', true );
        $home_img2 = get_post_meta( $post->ID, '_cmb_home_img_2', true );
        ?>
        <image src="<?php echo $home_img1; ?>"></image>
        <image src="<?php echo $home_img2; ?>"></image>
    </div>
</section>


<?php the_content(); ?>
