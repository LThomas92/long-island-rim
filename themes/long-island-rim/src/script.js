$ = jQuery.noConflict();

$(document).ready(function() {
    $('.c-front-page__hp-services').slick({
        dots: true,
        arrows: false,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
      });
});