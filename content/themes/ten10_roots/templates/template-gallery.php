<?php
/*
Template Name: Gallery Page
*/
global $post;
if ( ! empty( $post ) ) {
  $args = array( 'post_type' => 'cpt_project', 'posts_per_page' => - 1 );
  $loop = new WP_Query( $args );

  function get_youtube_id($url)
  {
    if (strpos( $url,"v=") !== false)
    {
      return substr($url, strpos($url, "v=") + 2, 11);
    }
    elseif(strpos( $url,"embed/") !== false)
    {
      return substr($url, strpos($url, "embed/") + 6, 11);
    }
  }
}
?>


<?php dynamic_sidebar( 'sidebar-subhead' ); ?>

<div class="archive-gallery">
  <section class="content-wrap">
    <div class="content">
      <article class="entry-content">
        <?php
        while ( $loop->have_posts() ) :
          $loop->the_post();

          ?>

          <?php// delete_post_meta_by_key( 'project_desc_short' ); ?>
  <?php
  $media_URL= get_post_meta( $post->ID, 'vid_embed_url', true );
  $short_desc = get_post_meta( $post->ID, 'project_desc_short', true );

  if ($media_URL) {
    $media_ID = get_youtube_id($media_URL);
    $thumb_query_url = 'http://i1.ytimg.com/vi/' . $media_ID . '/mqdefault.jpg';
    $thumb_query_lrg_url = 'http://i1.ytimg.com/vi/' . $media_ID . '/maxresdefault.jpg';

    echo "<div class='vid_link_wrap'>
            <a class='popup-image-fit-width' href='" . get_the_permalink() . "' data-mfp-src='" . $thumb_query_lrg_url . "'>
              <img src='" . $thumb_query_url . "'>
            <div class='hover_info'>
              <p class='title'>" . get_the_title() . "</p>";
              if ( !empty($short_desc) ) {
                echo "<p>" . $short_desc . "</p>";
              }
    echo "</div>
        </a>
    </div>";
  }

  ?>


        <?php
          //the_excerpt();
        endwhile;
        ?>
      </article>
    </div>
  </section>


</div>









