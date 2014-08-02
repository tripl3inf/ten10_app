<?php
/*
Template Name: Home Template 
*/
?>


<section class="row slider_home">
	<ul class="slider_container col-lg-8">
		<?php 
			$loop = new WP_Query(array('post_type' => 'feature', 'posts_per_page' => -1, 'orderby'=> 'ASC')); 
			while ( $loop->have_posts() ) : $loop->the_post(); 
		?>
			
		<li class="slider_img">
		<?php
			$url = get_post_meta($post->ID, "url", true);
			if($url!='') {
				echo '<a href="'.$url.'">';
				echo the_post_thumbnail('img_gallery_home', array( 'class' => "img-responsive"));
				echo '</a>';
			} 
			else {
				echo the_post_thumbnail('img_gallery_home', array( 'class' => "img-responsive"));
			}
		?>		
		</li>
		
		<?php //the_content();?>
		<?php endwhile; ?>	
		<?php wp_reset_query(); ?>
	</ul>

</section>