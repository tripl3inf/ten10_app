<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
  <![endif]-->


<div class="wrap" role="document">

    <?php
    do_action('get_header');
    get_template_part('templates/header');
    ?>


    <main class="<?php echo roots_main_class(); ?>" role="main">
            <?php include roots_template_path(); ?>
    </main>






    <?php get_template_part('templates/footer'); ?>

    <div id="overlay_toolz_container">
        <img style="width:100%; height:100%;"
             src="<?php echo get_template_directory_uri(); ?>/assets/img/mockup_1.jpg"/>
    </div>

</div><!-- /.wrap -->
</body>
</html>
