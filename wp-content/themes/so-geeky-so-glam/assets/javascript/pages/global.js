/**
 * Created by sadesmith on 8/31/16.
 */
$("#menu-trigger").on('click', function(){
    if($("#mobile-navigation").hasClass('open')){
        $("#mobile-navigation").velocity({height: 0},  { duration: 200 });
        $("#mobile-navigation").removeClass('open');
    }else{
        $("#mobile-navigation").velocity({height: 360},  { duration: 200 });
        $("#mobile-navigation").addClass('open');
    }
});