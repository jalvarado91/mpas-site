$(document).ready(function(){
  $('.home-slider').slick({
     infinite: true,
     dots: false,
     fade: true,
     autoplay: true,
     autoplaySpeed: 5000,
     prevArrow: '<button class="slider-arrow slick-prev"><i class="fa fa-angle-left"></i></button>',
     nextArrow: '<button class="slider-arrow slick-next"><i class="fa fa-angle-right"></i></button>'
  });
});
