<!--<header id="mainBanner" class="container navbar navbar-default navbar-static-bottom" role="banner">-->
<header class="jumbotron">

    <div class="container">

        <h1>TEN10 ENTERTAINMENT</h1>



    </div>
</header>

<div class="container">
<nav class="navbar-collapse" role="navigation">
    <?php
    if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
    endif;
    ?>
</nav>
</div>
<!--<header class="banner" id="mainBanner" role="banner">-->
<!--  <div class="container">-->
<!--    <h1>TEN10 ENTERTAINMENT</h1>-->
<!--  </div>-->
<!--</header>-->
