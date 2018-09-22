$(document).ready(function() {
	$('.js-load').click(function(){
		// window.location.href = $(this).data('link');
		$('.loader').html('');
		$('.loading').show();
		$('.placeholder, .placeholder-text').hide();
		$.get('http://localhost/mamuju/mamuju-web/public/viewer/Foto/julius-dein-tujukkan-trik-sulap-memukau-di-on-off-festival-2018-6', function(data) {
			$('.loader').html(data);
		}).done(function(){
			$('.loading').hide();
			$('.placeholder, .placeholder-text').hide();
		});
	});
});