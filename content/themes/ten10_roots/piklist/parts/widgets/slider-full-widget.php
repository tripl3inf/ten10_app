<?php
/*
Title: Widget - Slider (full width)
Description: Full width Slider gallery for sub-head widget area
*/


//echo $settings;

$myquery['tax_query'] = array(
  array(
    'taxonomy' => 'project_type',
    //'terms' => array('term_id'),
   // 'terms' => 'film',
    'field' => 'term_id'
  )
);
//query_posts($myquery);

$loop        = new WP_Query( $myquery );


$headline      = esc_html( $settings['headline'] );
//$copy          = $settings['copy'];
//$list_headline = $settings['list_headline'];
//$link          = $settings['link_select'];
?>


<?php echo $before_widget; ?>

<h1><?php var_dump( $settings ); ?></h1>

<ul class="project_list">
  <?php
  while ( $loop->have_posts() ) :
    $loop->the_post();
    ?>
    <li class="project_info">
      <div class="thumb_wrap">
        <a href="<?php echo the_permalink(); ?>">
          <?php //the_post_thumbnail( 'archive-project-thumb' ); ?>
        </a>
      </div>

      <ul>
        <li class="project_title">
          <?php the_title(); ?>
        </li>

        <li>
          <span>Director:</span>
          <?php //echo get_post_meta( $post->ID, 'project_director', true ); ?>
        </li>


        <li>
          <span>Producer:</span>
          <?php //echo get_post_meta( $post->ID, 'project_producer', true ); ?>
        </li>

        <li class="project_trailer_link">
            <?php //echo $taxonomy;
            //print_r (  $settings['project_type_select'] );
            $this->get_field_name('project_select');
            $list = $settings['project_select'];
            foreach ( $list as $item ) {
              echo  $item ;
            }

            ?>

        </li>

        <li class="project_desc"><p><?php echo get_post_meta( $post->ID, 'project_desc', true ); ?></p></li>
      </ul>

    </li>
  <?php
    //the_excerpt();
  endwhile;
  ?>
</ul>





<!--<section class="archive-projects content-wrap">-->
<!--  <div class="content">-->
<!--    <article class="entry-content">-->
<!--      <ul class="project_list">-->
<!--        --><?php
//        while ( $loop->have_posts() ) :
//          $loop->the_post();
//          ?>
<!--              <li class="project_title">-->
<!--                --><?php //the_title(); ?>
<!--              </li>-->
<!---->
<!---->
<!--              <li>-->
<!--                <span>Producer:</span>-->
<!--                --><?php //echo get_post_meta( $post->ID, 'project_producer', true ); ?>
<!--              </li>-->
<!--        --><?php
//          //the_excerpt();
//        endwhile;
//        ?>
<!--      </ul>-->
<!--    </article>-->
<!--  </div>-->
<!--</section>-->


<?php echo $after_widget; ?>
