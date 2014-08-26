<?php
/*
Template Name: Staff-Members
*/
global $post;
if(!empty($post)) {
    $img = get_post_meta( $post->ID, '_cmb_img_split', true );

    }
?>


<?php //query_posts( 'post_type=cpt_staff'); ?>

<section class="content-wrap template-split">
<?php while (have_posts()) : the_post(); ?>
    <div class="featured">
        <img src="<?php echo $img; ?>" class="img-responsive">
    </div>

    <div class="content">
        <article class="entry-content">
          <?php //the_content(); ?>

<?php
          $args = array( 'post_type' => 'cpt_staff', 'posts_per_page' => 10 );
          $loop = new WP_Query( $args );
          while ( $loop->have_posts() ) : $loop->the_post();
          the_title(); ?>
          <a href="<?php echo the_permalink(); ?>">Link</a>
          <?php
            the_excerpt();
          endwhile;
?>

        </article>
    </div>
<?php endwhile; ?>
</section>










