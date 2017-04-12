var app = new Vue({
	el: '#app',
	data: {
		personajes: []
	},
	methods: {
		filtrarPorJuego: function(juego){
			this.$http.post('_ajax_response.php', {
				juego: juego
			}).then(function(response){				
				this.personajes = response.body;
			}, function(){
				alert('Error!')
			});
		},
		limpiarBusqueda: function(){
			this.$http.get('_ajax_response.php').then(function(response){
				this.personajes = response.body;
			}, function(){
				alert('Error!');
			});
		}
	},
	created: function(){
		this.$http.get('_ajax_response.php').then(function(response){
			this.personajes = response.body;
		}, function(){
			alert('Error!');
		});
	}
});