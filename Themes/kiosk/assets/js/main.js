(function($) {
  var windowWidth = $(window).width();
  var windowHeight = $(window).height();
  var pgh = windowHeight - 186;
  $('.hm-content-sec-wrp, .ks-dsc-sec-wrp').css('min-height', windowHeight);
  $('.page-content-sec-wrp').css('min-height', pgh);
})(jQuery);