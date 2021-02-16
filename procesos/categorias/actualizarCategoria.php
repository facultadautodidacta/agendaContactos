<?php 

	require_once "../../clases/Categorias.php";

	$datos = array(
				"idCategoria" => $_POST['idCategoria'],
				"nombre" => $_POST['nombreCategoriaU'],
				"descripcion" => $_POST['descripcionU']
					);
	$Categorias = new Categorias();
	echo $Categorias->actualizarCategoria($datos);
 ?>