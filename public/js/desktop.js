$(document).ready(function() {
	$('.js-load').click(function(){
		var link = $(this).data('link');
		$('.loader').html('');
		$('.loading').show();
		$('.placeholder, .placeholder-text').hide();
		$.get(link, function(data) {
			$('.loader').html(data);
		}).done(function(){
			$('.loading').hide();
			$('.placeholder, .placeholder-text').hide();
		});
	});
});

$('.img').each(function(i, obj){
	var img_url = $(obj).data('img');
	var id = $(obj).attr('id');
	var elm = document.getElementById(id);
	elm.style.backgroundImage = 'url('+img_url+')';
});

$('.btn-more').click(function(){
	$('.more').toggle();
});