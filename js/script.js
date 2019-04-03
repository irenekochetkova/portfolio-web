


$(document).ready(function() {

  // for the sticky

  $('.js--section-portfolio').waypoint(function(direction) {
    if (direction == "down") {
      $('nav').addClass('sticky');
    } else {
      $('nav').removeClass('sticky');
    }
  }, {
  offset: '60px;'
  });

  //hide/show section-details-food

  $("#show").click(function(){
    $(".section-details-food").toggle(1000);
  });

  $("#show-2").click(function(){
    $(".section-details-food").show(1000);
  });

  $("#hide").click(function(){
    $(".section-details-food").hide(1000);
  });

  //hide/show for section-details-photo

  $("#show-3").click(function(){
    $(".section-details-photo").toggle(1000);
  });

  $("#show-4").click(function(){
    $(".section-details-photo").show(1000);
  });

  $("#hide-2").click(function(){
    $(".section-details-photo").hide(1000);
  });

  //scroll on buttons

  $('.js--scroll-to-work').click(function() {
    $('html, body').animate({scrollTop: $('.js--scroll-work').offset().top}, 1000);
  });

  $('.js--scroll-to-contact').click(function() {
    $('html, body').animate({scrollTop: $('.js--scroll-contact').offset().top}, 1000);
  });

  $('.js--scroll-to-homemade').click(function() {
    $('html, body').animate({scrollTop: $('.js--scroll-homemade').offset().top}, 1000);
  });

  $('.js--scroll-to-photo').click(function() {
    $('html, body').animate({scrollTop: $('.js--scroll-photo').offset().top}, 1000);
  });

  /* Navigation scroll */
    $(function() {
      $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html,body').animate({
              scrollTop: target.offset().top
            }, 1000);
            return false;
          }
        }
      });
    });

    // mobile-nav
    $('.js--nav-icon').click(function() {
      var nav = $('.js--main-nav');
      var icon = $('.js--nav-icon i');


      nav.slideToggle(200);
      if (icon.hasClass('ion-navicon-round')) {
        icon.addClass('ion-close-round');
        icon.removeClass('ion-navicon-round');
      } else {
        icon.addClass('ion-navicon-round');
        icon.removeClass('ion-close-round');
      }
    });

}); 







