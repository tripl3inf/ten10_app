/**
 * Created by tripl3inf on 8/16/14.
 */

function init_custom_slider() {

  var risk_panels = $('.display_box_panels'),
    panel = $('.panel'),
    init_active_panel = $('.panel:first-of-type'),
    init_siblings = init_active_panel.siblings(),
    panel_count = panel.length;
    range_element = $('.range_slider');

  function populateRangeSlide(selector, max) {

    var panelTL = new TimelineLite();
    panelTL.set( init_siblings, {autoAlpha:0} );
    selector.slider({
      min: 1,
      max: max,
      animate: "medium",
      stop: function (e, ui) {
        var tick_value = selector.slider("values", 0),
          cur_tick_val = tick_value - 1,
          active_panel = panel[cur_tick_val];
          //active_children = active_panel.find('.display_boxes li');
          //console.log( 'active panel# '+ active_panel );
        if ( $(active_panel).not(':visible') ) {
          panelTL.to(panel, 0.3, {autoAlpha:0});
          panelTL.to(active_panel, 0.3, {autoAlpha:1});
          //panelTL.staggerFrom(active_children, 1, {bottom:'+400px'}, 'stage1')
          //  .staggerTo( active_children, 1, {autoAlpha:1}, 'stage1');
        }
      }
    });

    // init pips plugin
    selector.slider("pips", {
      rest: "label"
    });

  }
  populateRangeSlide(range_element, panel_count);
}



$(function () {
  init_custom_slider();
});
