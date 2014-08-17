<?php
/*
Template Name: Risk Tolerance
*/

global $post;
if (!empty($post)) {
    $img = get_post_meta($post->ID, '_cmb_img_third', true);
}

?>





<section class="content-wrap template-thirds">
    <?php while (have_posts()) : the_post(); ?>
        <div class="featured">
            <img src="<?php echo $img; ?>" class="img-responsive">
        </div>
        <div class="content">
            <div>
                <h2>Floating point boundaries</h2>
                <input type="range" min="0" max="10" step="1" value="5" data-rangeslider>
                <output></output>
            </div>

            <article class="entry-content">
                <?php the_content(); ?>
            </article>
        </div>
    <?php endwhile; ?>
</section>


