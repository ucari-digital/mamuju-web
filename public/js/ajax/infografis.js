$.ajax({
	url: url+'/api/news',
	type: 'get',
	data: {
		take: '1',
		skip: '0',
		kategori: '245'
	},
	dataType: 'json',
	async: true,
	success: function(data) {
		var str_color = data[0]['kategori_color'].split(';');
		$('.in-0 .title').html(data[0]['judul']);
		$('.in-0 .category').html(data[0]['kategori']).css('background-color', str_color[0]).css('color', str_color[1]);
		$('.in-0 > img').attr('src', path+'/'+data[0]['gambar']);
		$('.in-0.js-link').attr('data-link', url+'/viewer/'+data[0]['kategori']+'/'+data[0]['seo']+'-'+data[0]['id']);

		$('.ba-0').hide();
		$('.b-0').attr( "style", "display: block !important;" );
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
		kategori: '245'
	},
	dataType: 'json',
	async: true,
	success: function(data) {
		var str_color = data[0]['kategori_color'].split(';');
		$('.in-1 .title').html(data[0]['judul']);
		$('.in-1 .category').html(data[0]['kategori']).css('background-color', str_color[0]).css('color', str_color[1]);
		$('.in-1 > img').attr('src', path+'/'+data[0]['gambar']);
		$('.in-1.js-link').attr('data-link', url+'/viewer/'+data[0]['kategori']+'/'+data[0]['seo']+'-'+data[0]['id']);

		$('.ba-1').hide();
		$('.b-1').attr( "style", "display: block !important;" );
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
		skip: '2',
		kategori: '245'
	},
	dataType: 'json',
	async: true,
	success: function(data) {
		var str_color = data[0]['kategori_color'].split(';');
		$('.in-2 .title').html(data[0]['judul']);
		$('.in-2 .category').html(data[0]['kategori']).css('background-color', str_color[0]).css('color', str_color[1]);
		$('.in-2 > img').attr('src', path+'/'+data[0]['gambar']);
		$('.in-2.js-link').attr('data-link', url+'/viewer/'+data[0]['kategori']+'/'+data[0]['seo']+'-'+data[0]['id']);
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
		skip: '3',
		kategori: '245'
	},
	dataType: 'json',
	async: true,
	success: function(data) {
		var str_color = data[0]['kategori_color'].split(';');
		$('.in-3 .title').html(data[0]['judul']);
		$('.in-3 .category').html(data[0]['kategori']).css('background-color', str_color[0]).css('color', str_color[1]);
		$('.in-3 > img').attr('src', path+'/'+data[0]['gambar']);
		$('.in-3.js-link').attr('data-link', url+'/viewer/'+data[0]['kategori']+'/'+data[0]['seo']+'-'+data[0]['id']);
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
		skip: '4',
		kategori: '245'
	},
	dataType: 'json',
	async: true,
	success: function(data) {
		var str_color = data[0]['kategori_color'].split(';');
		$('.in-4 .title').html(data[0]['judul']);
		$('.in-4 .category').html(data[0]['kategori']).css('background-color', str_color[0]).css('color', str_color[1]);
		$('.in-4 > img').attr('src', path+'/'+data[0]['gambar']);
		$('.in-4.js-link').attr('data-link', url+'/viewer/'+data[0]['kategori']+'/'+data[0]['seo']+'-'+data[0]['id']);
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
		skip: '5',
		kategori: '245'
	},
	dataType: 'json',
	async: true,
	success: function(data) {
		var str_color = data[0]['kategori_color'].split(';');
		$('.in-5 .title').html(data[0]['judul']);
		$('.in-5 .category').html(data[0]['kategori']).css('background-color', str_color[0]).css('color', str_color[1]);
		$('.in-5 > img').attr('src', path+'/'+data[0]['gambar']);
		$('.in-5.js-link').attr('data-link', url+'/viewer/'+data[0]['kategori']+'/'+data[0]['seo']+'-'+data[0]['id']);
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
		skip: '6',
		kategori: '245'
	},
	dataType: 'json',
	async: true,
	success: function(data) {
		var str_color = data[0]['kategori_color'].split(';');
		$('.in-6 .title').html(data[0]['judul']);
		$('.in-6 .category').html(data[0]['kategori']).css('background-color', str_color[0]).css('color', str_color[1]);
		$('.in-6 > img').attr('src', path+'/'+data[0]['gambar']);
		$('.in-6.js-link').attr('data-link', url+'/viewer/'+data[0]['kategori']+'/'+data[0]['seo']+'-'+data[0]['id']);

		$('.ba-2').hide();
		$('.b-2').attr( "style", "display: block !important;" );
	},
	error: function(e){
		console.log('Recall.. API');
		$.ajax(this);
        return;
	} 
});