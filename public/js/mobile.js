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

// css image injection
$('.img').each(function(i, obj){
	var img_url = $(obj).data('img');
	var id = $(obj).attr('id');
	var elm = document.getElementById(id);
	elm.style.backgroundImage = 'url('+img_url+')';
});
