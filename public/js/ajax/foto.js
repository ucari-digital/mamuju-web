$.ajax({
	url: url+'/api/news',
	type: 'get',
	data: {
		take: '1',
		skip: '0',
		kategori: '247'
	},
	dataType: 'json',
	async: true,
	success: function(data) {
		var str_color = data[0]['kategori_color'].split(';');
		$('.ft-0 .title').html(data[0]['judul']);
		$('.ft-0 .category').html(data[0]['kategori']).css('background-color', str_color[0]).css('color', str_color[1]);
		$('.ft-0 > img').attr('src', path+'/'+data[0]['gambar']);
		$('.ft-0.js-link').attr('data-link', url+'/viewer/'+data[0]['kategori']+'/'+data[0]['seo']+'-'+data[0]['id']);

		$('.da-0').hide();
		$('.d-0').attr( "style", "display: block !important;" );
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
		kategori: '247'
	},
	dataType: 'json',
	async: true,
	tryCount : 0,
    retryLimit : 3,
	success: function(data) {
		var str_color = data[0]['kategori_color'].split(';');
		$('.ft-1 .title').html(data[0]['judul']);
		$('.ft-1 .category').html(data[0]['kategori']).css('background-color', str_color[0]).css('color', str_color[1]);
		$('.ft-1 > img').attr('src', path+'/'+data[0]['gambar']);
		$('.ft-1.js-link').attr('data-link', url+'/viewer/'+data[0]['kategori']+'/'+data[0]['seo']+'-'+data[0]['id']);

		$('.da-1').hide();
		$('.d-1').attr( "style", "display: block !important;" );
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

$.ajax({
	url: url+'/api/news',
	type: 'get',
	data: {
		take: '1',
		skip: '2',
		kategori: '247'
	},
	dataType: 'json',
	async: true,
	tryCount : 0,
    retryLimit : 3,
	success: function(data) {
		var str_color = data[0]['kategori_color'].split(';');
		$('.ft-2 .title').html(data[0]['judul']);
		$('.ft-2 .category').html(data[0]['kategori']).css('background-color', str_color[0]).css('color', str_color[1]);
		$('.ft-2 > img').attr('src', path+'/'+data[0]['gambar']);
		$('.ft-2.js-link').attr('data-link', url+'/viewer/'+data[0]['kategori']+'/'+data[0]['seo']+'-'+data[0]['id']);

		$('.da-2').hide();
		$('.d-2').attr( "style", "display: block !important;" );
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