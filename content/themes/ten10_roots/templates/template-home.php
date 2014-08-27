<?php
/*
Template Name: Home Template
*/
global $post;
if ( ! empty( $post ) ) {
//    $slider_imgs = get_post_meta(get_the_ID(), '_cmb_slider_home', true);
}
?>


<?php while ( have_posts() ) : the_post(); ?>
  <section class="widget_home">
    <div class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <!-- Wrapper for slides -->
        <?php
        $entries = get_post_meta( get_the_ID(), '_cmb_repeat_group', true );
        foreach ( (array) $entries as $key => $entry ) {
          $img = $title = $desc = $caption = '';
          if ( isset( $entry['title'] ) ) {
            $title = esc_html( $entry['title'] );
          }
          if ( isset( $entry['description'] ) ) {
            $desc = esc_html( $entry['description'] );
          }
          if ( isset( $entry['image'] ) ) {
            $img = $entry['image'];
          }
          $caption = isset( $entry['image_caption'] ) ? wpautop( $entry['image_caption'] ) : '';
          ?>

          <div class="item">
            <img src="<?php echo $img; ?>"/>
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
        <span class="fa fa-angle-left"></span>
      </a>
      <a class="right carousel-control" href=".carousel" role="button" data-slide="next">
        <span class="fa fa-angle-right"></span>
      </a>
    </div>


    <div class="feat_img_wrap">
      <?php
      $home_img1 = get_post_meta( $post->ID, '_cmb_home_img_1', true );
      $home_img2 = get_post_meta( $post->ID, '_cmb_home_img_2', true );
      ?>

      <div>
        <img src="<?php echo $home_img1; ?>" class="img-responsive"/>
      </div>

      <div>
        <img src="<?php echo $home_img2; ?>" class="img-responsive"/>
      </div>
    </div>
  </section>



  <section class="menu_featured">

    <h5>TEN10 Entertainment - A Global Film & Television Fund - Leaders in Customizing
      Entertainment Portfolios - Offers Three Divisions of Investment</h5>

    <?php
    if ( has_nav_menu( 'film_pages_navigation' ) ) :
      wp_nav_menu( array( 'theme_location' => 'film_pages_navigation', 'menu_class' => 'nav' ) );
    endif;
    ?>


  </section>



  <?php the_content(); ?>













<?php endwhile; ?>
