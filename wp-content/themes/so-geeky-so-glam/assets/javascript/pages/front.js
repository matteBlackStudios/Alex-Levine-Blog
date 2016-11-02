$( document ).ready(function() {
    var feed = new Instafeed({
        sortBy: 'most-recent',
        get: 'user',
        userId: '30218655',
        limit:9,
        clientId: '555253bbfda7484489e9943a76ff0ac7',
        accessToken: '30218655.1677ed0.271f89da90864f57b1f4d39af7bf9230'
    });
    feed.run();

    $('#featured-story-image').slick({
        dots: false,
        infinite: true,
        speed: 500,
        fade: true,
        autoplay: true,
        autoplaySpeed: 2500,
        mobileFirst: false,
        cssEase: 'linear',
        variableWidth: false,
        focusOnSelect: true,
    });

    $('#featured-story-image').on('beforeChange', function(event, slick, currentSlide, nextSlide){
        $(".article-block").removeClass('active');
        $("#block-"+nextSlide).addClass('active');
    });

    $( ".article-block").mouseover(function() {
            $(".article-block").removeClass('active');
            var current_block = $(this).attr("id").split('-')[1];
            $( '#featured-story-image' ).slick('slickGoTo', parseInt(current_block));
        })
        .mouseout(function() {
            var current_slide =  $('#featured-story-image').slick('slickCurrentSlide');
            $("#block-"+current_slide).addClass('active');
        });
});