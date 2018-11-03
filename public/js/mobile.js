$(document).ready(function() {
	$('.btn-more').click(function(){
		$('.partial-menu').fadeIn('fast', function() {
			
		});
		$('.sidebar').addClass('animated slideInUp');
		$('.content-parent').hide();
	});

	$('.btn-search').click(function(){
		$('.partial-search').fadeIn();
		$('.sidebar').addClass('animated slideInUp');
		$('.content-parent').hide();
	});

	$('.menu-button-close').click(function(){
		$('.sidebar').removeClass('slideInUp');
		$('.partial-menu').fadeOut('slow');
		$('.partial-search').fadeOut('slow');
		$('.content-parent').show();
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
