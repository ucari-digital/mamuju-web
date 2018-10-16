$.ajax({
	url: url+'/api/populer',
	type: 'get',
	data: {
		take: '1',
		skip: '0',
		kategori: ''
	},
	dataType: 'json',
	async: true,
	success: function(data) {
		var str_color = data[0]['kategori_color'].split(';');
		$('.pp-0 .title').html(data[0]['judul']);
		$('.pp-0 .category').html(data[0]['kategori']).css('background-color', str_color[0]).css('color', str_color[1]);
		$('.pp-0 > img').attr('src', path+'/'+data[0]['gambar']);
		$('.pp-0.js-link').attr('data-link', url+'/viewer/'+data[0]['kategori']+'/'+data[0]['seo']+'-'+data[0]['id']);

		$('.ea-0').hide();
		$('.e-0').attr( "style", "display: block !important;" );
	},
	error: function(e){
		console.log('Recall.. API');
		$.ajax(this);
        return;
	} 
});

$.ajax({
	url: url+'/api/populer',
	type: 'get',
	data: {
		take: '1',
		skip: '1',
		kategori: ''
	},
	dataType: 'json',
	async: true,
	tryCount : 0,
    retryLimit : 3,
	success: function(data) {
		var str_color = data[0]['kategori_color'].split(';');
		$('.pp-1 .title').html(data[0]['judul']);
		$('.pp-1 .category').html(data[0]['kategori']).css('background-color', str_color[0]).css('color', str_color[1]);
		$('.pp-1 > img').attr('src', path+'/'+data[0]['gambar']);
		$('.pp-1.js-link').attr('data-link', url+'/viewer/'+data[0]['kategori']+'/'+data[0]['seo']+'-'+data[0]['id']);

		$('.ea-1').hide();
		$('.e-1').attr( "style", "display: block !important;" );
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
	url: url+'/api/populer',
	type: 'get',
	data: {
		take: '1',
		skip: '2',
		kategori: ''
	},
	dataType: 'json',
	async: true,
	tryCount : 0,
    retryLimit : 3,
	success: function(data) {
		var str_color = data[0]['kategori_color'].split(';');
		$('.pp-2 .title').html(data[0]['judul']);
		$('.pp-2 .category').html(data[0]['kategori']).css('background-color', str_color[0]).css('color', str_color[1]);
		$('.pp-2 > img').attr('src', path+'/'+data[0]['gambar']);
		$('.pp-2.js-link').attr('data-link', url+'/viewer/'+data[0]['kategori']+'/'+data[0]['seo']+'-'+data[0]['id']);

		$('.ea-1').hide();
		$('.e-1').attr( "style", "display: block !important;" );
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
	url: url+'/api/populer',
	type: 'get',
	data: {
		take: '1',
		skip: '3',
		kategori: ''
	},
	dataType: 'json',
	async: true,
	tryCount : 0,
    retryLimit : 3,
	success: function(data) {
		var str_color = data[0]['kategori_color'].split(';');
		$('.pp-3 .title').html(data[0]['judul']);
		$('.pp-3 .category').html(data[0]['kategori']).css('background-color', str_color[0]).css('color', str_color[1]);
		$('.pp-3 > img').attr('src', path+'/'+data[0]['gambar']);
		$('.pp-3.js-link').attr('data-link', url+'/viewer/'+data[0]['kategori']+'/'+data[0]['seo']+'-'+data[0]['id']);

		$('.ea-1').hide();
		$('.e-1').attr( "style", "display: block !important;" );
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
	url: url+'/api/populer',
	type: 'get',
	data: {
		take: '1',
		skip: '4',
		kategori: ''
	},
	dataType: 'json',
	async: true,
	tryCount : 0,
    retryLimit : 3,
	success: function(data) {
		var str_color = data[0]['kategori_color'].split(';');
		$('.pp-4 .title').html(data[0]['judul']);
		$('.pp-4 .category').html(data[0]['kategori']).css('background-color', str_color[0]).css('color', str_color[1]);
		$('.pp-4 > img').attr('src', path+'/'+data[0]['gambar']);
		$('.pp-4.js-link').attr('data-link', url+'/viewer/'+data[0]['kategori']+'/'+data[0]['seo']+'-'+data[0]['id']);

		$('.ea-1').hide();
		$('.e-1').attr( "style", "display: block !important;" );
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
	url: url+'/api/populer',
	type: 'get',
	data: {
		take: '1',
		skip: '5',
		kategori: ''
	},
	dataType: 'json',
	async: true,
	tryCount : 0,
    retryLimit : 3,
	success: function(data) {
		var str_color = data[0]['kategori_color'].split(';');
		$('.pp-5 .title').html(data[0]['judul']);
		$('.pp-5 .category').html(data[0]['kategori']).css('background-color', str_color[0]).css('color', str_color[1]);
		$('.pp-5 > img').attr('src', path+'/'+data[0]['gambar']);
		$('.pp-5.js-link').attr('data-link', url+'/viewer/'+data[0]['kategori']+'/'+data[0]['seo']+'-'+data[0]['id']);

		$('.ea-2').hide();
		$('.e-2').attr( "style", "display: block !important;" );
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