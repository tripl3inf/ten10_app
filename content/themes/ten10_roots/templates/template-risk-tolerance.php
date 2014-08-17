<?php
/*
Template Name: Risk Tolerance
*/

global $post;
if (!empty($post)) {
    $img = get_post_meta($post->ID, '_cmb_img_third', true);
}

?>





<section class="content-wrap template-thirds">
    <?php while (have_posts()) : the_post(); ?>
        <div class="featured">
            <img src="<?php echo $img; ?>" class="img-responsive">
        </div>
        <div class="content">
            <div>
                <h2>Floating point boundaries</h2>
                <input type="range" min="0" max="10" step="1" value="5" data-rangeslider>
                <output></output>
            </div>

            <article class="entry-content">
                <?php the_content(); ?>
            </article>
        </div>
    <?php endwhile; ?>
</section>


<script>
    $(function () {

        var $document = $(document),
            selector = '[data-rangeslider]',
            $element = $(selector);

        // Example functionality to demonstrate a value feedback
        function valueOutput(element) {
            var value = element.value,
                output = element.parentNode.getElementsByTagName('output')[0];
            output.innerHTML = value;
        }

        for (var i = $element.length - 1; i >= 0; i--) {
            valueOutput($element[i]);
        }
        ;
        $document.on('change', 'input[type="range"]', function (e) {
            valueOutput(e.target);
        });


        // Basic rangeslider initialization
        $element.rangeslider({

            // Deactivate the feature detection
            polyfill: false,

            // Callback function
            onInit: function () {
            },

            // Callback function
            onSlide: function (position, value) {
                console.log('onSlide');
                console.log('position: ' + position, 'value: ' + value);
            },

            // Callback function
            onSlideEnd: function (position, value) {
                console.log('onSlideEnd');
                console.log('position: ' + position, 'value: ' + value);
            }
        });

    });
</script>