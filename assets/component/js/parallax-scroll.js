$(document).ready(function(){
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 450);
        return false;
      }
    }
  });
  $(window).scroll(function(){
    var s = $(window).scrollTop();
    if (s > 200) {
      $('.keatas').removeClass('ilang');
      $('.keatas').addClass('muncul');
    }else{
      $('.keatas').addClass('ilang');
      $('.keatas').removeClass('muncul');
    };
  });
});