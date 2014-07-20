<!--<header id="mainBanner" class="container navbar navbar-default navbar-static-bottom" role="banner">-->
<script src="http://192.168.1.134:35729/livereload.js?snipver=1"></script>

<header class="main">
    <div class="container">
        <div class="row">
            <h1 class="col-sm-8">TEN10 ENTERTAINMENT</h1>
            <div class="featured col-sm-3 col-sm-offset-1">Invest in a Dessert Winds film production</div>
        </div>

        <nav class="navbar navbar-static-top" role="navigation">
            <?php
                if (has_nav_menu('primary_navigation')) :
                wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
                endif;
            ?>
        </nav>
    </div>
</header>



<!--<div class="container">-->
<!--    <div class="row">-->
<!--        <img src="--><?php //echo get_template_directory_uri(); ?><!--/assets/img/banner/images/banner1.jpg" class="img-responsive" style="width:100%" alt="...">-->
<!--    </div>-->
<!--</div>-->

<!---->
<!--function pw_show_gallery_image_urls( $content ) {-->
<!---->
<!--global $post;-->
<!---->
<!--// Only do this on singular items-->
<!--if( ! is_singular() )-->
<!--return $content;-->
<!---->
<!--// Make sure the post has a gallery in it-->
<!--if( ! has_shortcode( $post->post_content, 'gallery' ) )-->
<!--return $content;-->
<!---->
<!--// Retrieve all galleries of this post-->
<!--$galleries = get_post_galleries_images( $post );-->
<!---->
<!--$image_list = '<ul>';-->
<!---->
<!--    // Loop through all galleries found-->
<!--    foreach( $galleries as $gallery ) {-->
<!---->
<!--    // Loop through each image in each gallery-->
<!--    foreach( $gallery as $image ) {-->
<!---->
<!--    $image_list .= '<li>' . $image . '</li>';-->
<!---->
<!--    }-->
<!---->
<!--    }-->
<!---->
<!--    $image_list .= '</ul>';-->
<!---->
<!--// Append our image list to the content of our post-->
<!--$content .= $image_list;-->
<!---->
<!--return $content;-->
<!---->
<!--}-->
<!--add_filter( 'the_content', 'pw_show_gallery_image_urls' );-->

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
