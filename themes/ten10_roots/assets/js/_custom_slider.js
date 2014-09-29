/**
 * Created by tripl3infinity on 8/11/14.
 */
$(document).ready(function () {

// Custom Slider
function custom_slider(){
    var items = $('.carousel-inner .item');
    var indicator = $('.carousel-indicators');
    $('.carousel-inner .item:first-child').addClass('active');
    //console.log( items.length );

    items.each(function( index ) {
        indicator.append('<li data-slide-to="'+index+'" data-target=".carousel" class="active"></li>');
        //console.log( index );
    });

}

custom_slider();




});




