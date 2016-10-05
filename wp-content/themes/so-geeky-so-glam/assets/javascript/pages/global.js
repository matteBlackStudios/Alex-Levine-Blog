(function() {
    var mobile_menu_height = $("#mobile-navigation").height();
    $("#mobile-navigation").height(0);
    $("#mobile-navigation").css({'opacity':1, 'position': 'relative'});
    $("#menu-trigger").on('click', function(){
        if($("#mobile-navigation").hasClass('open')){
            $("#mobile-navigation").velocity({height: 0},  { duration: 200 });
            $("#mobile-navigation").removeClass('open');
        }else{
            $("#mobile-navigation").velocity({height: mobile_menu_height},  { duration: 200 });
            $("#mobile-navigation").addClass('open');
        }
    });

    $( '.trigger-search' ).on('click', function(){
        transEndEventNames = {
            'WebkitTransition': 'webkitTransitionEnd',
            'MozTransition': 'transitionend',
            'OTransition': 'oTransitionEnd',
            'msTransition': 'MSTransitionEnd',
            'transition': 'transitionend'
        },
            transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ],
            support = { transitions : Modernizr.csstransitions };

        var overlayMenu3 = document.getElementById( 'overlay-search' );

        if( classie.has( overlayMenu3, 'open' ) ) {
            classie.remove( overlayMenu3, 'open' );
            classie.add( overlayMenu3, 'close' );
            var onEndTransitionFn = function( ev ) {
                if( support.transitions ) {
                    if( ev.propertyName !== 'visibility' ) return;
                    this.removeEventListener( transEndEventName, onEndTransitionFn );
                }
                classie.remove( overlayMenu3, 'close' );
            };
            if( support.transitions ) {
                overlayMenu3.addEventListener( transEndEventName, onEndTransitionFn );
            }
            else {
                onEndTransitionFn();
            }
        }
        else if( !classie.has( overlayMenu3, 'close' ) ) {
            classie.add( overlayMenu3, 'open' );
        }

    });

    $( '#overlay-search .overlay-close' ).on('click', function(){
        transEndEventNames = {
            'WebkitTransition': 'webkitTransitionEnd',
            'MozTransition': 'transitionend',
            'OTransition': 'oTransitionEnd',
            'msTransition': 'MSTransitionEnd',
            'transition': 'transitionend'
        },
            transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ],
            support = { transitions : Modernizr.csstransitions };

        var overlayMenu3 = document.getElementById( 'overlay-search' );
        if( classie.has( overlayMenu3, 'open' ) ) {
            classie.remove( overlayMenu3, 'open' );
            classie.add( overlayMenu3, 'close' );
            var onEndTransitionFn = function( ev ) {
                if( support.transitions ) {
                    if( ev.propertyName !== 'visibility' ) return;
                    this.removeEventListener( transEndEventName, onEndTransitionFn );
                }
                classie.remove( overlayMenu3, 'close' );
            };
            if( support.transitions ) {
                overlayMenu3.addEventListener( transEndEventName, onEndTransitionFn );
            }
            else {
                onEndTransitionFn();
            }
        }
        else if( !classie.has( overlayMenu3, 'close' ) ) {
            classie.add( overlayMenu3, 'open' );
        }
    });


})();