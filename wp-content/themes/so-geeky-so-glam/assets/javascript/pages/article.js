$(function() {
    $('.gallery').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        adaptiveHeight: true
    });

    $("#gallery-caption .close-btn").on('click', function(){
        console.log('console login');
        $("#gallery-caption").fadeOut();
    });


    $('.gallery').on('afterChange', function(event, slick, currentSlide){
        var cur_slide_num = currentSlide;
        $('#gallery-caption').hide();
        $('.caption-container').hide();
        var cur_slide = '#caption-'+ (parseInt(cur_slide_num));
        $(cur_slide).fadeIn();
        $('#gallery-caption').fadeIn();
    });

});

