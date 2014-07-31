<?php
/*
Template Name: Home Template
*/
?>

<?php


$wp_query = new WP_Query(
            array(
                'posts_per_page' => -1,
                'post_type' => 'gallery'
            )
        );while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'home'); ?>
<?php endwhile; ?>


<?php //get_template_part('templates/template', 'gallery'); ?>
