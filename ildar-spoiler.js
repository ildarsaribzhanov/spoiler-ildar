jQuery(function($){
	$(document).on('click', '.spoiler_head', function(){
		$(this).siblings('.spoiler_body').slideToggle();
	});
});
