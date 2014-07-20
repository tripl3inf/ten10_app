<?php
/*
Template Name: Custom Template
*/
?>

<?php //while (have_posts()) : the_post(); ?>
<!--  --><?php //get_template_part('templates/page', 'header'); ?>
<!--  --><?php //get_template_part('templates/content', 'page'); ?>
<?php //endwhile; ?>







<?php


$wp_query = new WP_Query(
    array(
        'posts_per_page' => -1,
        'post_type' => 'gallery'
    ));
while ($wp_query->have_posts()) : $wp_query->the_post(); ?>



<div class="content">
    <ul class="photogal">
        <li>
<!--            <li class="element --><?php //if (function_exists('jss_taxonomy_name')) {
//                jss_taxonomy_name();
//            } ?><!--">-->
                <!--
                <a class="fancybox" rel="<?php //if (function_exists('jss_taxonomy_name')) { jss_taxonomy_name(); } ?>" href="<?php
                   //get post thumbnail id
                   //$image_id = get_post_thumbnail_id();
                   //go get image attributes [0] => url, [1] => width, [2] => height
                   //$image_url = wp_get_attachment_image_src($image_id, '', true);
                   //echo out the url
                   //echo $image_url[0];  ?>">
                   <?php //the_post_thumbnail('album-grid'); //display custom thumbnail size ?>
                </a> -->
                <?php //the_post_thumbnail('album-grid'); //display custom thumbnail size ?>
            </li>
        <!--end li-->

    </ul>
    <!--end photogallery-->

</div><!--end content-->


<?php endwhile; ?>




