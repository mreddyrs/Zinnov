$(function() {
    //caches a jQuery object containing the header element
    var header = $(".navbar--menu");
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 1) {
            header.addClass("is-waterfall");

        } else {
            header.removeClass("is-waterfall");

        }
    });

    $('#forgot-password').click(function(){
        $('#forgot-password-form.banner-form').addClass('is-active');
        // console.log('fg')
    });
    $('#back-to-login').click(function(){
        $('#forgot-password-form.banner-form').removeClass('is-active');
        // console.log('fg')
    });
    $('#send-link').click(function(){
        $('#success-msg.banner-form').addClass('is-active');
        // $('#forgot-password-form.banner-form').removeClass('is-active');
        // console.log('fg')
    });
    $('#continue-login').click(function(){
        $('#success-msg.banner-form').removeClass('is-active');
        $('#forgot-password-form.banner-form').removeClass('is-active');
        // console.log('fg')
    });
});

// $(window).bind('scroll',function(e){
//     parallaxScroll();
// });
//
// function parallaxScroll(){
//     var scrolled = $(window).scrollTop();
//     $('.circle--circleOrange').css('top',(0-(scrolled*.2))+'px');
//     $('.circle--circleBlue').css('top',(0-(scrolled*.5))+'px');
//     $('#parallax-bg3').css('top',(0-(scrolled*.75))+'px');
// }
