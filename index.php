<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Ajax VUE.JS </title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.min.css" />
</head>
<body>
	<div class="container">		
		<div id="app">
			<h1> Lista de personajes </h1>
			<div class="row">
				<div class="span12">
					<a href="javascript:void(0)" v-on:click="limpiarBusqueda()"> Limpiar búsqueda </a>
				</div>
			</div>
			<hr />
			<ul>
				<li v-for="item in personajes"> 					
					<h2> {{ item.nombre }} {{ item.apellido }} </h2>
					<div class="row">
						<div class="span2" v-for="item2 in item.juegos">
							<a href="javascript:void(0)" v-on:click="filtrarPorJuego(item2)"> Resident evil {{ item2 }} </a>
						</div>
					</div>
					<hr />
				</li>
			</ul>
		</div>
	</div>
	<script type="text/javascript" src="js/vue.js"></script>
	<script type="text/javascript" src="js/vue-resource.min.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
</body>
</html>