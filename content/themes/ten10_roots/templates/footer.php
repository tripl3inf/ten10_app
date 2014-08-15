


<footer class="content-info" role="contentinfo">
    <div class="content">
        <div class="disclaimer">
            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
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
