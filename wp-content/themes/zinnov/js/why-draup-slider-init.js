$(function(){
    // $('.draup-indicator-slider').slick({
    //     slidesToShow: 1,
    //     slidesToScroll: 1,
    //     arrows: false,
    //     infinite: false,
    //     asNavFor: '.draup-content-slider'
    // });
    $('.draup-content-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        // asNavFor: '.draup-indicator-slider',
        dots: false,
        infinite: false,
        nextArrow: '<div class="slick__arrows slick__next"><i class="icon-right-arrow"></i></div>',
        prevArrow: '<div class="slick__arrows slick__prev"><i class="icon-left-arrow"></i></div>',
        arrows: true,
        autoplay: true
    });


    $('.draup-content-slider').on('afterChange', function(event, slick, currentSlide, nextSlide){
        var totalList = $('.draup-indicator-slider__list').length;

        $('.draup-indicator-slider__list').eq(currentSlide).addClass('active').siblings().removeClass('active');


    });
});
