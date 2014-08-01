<!--<header id="mainBanner" class="container navbar navbar-default navbar-static-bottom" role="banner">-->

<header class="main">
    <div class="container">
        <div class="row">
            <img id="logo_header" class="col-sm-9" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg"
                 alt=""/>

            <div class="mod_featured col-sm-3">
                <div>
                    <p>Invest in a<br/>
                        Dessert Winds<br/>
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

            <ul class="user_menu nav pull-right navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-search"></i></a>
                    <ul class="search dropdown-menu">

                            <div class="input-group">
                                <input type="text" class="form-control">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">Go!</button>
      </span>
                            </div>
                            <!-- /input-group -->

                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <i
                            class="fa fa-sort-desc"></i></a>
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





