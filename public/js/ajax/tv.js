$.ajax({
	url: url+'/api/news',
	type: 'get',
	data: {
		take: '1',
		skip: '0',
		kategori: '249'
	},
	dataType: 'json',
	async: true,
	success: function(data) {
		var str_color = data[0]['kategori_color'].split(';');
		$('.tv-0 .title').html(data[0]['judul']);
		$('.tv-0 .category').html(data[0]['kategori']).css('background-color', str_color[0]).css('color', str_color[1]);
		$('.tv-0 > img').attr('src', path+'/'+data[0]['gambar']);
		$('.tv-0.js-link').attr('data-link', url+'/viewer/'+data[0]['kategori']+'/'+data[0]['seo']+'-'+data[0]['id']);

		$('.ca-0').hide();
		$('.c-0').attr( "style", "display: block !important;" );
	},
	error: function(e){
		console.log('Recall.. API');
		$.ajax(this);
        return;
	} 
});

$.ajax({
	url: url+'/api/news',
	type: 'get',
	data: {
		take: '1',
		skip: '1',
		kategori: '249'
	},
	dataType: 'json',
	async: true,
	tryCount : 0,
    retryLimit : 3,
	success: function(data) {
		if (data.length == 0) {
			$('.tv-1').html('');
			$('.ca-1').hide();
			$('.c-1').attr( "style", "display: block !important;" );
			$('.tv-1.js-link').attr('data-link', url+'/viewer/'+data[0]['kategori']+'/'+data[0]['seo']+'-'+data[0]['id']);
		} else {
			var str_color = data[0]['kategori_color'].split(';');
			$('.tv-1 .title').html(data[0]['judul']);
			$('.tv-1 .category').html(data[0]['kategori']).css('background-color', str_color[0]).css('color', str_color[1]);
			$('.tv-1 > img').attr('src', path+'/'+data[0]['gambar']);
			$('.tv-1.js-link').attr('data-link', url+'/viewer/'+data[0]['kategori']+'/'+data[0]['seo']+'-'+data[0]['id']);

			$('.ca-1').hide();
			$('.c-1').attr( "style", "display: block !important;" );
		}
	},
	error: function(e){
		console.log('Recall.. API');
		this.tryCount++;
        if (this.tryCount <= this.retryLimit) {
            //try again
            $.ajax(this);
            return;
        }
	}
});