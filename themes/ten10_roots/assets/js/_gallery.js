function gallery_hover() {
  var $gallery_item = $('.vid_link_wrap');
  console.log($gallery_item);

 $gallery_item.each(function(index) {
  var $item = $(this);
   var $hover_info = $item.find('.hover_info');
   $item.hover(
     function() {
      TweenLite.to( $hover_info, 0.5, {autoAlpha: 1, bottom:'0' });
     },
    function() {
      TweenLite.to( $hover_info, 0.5, {autoAlpha: 0, bottom:'-40px'});
    }
   );
 });

}

gallery_hover();

