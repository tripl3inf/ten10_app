


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
                <li>
                    <a href="#">
                        <i class="fa fa-google-plus fa-stack-2x fa-inverse"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-rss fa-stack-2x fa-inverse"></i>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</footer>


<!-- DEV ONLY!!! -->
<!--<script src="//localhost:35729/livereload.js"></script>-->




<?php wp_footer(); ?>
