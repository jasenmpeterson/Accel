import $ from 'jquery';

$(document).ready(function(){

  $(function() {
    // Check the initial Poistion of the Sticky Header
    var stickyHeaderTop = $('.secondary-nav').offset().top;

    $(window).scroll(function () {
      if ($(window).scrollTop() > stickyHeaderTop) {
        $('.secondary-nav').css({position: 'fixed', top: '0px', width: '100%', zIndex: '10'});
      } else {
        $('.secondary-nav').css({position: 'static', top: '0px'});
      }
    });
  })

})
