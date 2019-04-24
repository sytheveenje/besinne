jQuery(document).ready(function( $ ) {
	
	function makeVisible() {
		$('.step-text').each( function(i){
	            
	        var bottom_of_object = $(this).offset().top + $(this).outerHeight();
	        var bottom_of_window = $(window).scrollTop() + $(window).height();
	        
	        /* If the object is completely visible in the window, fade it it */
	        if( bottom_of_window > bottom_of_object ){
	            
	            $(this).animate({'opacity':'1'},500);
	                
	        }
	        
	    }); 
	}

	$(window).on("load", function() {
		makeVisible();
	});

	/* Every time the window is scrolled ... */
    $(window).scroll( function(){
    
        makeVisible();
    
    });
    $('.btn').click(function(event) {
        $('html, body').animate({
            scrollTop: $( $(this).attr('href') ).offset().top -210
        }, 1000);
    });


    $('.menu-button').on('click', function(){
    	$('.navigation').slideToggle('fast');
    });
	
});