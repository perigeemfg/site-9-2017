$(document).ready(function(){


	$('#forward-arrow').addClass('hidden');
    $('#back-arrow').addClass('hidden');
    $('.slideshow-gallery').each(function(){
      $(this).children().first().addClass('first');
      $(this).children().last().addClass('fake');
      $(this).children().last().prev().addClass('last');
    });

   $('.gallery-item').click(function(){

   	if($(this).hasClass('expand')){
   		$(this).removeClass('expand');
   		$('#controls').addClass('hidden');

   	}
        else {
        	$(this).addClass('expand');
        	$('#controls').removeClass('hidden');

        	if($(this).hasClass('first')){
        		$('#back-arrow').addClass('hidden');
        		$('#forward-arrow').removeClass('hidden');
        	}
        	else if($(this).hasClass('last')){
        		$('#forward-arrow').addClass('hidden');
        		$('#back-arrow').removeClass('hidden');
        	}
        	else {
        		$('#forward-arrow').removeClass('hidden');
        		$('#back-arrow').removeClass('hidden');
        	}
        }

    });
   $('#slideshow-overlay').click(function(){
   		$('.gallery-item').removeClass('expand');
   });

   $('#back-arrow').click(function() {
   	var $current = $('.expand');
   		$current.prev().addClass('expand');
   		$current.removeClass('expand');
   	var $current = $('.expand');

   		if($current.hasClass('first')){
        		$('#back-arrow').addClass('hidden');
        		$('#forward-arrow').removeClass('hidden');
        	}
        	else if($current.hasClass('last')){
        		$('#forward-arrow').addClass('hidden');
        		$('#back-arrow').removeClass('hidden');
        	}
        	else {
        		$('#forward-arrow').removeClass('hidden');
        		$('#back-arrow').removeClass('hidden');
        	}

   });

   $('#forward-arrow').click(function() {
   	var $current = $('.expand');
   		$current.next().addClass('expand');
   		$current.removeClass('expand');
   	var $current = $('.expand');

   	if($current.hasClass('first')){
        		$('#back-arrow').addClass('hidden');
        		$('#forward-arrow').removeClass('hidden');
        	}
        	else if($current.hasClass('last')){
        		$('#forward-arrow').addClass('hidden');
        		$('#back-arrow').removeClass('hidden');
        	}
        	else {
        		$('#forward-arrow').removeClass('hidden');
        		$('#back-arrow').removeClass('hidden');
        	}
   });

});
