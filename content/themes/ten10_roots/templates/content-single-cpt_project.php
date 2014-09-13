<?php while (have_posts()) : the_post();
  // fetch custom meta data
  $vid_link = get_post_meta( $post->ID, 'vid_embed_url', true );
  $vid_thumb = get_video_thumbnail();
  $project_desc_long = get_post_meta( $post->ID, 'project_desc_long', true );

  // get vid url from id
  //$vid_url = wp_get_attachment_url( $vid_link );

// look thru array to get to get url
//  foreach ( $vid_link as $link ) {
     //$vid_url = wp_get_attachment_url( $link );
     //echo $vid_url;
//  }

?>
  <?php //delete_post_meta_by_key( 'vid_embed_url' ); ?>

  <section class="content-wrap template-single-project">
    <div class="content">
      <?php
        if ( !empty ($vid_link) ) {
          echo "<div class='video_placeholder image-responsive'>
            <a class='popup-youtube' href='" . $vid_link . "'>
              <img src='" . $vid_thumb . "' width='100%' />
            </a>
          </div>";
        }
      ?>

      <div class="entry-content">
        <?php echo $project_desc_long; ?>
      </div>
    </div>

    <div class="right_rail">
      <?php dynamic_sidebar('sidebar-right-rail'); ?>
    </div>
  </section>


<?php endwhile; ?>




