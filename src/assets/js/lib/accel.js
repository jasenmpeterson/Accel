import $ from 'jquery';

$(document).ready(function(){

  // Sticky Header

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

  // Scroll To
  $(function() {
    $('.dropdown.menu li a, .mobile-off-canvas-menu a').click(function(e){
      e.preventDefault();
      var curr_section = $(e.target).text();
      var scrollTop     = $(window).scrollTop()
      var elementOffset = $('[data-section="'+curr_section+'"]').offset().top
      var distance      = (elementOffset - scrollTop) - 215
      console.log(distance)
      window.scrollBy({
        top: distance,
        left: 0,
        behavior: 'smooth'
      })
    })
    $('.logo-container').click(function(e){
      e.preventDefault();
      console.log('clicked');
      window.scroll({
        top: 0,
        left: 0,
        behavior: 'smooth'
      })
    })
    $('.mobile-off-canvas-menu a').click(function(e){
      e.preventDefault();
      $('.mobile-off-canvas-menu').foundation('close')
    })
  })

})
