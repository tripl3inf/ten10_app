


<footer class="content-info" role="contentinfo">
    <div class="content">
        <div class="disclaimer">
            <?php dynamic_sidebar('sidebar-footer'); ?>
        </div>
        <nav class="navbar navbar-static" role="navigation">
            <?php
            if (has_nav_menu('footer_navigation')) :
                wp_nav_menu(array('theme_location' => 'footer_navigation', 'menu_class' => 'nav navbar-nav'));
            endif;
            ?>

            <ul class="social_media nav pull-right navbar-nav">
                <li>
                    <a href="#">
                        <i class="fa fa-facebook-square fa-stack-2x fa-inverse"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-twitter fa-stack-2x fa-inverse"></i>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</footer>



<script type="text/javascript">
  $(document).ready(function() {
    $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
      disableOn: 700,
      type: 'iframe',
      mainClass: 'mfp-fade',
      removalDelay: 160,
      preloader: false,

      fixedContentPos: false
    });
  });
</script>


<?php wp_footer(); ?>
