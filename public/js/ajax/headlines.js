// H01
$.ajax({
	url: url+'/api/news',
	type: 'get',
	data: {
		take: '1',
		skip: '0',
		kategori: ''
	},
	dataType: 'json',
	async: true,
	success: function(data) {
		$('.h-01.title-big').html(data[0]['judul']);
		$('.box-content > img.h-01').attr('src', path+'/'+data[0]['gambar']);
		$('.aa-1').hide();
		$('.a-1').attr( "style", "display: inline-block !important;" );
		$('.a-1.js-link').attr('data-link', url+'/viewer/'+data[0]['kategori']+'/'+data[0]['seo']+'-'+data[0]['id']);
	},
	error: function(e){
		console.log('Recall.. API');
		$.ajax(this);
        return;
	}
});

// H02
$.ajax({
	url: url+'/api/news',
	type: 'get',
	data: {
		take: '1',
		skip: '1',
		kategori: ''
	},
	dataType: 'json',
	async: true,
	success: function(data) {
		var str_color = data[0]['kategori_color'].split(';');
		$('.h-02 .title').html(data[0]['judul']);
		$('.h-02 .category').html(data[0]['kategori']).css('background-color', str_color[0]).css('color', str_color[1]);
		$('.h-02 > img').attr('src', path+'/'+data[0]['gambar']);

		$('.aa-2').hide();
		$('.a-2').attr( "style", "display: inline-block !important;" );
		$('.a-2.js-link').attr('data-link', url+'/viewer/'+data[0]['kategori']+'/'+data[0]['seo']+'-'+data[0]['id']);
	},
	error: function(e){
		console.log('Recall.. API');
		$.ajax(this);
        return;
	} 
});

// H03
$.ajax({
	url: url+'/api/news',
	type: 'get',
	data: {
		take: '1',
		skip: '2',
		kategori: ''
	},
	dataType: 'json',
	async: true,
	success: function(data) {
		var str_color = data[0]['kategori_color'].split(';');
		$('.h-03 .title').html(data[0]['judul']);
		$('.h-03 .category').html(data[0]['kategori']).css('background-color', str_color[0]).css('color', str_color[1]);
		$('.h-03 > img').attr('src', path+'/'+data[0]['gambar']);

		$('.aa-3').hide();
		$('.a-3').attr( "style", "display: inline-block !important;" );
		$('.a-3.js-link').attr('data-link', url+'/viewer/'+data[0]['kategori']+'/'+data[0]['seo']+'-'+data[0]['id']);
	},
	error: function(e){
		console.log('Recall.. API');
		$.ajax(this);
        return;
	} 
});

// H04
$.ajax({
	url: url+'/api/news',
	type: 'get',
	data: {
		take: '1',
		skip: '3',
		kategori: ''
	},
	dataType: 'json',
	async: true,
	success: function(data) {
		var str_color = data[0]['kategori_color'].split(';');
		$('.h-04 .title').html(data[0]['judul']);
		$('.h-04 .category').html(data[0]['kategori']).css('background-color', str_color[0]).css('color', str_color[1]);
		$('.h-04 > img').attr('src', path+'/'+data[0]['gambar']);

		$('.aa-4').hide();
		$('.a-4').attr( "style", "display: inline-block !important;" );
		$('.a-4.js-link').attr('data-link', url+'/viewer/'+data[0]['kategori']+'/'+data[0]['seo']+'-'+data[0]['id']);
	},
	error: function(e){
		console.log('Recall.. API');
		$.ajax(this);
        return;
	} 
});

// H05
$.ajax({
	url: url+'/api/news',
	type: 'get',
	data: {
		take: '1',
		skip: '4',
		kategori: ''
	},
	dataType: 'json',
	async: true,
	success: function(data) {
		var str_color = data[0]['kategori_color'].split(';');
		$('.h-05 .title').html(data[0]['judul']);
		$('.h-05 .category').html(data[0]['kategori']).css('background-color', str_color[0]).css('color', str_color[1]);
		$('.h-05 > img').attr('src', path+'/'+data[0]['gambar']);

		$('.aa-5').hide();
		$('.a-5').attr( "style", "display: inline-block !important;" );
		$('.a-5.js-link').attr('data-link', url+'/viewer/'+data[0]['kategori']+'/'+data[0]['seo']+'-'+data[0]['id']);
	},
	error: function(e){
		console.log('Recall.. API');
		$.ajax(this);
        return;
	} 
});

// H05
$.ajax({
	url: url+'/api/news',
	type: 'get',
	data: {
		take: '1',
		skip: '5',
		kategori: ''
	},
	dataType: 'json',
	async: true,
	success: function(data) {
		var str_color = data[0]['kategori_color'].split(';');
		$('.h-06 .title').html(data[0]['judul']);
		$('.h-06 .category').html(data[0]['kategori']).css('background-color', str_color[0]).css('color', str_color[1]);
		$('.h-06 > img').attr('src', path+'/'+data[0]['gambar']);

		$('.aa-6').hide();
		$('.a-6').attr( "style", "display: inline-block !important;" );
		$('.a-6.js-link').attr('data-link', url+'/viewer/'+data[0]['kategori']+'/'+data[0]['seo']+'-'+data[0]['id']);
	},
	error: function(e){
		console.log('Recall.. API');
		$.ajax(this);
        return;
	} 
});