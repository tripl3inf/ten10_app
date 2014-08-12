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
    <section id="widget_home" class="row">
        <div id="home_carousel" class="col-sm-8 carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ul class="carousel-indicators">
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
                    ?>

                    <div class="item">
                        <img src="<?php echo $img; ?>" class="slider_img"/>
                        <a href="#" alt="<?php echo $title ?>">
                            <div class="slider_desc">
                                <p class="title"><?php echo $title; ?></p>

                                <p class="caption"><?php echo $desc; ?></p>
                            </div>
                        </a>
                    </div>
                <?php
                }
                ?>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href=".carousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href=".carousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>

        <div class="feat_img_container col-sm-4">
            <?php
            global $post;
            $home_img1 = get_post_meta($post->ID, '_cmb_home_img_1', true);
            $home_img2 = get_post_meta($post->ID, '_cmb_home_img_2', true);
            ?>
            <img src="<?php echo $home_img1; ?>"/>

            <img src="<?php echo $home_img2; ?>"/>
        </div>
    </section>



    <section class="menu_featured">
        <div class="row">
            <h4 class="col-sm-12">TEN10 Entertainment - A Global Film & Television Fund - Leaders in Customizing
                Entertainment Portfolios - Offers Three Divisions of Investment</h4>


        <ul>
            <li class="col-sm-4">
                <a href="#">
                    <span>secular films</span>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/film_strip_BG.jpg" class="img_responsive"/>
                </a>
            </li>

            <li class="col-sm-4">
                <a href="#">
                    <span>faith-based films</span>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/film_strip_BG.jpg" class="img_responsive"/>
                </a>
            </li>

            <li class="col-sm-4">
                <a href="#">
                    <span>television development & production</span>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/film_strip_BG.jpg" class="img_responsive"/>
                </a>
            </li>
        </ul>


    </section>



    <?php the_content(); ?>













<?php endwhile; ?>
