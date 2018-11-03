// Search
var serach = new Vue({
	el: '#vue-search',
	data(){
		return {
			textSearch: 'a'
		}
	},
	data: {
		data: []
	},
	methods: {
		search: function(){
			var vue = this;
			$.ajax({
			    url: laravel_url+'/search',
			    data: {
			    	text: this.textSearch
			    }
			}).done(function(response) {
				console.log(response);
			    vue.data = response;

			});
		}
	},
	updated: function(){
		$('.img').each(function(i, obj){
			console.log(obj);
			var img_url = $(obj).data('img');
			var id = $(obj).attr('id');
			var elm = document.getElementById(id);
			elm.style.backgroundImage = 'url('+img_url+')';
		});
	}
});