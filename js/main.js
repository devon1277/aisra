// Mobile icon menu
var activebtn;

function reset_nav() {
  $('.skip-drops').hide();
  $('.skipLinks a').removeClass('active');
};

$(document).ready(function(){
  $('.skipLinks li a').click(function(e){
    reset_nav();
    
    if( activebtn != $(this).attr("class") ) {
      activebtn = $(this).attr("class");
      $('#' + activebtn).show();
      $(this).addClass('active');
    }
    else {
      activebtn = '';
    }
  });
});

// Mobile collapse menu
(function($) {
  $.fn.collapsable = function(options) {
    // iterate and reformat each matched element
    return this.each(function() {
      // cache this:
      var obj = $(this);
      var tree = obj.next('.navigation');
      obj.click(function(){
        if( obj.is(':visible') ){tree.slideToggle();}
      });
      $(window).resize(function(){
        if ( $(window).width() <= 570 ){tree.attr('style','');};
      });
    });
  };
})(jQuery);

$(document).ready(function(){
    $('.slide-trigger').collapsable();
});