<!--<header id="mainBanner" class="container navbar navbar-default navbar-static-bottom" role="banner">-->
<header class="wrap">

        <div class="main">
        	<div class="banner">

                <div class="logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt=""/>
                </div>

                <div class="mod_featured">
                    <div>
                        <p>Invest in a Dessert Wind<br/>
                            Studio Production</p>
                    </div>
                </div>

                <nav class="navbar navbar-static-top" role="navigation">
                    <?php
                    if (has_nav_menu('primary_navigation')) :
                        wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'col-xs-12 nav navbar-nav'));
                    endif;
                    ?>
                </nav>
			</div>

        </div>
˜
            

</header>

<?php

?>


			<!-- 
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
            -->