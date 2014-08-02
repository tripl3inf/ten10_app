<?php
/*
Template Name: Feature Image - Split
*/

if ( has_post_thumbnail() ) {
// the current post has a thumbnail
    $image_attributes = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID) );
}
?>





<?php while (have_posts()) : the_post(); ?>
    <div class="col-lg-6">
        <img src="<?php echo $image_attributes[0]; ?>" class="img-responsive">
    </div>
    
                            <?php
                    global $post;
                    $text = get_post_meta( $post->ID, '_cmb_test_text', true );
                    echo $text;
                    ?>
    <div class="col-lg-6">
        <img src="<?php echo $text ?>" class="img-responsive">
    </div>
    
    
    <article class="col-lg-6">
        <div class="entry-content">
            <?php the_content(); ?>
        </div>
    </article>
<?php endwhile; ?>


<?php //get_template_part('templates/template', 'gallery'); ?>
