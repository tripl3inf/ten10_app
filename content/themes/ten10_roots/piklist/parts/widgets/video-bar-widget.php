<?php
/*
Title: Video Bar Widget
Description: Displays a Featured Movie and Relevant Information
*/

if ( ! empty( $settings['vid_embed_url'] ) ) {
  $media = $settings['vid_embed_url'];
}
echo $before_widget;
?>

<div class="widget-content">
  <?php
  foreach ( $media as $media_ID ) {
    if ($media_ID) {
      //$thumb_query_url = 'http://gdata.youtube.com/feeds/api/videos/' . $media_ID . '?v=2&alt=jsonc';
      $thumb_query_url = 'http://i1.ytimg.com/vi/' . $media_ID . '/mqdefault.jpg';
//      $json = json_decode(file_get_contents( $thumb_query_url ));
      echo "<div class='vid_link_wrap'>
                <a class='popup-youtube' href='http://www.youtube.com/watch?v=" . $media_ID . "'>
                  <img src='" . $thumb_query_url . "'  alt='" . the_title() .
           "'>
                </a>
            </div>";
    }
  }
  //<img src='" . $json->data->thumbnail->mqDefault . "' width='120' height='90' alt='" . the_title() . "'>
  ?>
</div>
<?php echo $after_widget; ?>


