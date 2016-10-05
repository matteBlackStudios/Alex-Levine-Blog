jQuery(document).ready(function($){

	$('.zilla-likes').on('click',
	    function() {
    		var link = $(this);
    		var id = $(this).attr('id'),
    			postfix = link.find('.zilla-likes-postfix').text();
			
    		$.post(zilla_likes.ajaxurl, { action:'zilla-likes', likes_id:id, postfix:postfix }, function(data){
                var current_likes = parseInt($("#hero-like-count").text());
                if(link.hasClass('active')){
                    link.html(data).removeClass('active');
                    if(current_likes){
                        $("#hero-like-count").text(current_likes - 1);
                    }
                    
                }else{
                    link.html(data).addClass('active').attr('title','You already like this');
                    $("#hero-like-count").text(current_likes + 1);
                }
        
    			
    		});
		
    		return false;
	});
	
	if( $('body.ajax-zilla-likes').length ) {
        $('.zilla-likes').each(function(){
    		var id = $(this).attr('id');
    		$(this).load(zilla_likes.ajaxurl, { action:'zilla-likes', post_id:id });
    	});
	}

});