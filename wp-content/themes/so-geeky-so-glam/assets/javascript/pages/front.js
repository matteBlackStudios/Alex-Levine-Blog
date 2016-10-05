$( document ).ready(function() {
    var feed = new Instafeed({
        sortBy: 'most-recent',
        get: 'user',
        userId: '1181315011',
        limit:9,
        clientId: '942569088f9e462b863c2580f3b74371',
        accessToken: '1181315011.1677ed0.adcc069fc0294f97b352f2f2e0f74a2e'
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