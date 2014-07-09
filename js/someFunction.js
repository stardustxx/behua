$(function(){
  var $container = $('#masonry');
  $container.imagesLoaded( function(){
    $container.masonry({
        itemSelector : '.item',
        gutterWidth : 20,
        isAnimated: true,
    });
  });
});