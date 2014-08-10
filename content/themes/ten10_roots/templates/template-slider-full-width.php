<?php
/*
Template Name: Slider - Full Width
*/

global $post;
if(!empty($post)) {
    $slider_imgs = get_post_meta( get_the_ID(), '_cmb_img_slider_full', true );
    }
?>


<?php while (have_posts()) : the_post(); ?>









    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <?php
            foreach ( $slider_imgs as $slider_img ) {
                echo '<div class="item">'?>
                        <img src="<?php echo $slider_img; ?>" >

            <?php
                }
            ?>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>











    <article class="col-lg-6">
        <div class="entry-content">
            <?php the_content(); ?>
        </div>
    </article>
<?php endwhile; ?>


