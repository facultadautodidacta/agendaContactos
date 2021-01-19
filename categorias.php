<!DOCTYPE html>
<html>
<head>
	<title>Categorias contactos</title>
	<link rel="icon" type="image/jpg" href="public/img/favicon.jpg">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php require_once "dependencias.php"; ?>
</head>
<body>
	<div class="container">
		<?php require_once "menu.php"; ?>

		<div class="jumbotron">
			<h1 class="display-4">Categorias</h1>
			<button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarCategoria">
				<span class="fas fa-book"></span> Agregar categoria
			</button>
			<hr class="my-4">
			
			<div id="cargaTablaCategorias"></div>
		</div>

		<?php 
			require_once "vistas/categorias/modalAgregar.php";
			require_once "vistas/categorias/modalActualizar.php";  
		?>
	</div>

	<script src="public/js/categorias.js"></script>
</body>
</html>