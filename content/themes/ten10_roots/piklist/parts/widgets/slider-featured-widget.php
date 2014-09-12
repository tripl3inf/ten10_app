<?php
/*
Title: Featured Content Slider/Static Image Widget
Description: Slider Gallery Home Page
*/


//$headline      = esc_html( $settings['headline'] );
//$link      = $settings['cpt_link'];

// Get field data
//$slider_panels = get_post_meta($post->ID, 'slider_panels', true);

//$exercise = get_post_meta($post->ID, 'exercise', true);

//$exercise = $settings['exercise'];
//$field_groups = $settings['field_groups'];
$field_groups = $settings;

$temp_dir = get_template_directory();
?>


<?php echo $before_widget;
//echo $temp_dir;
//$slider_panels = $settings['slider_panels'];
//echo var_dump($slider_panels);
//piklist::pre($settings);
?>



<?php
foreach ( (array) $field_groups as $key => $group ) {
//  echo 'group var = ';
//echo var_dump($group);

  $page_links = $group['page_link'];
  foreach ( $page_links as $link ) {

    if ( ! empty( $link ) ) {
      echo 'page link = ' . $link;
    }
    ?>
    <a href="<?php echo get_permalink( $link ); ?>"><p>My link to a post or page</p></a>
    <?php
    echo '<br />';
  }

  echo 'END';

}

?>


<?php echo $after_widget; ?>
