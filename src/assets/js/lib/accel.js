import $ from 'jquery';

$(document).ready(function(){

  // Sticky Header

  $(function() {
    // Check the initial Poistion of the Sticky Header
    var stickyHeaderTop = $('.secondary-nav').offset().top;

    $(window).scroll(function () {
      if ($(window).scrollTop() > stickyHeaderTop) {
        $('.secondary-nav').addClass('sticky-nav');
      } else {
        $('.secondary-nav').removeClass('sticky-nav');
      }
    });
  })

  // Scroll To
  $(function() {
    $('a[href*="#"]')
    // Remove links that don't actually link to anything
      .not('[href="#"]')
      .not('[href="#0"]')
      .click(function(event) {
        // On-page links
        if (
          location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
          &&
          location.hostname == this.hostname
        ) {
          // Figure out element to scroll to
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
          // Does a scroll target exist?
          if (target.length) {
            // Only prevent default if animation is actually gonna happen
            event.preventDefault();
            $('html, body').animate({
              scrollTop: target.offset().top - 100
            }, 1000);
          }
        }
      });
    $('.mobile-off-canvas-menu a').click(function(e){
      e.preventDefault();
      $('.mobile-off-canvas-menu').foundation('close')
    })
  })

})
