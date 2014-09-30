<?php
$url = home_url();
?>


<header>
  <div class="banner-wrap">
    <div class="banner">
      <a class="logo" href="<?php echo $url ?>"
    </div>
  </div>
  <div class="nav-wrap">
    <nav>
      <div id="nav-main" class="navbar navbar-static-top" role="navigation">

        <i id="mobile_open_BTN" class="mobile_BTN fa fa-bars"></i>
        <i id="mobile_close_BTN" class="mobile_BTN fa fa-times-circle-o" style="visibility: hidden"></i>

        <?php
        if ( has_nav_menu( 'primary_navigation' ) ) :
          wp_nav_menu( array(
            'theme_location' => 'primary_navigation',
            'menu_class'     => 'nav navbar-nav'
          ) );
        endif;
        ?>
      </div>
    </nav>
  </div>


</header>

<?php if ( wp_is_mobile() ) { ?>
    <script>
      window.onload = function () {
        var mNav_btn = $('.mobile_BTN').show();
        mobile_nav_btn();
      }
    </script>
<?php } ?>


