/**
 * Created by tripl3inf on 8/16/14.
 */



$(function () {


    var risk_panels = $('.display_box_panels'),
    panel = risk_panels.children('li'),
    range_ticks = $('ul.range_ticks');


    panel.each(function( index ) {

        var tick_index = ++index;
        range_ticks.append('<li>' + tick_index + '</li>');
//        range_ticks.append('<li>' +index + '</li>');
    });

    console.log(risk_panels[1]);
    console.log('#of panels ' + panel.length);


    // Basic rangeslider initialization
    $('#risk_range_slider').rangeslider({

        // Deactivate the feature detection
        polyfill: false,

        // Callback function
        onInit: function () {
        },

        // Callback function
        onSlide: function (position, value) {
            //console.log('position: ' + position, 'value: ' + value);
        },

        // Callback function
        onSlideEnd: function (position, value) {
            //console.log('position: ' + position, 'value: ' + value);
            var currentPanel = $(panel[value]);

            risk_panels.fadeOut("fast", function () {
                panel.hide('fast', function() {
                    currentPanel.show('fast', function() {
                        risk_panels.fadeIn();
                    });
                });
            });


        }
    });

});