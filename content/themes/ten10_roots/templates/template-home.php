<?php
/*
Template Name: Home Template 
*/

global $post;
if (!empty($post)) {
    $slider_imgs = get_post_meta(get_the_ID(), '_cmb_slider_home', true);
}
?>


<?php while (have_posts()) : the_post(); ?>

    <section class="row slider_home">
        <div class="slider_container col-sm-8">

            <div id="slider_home" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ul class="carousel-indicators">
<!--                    <li data-target="#slider_home" data-slide-to="0" class="active"></li>-->
<!--                    <li data-target="#slider_home" data-slide-to="1"></li>-->
<!--                    <li data-target="#slider_home" data-slide-to="2"></li>-->
                </ul>

                <div class="carousel-inner">
                    <!-- Wrapper for slides -->
                    <?php

                    $entries = get_post_meta(get_the_ID(), '_cmb_repeat_group', true);

                    foreach ((array)$entries as $key => $entry) {

                        $img = $title = $desc = $caption = '';

                        if (isset($entry['title']))
                            $title = esc_html($entry['title']);

                        if (isset($entry['description']))
                        //    $desc = wpautop($entry['description']);
                        $desc = $entry['description'];

                        if (isset($entry['image'])) {
                            $img = $entry['image'];
                            // $img = wp_get_attachment_image( $entry['image_id'], 'share-pick', null, array(
                            //     'class' => 'thumb',
                            // ) );
                        }
                        $caption = isset($entry['image_caption']) ? wpautop($entry['image_caption']) : '';
//        echo $title;
//        echo $desc;
                        ?>
                        <a href="#" class="item" alt="<?php echo $title ?>">
                            <img src="<?php echo $img; ?>" class="slider_img">
                            <p class="slider_desc"><?php echo $desc; ?></p>
                        </a>

                    <?php
                    }
                    ?>
                </div>


                <!-- Controls -->
                <a class="left carousel-control" href="#slider_home" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#slider_home" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>

        </div>


        <div class="feat_img_container col-sm-4">
            <?php
            global $post;
            $home_img1 = get_post_meta($post->ID, '_cmb_home_img_1', true);
            $home_img2 = get_post_meta($post->ID, '_cmb_home_img_2', true);
            ?>
            <img src="<?php echo $home_img1; ?>">

            <img src="<?php echo $home_img2; ?>">
        </div>
    </section>







    <?php the_content(); ?>













<?php endwhile; ?>
