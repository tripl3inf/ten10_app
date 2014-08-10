<?php
/*
Template Name: Feature Image - Split
*/

global $post;
if(!empty($post)) {
    $img = get_post_meta( $post->ID, '_cmb_img_split', true );

    }
?>


<?php while (have_posts()) : the_post(); ?>
    <div class="featured col-lg-6">
        <img src="<?php echo $img; ?>" class="img-responsive">
    </div>

    <article class="col-lg-6">
        <div class="entry-content">
            <?php the_content(); ?>
        </div>
    </article>
<?php endwhile; ?>


