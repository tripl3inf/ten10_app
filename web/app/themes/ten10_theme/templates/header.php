
<!--<header id="mainBanner" class="container navbar navbar-default navbar-static-bottom" role="banner">-->

<header class="main">
    <div class="container">
        <div class="row">
            <img id="logo_header" class="col-sm-9" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt=""/>

            <div class="mod_featured col-sm-3">
                <div>
                    <p>Invest in a<br />
                        Dessert Winds<br />
                        film production</p>
                </div>
            </div>
        </div>

        <nav class="row navbar navbar-static-top" role="navigation">
            <?php
                if (has_nav_menu('primary_navigation')) :
                wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
                endif;
            ?>

            <ul class="nav pull-right navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-search"></i></a>
                    <ul class="dropdown-menu" style="padding:12px;">
                        <form class="form-inline">
                            <button type="submit" class="btn btn-default pull-right"><i class="glyphicon glyphicon-search"></i></button><input type="text" class="form-control pull-left" placeholder="Search">
                        </form>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i> <i class="glyphicon glyphicon-chevron-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Login</a></li>
                        <li><a href="#">Profile</a></li>
                        <li class="divider"></li>
                        <li><a href="#">About</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</header>









<!--<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">-->
<!--    <ol class="carousel-indicators">-->
<!--        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>-->
<!--        <li data-target="#carousel-example-generic" data-slide-to="1"></li>-->
<!--        <li data-target="#carousel-example-generic" data-slide-to="2"></li>-->
<!--    </ol>-->
<!--    <div class="carousel-inner">-->
<!--        <div class="item active">-->
<!--            <img src="..." alt="...">-->
<!--            <div class="carousel-caption">-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="item">-->
<!--            <img src="..." alt="...">-->
<!--            <div class="carousel-caption">-->
<!--            </div>-->
<!--        </div>-->
<!--         <div class="item">-->
<!--            <img src="..." alt="...">-->
<!--            <div class="carousel-caption">-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">-->
<!--        <span class="glyphicon glyphicon-chevron-left"></span>-->
<!--    </a>-->
<!--    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">-->
<!--        <span class="glyphicon glyphicon-chevron-right"></span>-->
<!--    </a>-->
<!--</div>-->


