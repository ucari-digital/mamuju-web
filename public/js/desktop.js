$(document).ready(function() {
	$('.js-load').click(function(){
		var link = $(this).data('link');
		$('.loader').html('');
		$('.loading').show();
		$('.placeholder, .placeholder-text, .signin').hide();
		$.get(link, function(data) {
			$('.loader').html(data);
		}).done(function(){
			$('.loading').hide();
			$('.placeholder, .placeholder-text, .signin').hide();
		});
	});
});