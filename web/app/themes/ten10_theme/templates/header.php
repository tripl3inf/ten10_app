<!--<header id="mainBanner" class="container navbar navbar-default navbar-static-bottom" role="banner">-->
<script src="http://192.168.1.134:35729/livereload.js?snipver=1"></script>

<header class="main ">
    <div class="container">
    <h1>TEN10 ENTERTAINMENT</h1>
        <nav class="navbar navbar-static-top" role="navigation">
                    <?php
                        if (has_nav_menu('primary_navigation')) :
                            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
                        endif;
                    ?>
        </nav>
    </div>
</header>



<div class="container">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner/images/banner1.jpg" class="img-responsive" style="width:100%" alt="...">
</div>




<!--        <nav class="navbar navbar-default navbar-static-top" role="navigation">-->
<!--            <div class="container">-->
<!--                <ul class="nav navbar-nav">-->
<!--                    <li class="active"><a href="#">Home</a></li>-->
<!--                    <li><a href="#about">About</a></li>-->
<!--                    <li><a href="#contact">Contact</a></li>-->
<!--                    <li class="dropdown">-->
<!--                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>-->
<!--                        <ul class="dropdown-menu" role="menu">-->
<!--                            <li><a href="#">Action</a></li>-->
<!--                            <li><a href="#">Another action</a></li>-->
<!--                            <li><a href="#">Something else here</a></li>-->
<!--                            <li class="divider"></li>-->
<!--                            <li class="dropdown-header">Nav header</li>-->
<!--                            <li><a href="#">Separated link</a></li>-->
<!--                            <li><a href="#">One more separated link</a></li>-->
<!--                        </ul>-->
<!--                    </li>-->
<!--            </div>-->
<!--        </nav>-->








<!--<header class="banner" id="mainBanner" role="banner">-->
<!--  <div class="container">-->
<!--    <h1>TEN10 ENTERTAINMENT</h1>-->
<!--  </div>-->
<!--</header>-->
