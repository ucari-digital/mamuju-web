$(document).ready(function() {
	$('#menu').click(function(){
		$('.partial-menu').fadeIn(1000, function() {
			
		});
		$('.sidebar').addClass('animated slideInUp');
	});

	$('.overlay-button-close').click(function(){
		$('.sidebar').removeClass('slideInUp');
		$('.partial-menu').fadeOut('slow', function() {
			
		});
	});

	$('.js-link').click(function(){
		window.location.href = $(this).data('link');
	});
});
