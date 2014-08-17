/**
 * Created by tripl3infinity on 8/15/14.
 */



$(document).ready(function () {

    function overlay_tool() {
        var toolbox = $('<div id="overlay_toolbox"></div>');
        var toggle = $('<input id="ovly_toggle" type="checkbox" />');
        var overlay = $('#overlay_toolz_container');

        toolbox.css({
            'height': 10,
            'width': 10,
            'position': 'fixed',
            'right': 0,
            'top': '45%',
            'background-color': 'red'
        });

        toggle.appendTo(toolbox);
        $('body').append(toolbox);

        if (overlay.is(':checked')) {
            alert('test');
        }


        toggle.click(function () {
            overlay.toggle();
        });
    }

    overlay_tool();

});