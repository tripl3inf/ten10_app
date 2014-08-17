<?php
/*
Template Name: Risk Tolerance
*/

global $post;
if (!empty($post)) {
    $img = get_post_meta($post->ID, '_cmb_img_third', true);
}

?>





<section class="content-wrap template-risk">
    <?php while (have_posts()) : the_post(); ?>
        <div class="featured">
            <img src="<?php echo $img; ?>" class="img-responsive">
        </div>
        <div class="content">
	        <article class="entry-content">
		        <?php the_content(); ?>
	        </article>

            <div class="range_slider_wrap">
	            <ul class="range_ticks">
		            <li>1</li>
		            <li>2</li>
		            <li>3</li>
		            <li>4</li>
		            <li>5</li>
		            <li>6</li>
		            <li>7</li>
		            <li>8</li>
		            <li>9</li>
		            <li>10</li>
	            </ul>
                <input type="range" min="1" max="10" step="1" value="5" data-rangeslider>
                <output></output>

	            <ul class="display_boxes">
		            <li>
			            <h5>P&A Income</h5>
			            <h6>10%</h6>
			            <p>
				            Investment into finished films. Investors receive Senior Position in
				            the project’s revenue waterfall. This position is backed by 100% of ALL
				            of the project’s revenues, and offers
				            a fixed term (6-12 months) and fixed simple interest rate of return
				            (typically 15%-20%).
			            </p>
		            </li>


		            <li>
			            <h5>P&A Income</h5>
			            <h6>10%</h6>
			            <p>
				            Investment into finished films. Investors receive Senior Position in
				            the project’s revenue waterfall. This position is backed by 100% of ALL
				            of the project’s revenues, and offers
				            a fixed term (6-12 months) and fixed simple interest rate of return
				            (typically 15%-20%).
			            </p>
		            </li>


		            <li>
			            <h5>P&A Income</h5>
			            <h6>10%</h6>
			            <p>
				            Investment into finished films. Investors receive Senior Position in
				            the project’s revenue waterfall. This position is backed by 100% of ALL
				            of the project’s revenues, and offers
				            a fixed term (6-12 months) and fixed simple interest rate of return
				            (typically 15%-20%).
			            </p>
		            </li>

	            </ul>
	            
            </div>
        </div>
    <?php endwhile; ?>
</section>


